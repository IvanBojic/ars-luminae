<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Postavljanje Content-Security-Policy header-a
header("Content-Security-Policy: default-src 'none'; img-src 'self' https://ci3.googleusercontent.com;");
header('Content-Type: application/json');

$response = ['status' => 'error', 'message' => ''];

// Prikupite podatke iz forme
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$address = $_POST['Address'];
$zip = $_POST['Zip'];
$city = $_POST['City'];
$message = $_POST['Message'];
$captcha = $_POST['captcha'];
$captcha_result = $_POST['captcha_result'];

if ($captcha != $captcha_result) {
    $response['message'] = 'Pogrešan odgovor na pitanje.';
    echo json_encode($response);
    exit;
}

// Prikupite artikle iz korpe
$cartData = isset($_POST['cartData']) ? $_POST['cartData'] : '[]';
$cartItems = json_decode($cartData, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    $response['message'] = 'Neuspešna konverzija podataka iz korpe.';
    echo json_encode($response);
    exit;
}

// Definišite cenu jedne fotografije
$photoPrice = 200;
$totalItemCount = 0;
$totalPrice = 0;

// Kreirajte telo mejla sa informacijama iz korpe u HTML tabelarnom formatu
$cartDetails = "<table border='2' cellpadding='5' cellspacing='0' width='100%'>";
$cartDetails .= "<thead><tr><th>Slika</th><th>Album</th><th>Naziv</th><th>Količina</th></tr></thead>";
$cartDetails .= "<tbody>";

foreach ($cartItems as $item) {
    $image_url = "https://bojovilinno.com/" . $item['path'];
    $cartDetails .= "<tr>";
    $cartDetails .= "<td><img src='$image_url' alt='" . htmlspecialchars($item['album'], ENT_QUOTES, 'UTF-8') . "' width='100'></td>";
    $cartDetails .= "<td>" . htmlspecialchars($item['album'], ENT_QUOTES, 'UTF-8') . "</td>";
    $cartDetails .= "<td>" . htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') . "</td>";
    $cartDetails .= "<td>" . htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8') . "</td>";
    $cartDetails .= "</tr>";

    // Izračunajte ukupnu količinu i cenu
    $totalItemCount += $item['quantity'];
    $totalPrice += $photoPrice * $item['quantity'];
}

$cartDetails .= "</tbody></table>";

// Kreirajte telo mejla sa stilizovanim HTML-om
$mailBody = "
<div class='container' style='background-color:#999'>
  <div class='row'>
    <img src='https://bojovilinno.com/assets/img/ars-luminae-logo.png' alt='logo' style='width:100%'>
  </div>
  <div class='row' style='text-align:center'>
    <h2>Nova porudzbina sa sajta Ars Luminae</h2>
  </div>
  <div class='row' style='padding:15px'>
    <p><strong>Ime i prezime:</strong> " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Telefon:</strong> " . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Adresa:</strong> " . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Poštanski broj:</strong> " . htmlspecialchars($zip, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Grad:</strong> " . htmlspecialchars($city, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Poruka:</strong> " . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . "</p>
  </div>
  <div class='row' style='padding:15px'>
    <p><strong>Poručene fotografije:</strong></p>
    $cartDetails
  </div>
  <div class='row' style='padding:15px'>
    <div class='col-lg-4'>
      <strong>Cena jedne fotografije:</strong> ${photoPrice}.00RSD<br>
      <strong>Broj poručenih fotografija:</strong> ${totalItemCount}<br>
      <strong>Ukupna cena fotografija:</strong> ${totalPrice}.00RSD
    </div>
  </div>
</div>";

$mail = new PHPMailer(true);

try {
    // Podešavanja servera
    $mail->SMTPDebug = 0; // Onemogućite debug output
    $mail->isMail();
    /* $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ivan.bojic95@gmail.com';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;  */

    // Primaoci
    $mail->setFrom('ivan.bojic@bojovilinno.com', 'Admin');
    $mail->addAddress($email, $name);

    // Sadržaj
    $mail->isHTML(true); // Postavite na true za HTML sadržaj
    $mail->Subject = 'Poruka sa sajta duskolukovic.com';
    $mail->Body    = $mailBody;
    $mail->CharSet = 'UTF-8'; // Postavite UTF-8 kodiranje

    $mail->send();
    $response['status'] = 'success';
    $response['message'] = 'Poruka je uspešno poslata.';
} catch (Exception $e) {
    $response['message'] = "Poruka nije poslata. Greška: {$mail->ErrorInfo}";
}

echo json_encode($response);
?>
