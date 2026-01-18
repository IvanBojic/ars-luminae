<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

header('Content-Type: application/json');

$response = ['status' => 'error', 'message' => ''];

$mailConfig = require '../config/mail.php';

/* =========================
   VALIDACIJA FORME
========================= */
$name    = trim($_POST['Name'] ?? '');
$email   = trim($_POST['Email'] ?? '');
$phone   = trim($_POST['Phone'] ?? '');
$address = trim($_POST['Address'] ?? '');
$zip     = trim($_POST['Zip'] ?? '');
$city    = trim($_POST['City'] ?? '');
$message = trim($_POST['Message'] ?? '');
$captcha = $_POST['captcha'] ?? '';
$captcha_result = $_POST['captcha_result'] ?? '';

if ($captcha != $captcha_result) {
    $response['message'] = 'Pogrešan odgovor na pitanje.';
    echo json_encode($response);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Neispravna email adresa.';
    echo json_encode($response);
    exit;
}

/* =========================
   KORPA
========================= */
$cartItems = json_decode($_POST['cartData'] ?? '[]', true);

if (!is_array($cartItems) || empty($cartItems)) {
    $response['message'] = 'Korpa je prazna.';
    echo json_encode($response);
    exit;
}

$photoPrice = 200;
$totalQty = 0;
$totalPrice = 0;

$photos = [];
$cartTable = '';

foreach ($cartItems as $item) {
    $qty = (int)$item['quantity'];
    $totalQty += $qty;
    $totalPrice += $qty * $photoPrice;

    $photos[] = [
        'album' => $item['album'],
        'title' => $item['title'],
        'path'  => $item['path'],
        'qty'   => $qty
    ];

    $img = "https://duskolukovic.com/" . $item['path'];

    $cartTable .= "
    <tr>
        <td><img src='{$img}' width='100'></td>
        <td>{$item['album']}</td>
        <td>{$item['title']}</td>
        <td>{$qty}</td>
    </tr>";
}

/* =========================
   JSON UPIS PORUDŽBINE
========================= */
$orderId = 'ORD-' . date('Ymd-His');
$orderFile = '../docs/orders.json';

$orderData = [
    'order_id' => $orderId,
    'created_at' => date('Y-m-d H:i:s'),
    'customer' => [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'zip' => $zip,
        'city' => $city,
        'message' => $message
    ],
    'photos' => $photos,
    'summary' => [
        'photo_price' => $photoPrice,
        'total_qty' => $totalQty,
        'total_price' => $totalPrice
    ]
];

$orders = file_exists($orderFile)
    ? json_decode(file_get_contents($orderFile), true)
    : [];

$orders[] = $orderData;
file_put_contents($orderFile, json_encode($orders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

/* =========================
   TELO MEJLA
========================= */
$mailBody = "
<h2>Nova porudžbina – {$orderId}</h2>

<p><strong>Ime:</strong> {$name}</p>
<p><strong>Email:</strong> {$email}</p>
<p><strong>Telefon:</strong> {$phone}</p>
<p><strong>Adresa:</strong> {$address}, {$zip} {$city}</p>

<hr>

<table border='1' cellpadding='6' cellspacing='0' width='100%'>
<tr>
<th>Slika</th><th>Album</th><th>Naziv</th><th>Količina</th>
</tr>
{$cartTable}
</table>

<hr>

<p>
<strong>Ukupno fotografija:</strong> {$totalQty}<br>
<strong>Cena:</strong> {$totalPrice} RSD
</p>
";

/* =========================
   SMTP SLANJE
========================= */
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $mailConfig['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $mailConfig['username'];
    $mail->Password = $mailConfig['password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $mailConfig['port'];

    $mail->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $mail->addReplyTo($email, $name);
    $mail->addAddress($mailConfig['admin_email']);

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = "Nova porudžbina – {$orderId}";
    $mail->Body = $mailBody;

    $mail->send();

    $response['status'] = 'success';
    $response['message'] = 'Porudžbina je uspešno poslata.';

} catch (Exception $e) {
    $response['message'] = 'SMTP greška: ' . $mail->ErrorInfo;
}

echo json_encode($response);
