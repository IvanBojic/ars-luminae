<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

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
    die('Pogrešan odgovor na pitanje.');
}

// Prikupite artikle iz korpe
$cartData = isset($_POST['cartData']) ? $_POST['cartData'] : '[]';
$cartItems = json_decode($cartData, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('Neuspešna konverzija podataka iz korpe.');
}

// Kreirajte telo mejla sa informacijama iz korpe u HTML tabelarnom formatu
$cartDetails = "<table border='1' cellpadding='5' cellspacing='0' width='100%'>";
$cartDetails .= "<thead><tr><th>Slika</th><th>Album</th><th>Količina</th></tr></thead>";
$cartDetails .= "<tbody>";

foreach ($cartItems as $item) {
    $cartDetails .= "<tr>";
    $cartDetails .= "<td><a href='https://bojovilinno.com/" . htmlspecialchars($item['path'], ENT_QUOTES, 'UTF-8') . "' target='_blank'><img src='" . htmlspecialchars($item['path'], ENT_QUOTES, 'UTF-8') . "' alt='" . htmlspecialchars($item['album'], ENT_QUOTES, 'UTF-8') . "' width='100'></a></td>";
    $cartDetails .= "<td>" . htmlspecialchars($item['album'], ENT_QUOTES, 'UTF-8') . "</td>";
    $cartDetails .= "<td>1</td>"; // Pretpostavimo da je količina uvek 1
    $cartDetails .= "</tr>";
}

$cartDetails .= "</tbody></table>";

// Kreirajte telo mejla sa stilizovanim HTML-om
$mailBody = "
<div class='container' style='background-color:#999'>
  <div class='row'>
    <img src='https://bojovilinno.com/assets/img/ars-luminae-logo.png' alt='logo' style='width:100%' />
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
</div>";

$mail = new PHPMailer(true);

try {
    // Podešavanja servera
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Postavite odgovarajući SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'ivan.bojic95@gmail.com'; // Vaša SMTP email adresa
    $mail->Password = 'dankabojic'; // Vaša SMTP lozinka
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Primaoci
    $mail->setFrom($email, $name);
    $mail->addAddress('ivan.bojic95@gmail.com', 'Admin');

    // Sadržaj
    $mail->isHTML(true); // Postavite na true za HTML sadržaj
    $mail->Subject = 'Poruka sa sajta duskolukovic.com';
    $mail->Body    = $mailBody;
    $mail->CharSet = 'UTF-8'; // Postavite UTF-8 kodiranje
print_r($mail->Body);
die();
    $mail->send();
    echo 'Poruka je uspešno poslata.';
} catch (Exception $e) {
    echo "Poruka nije poslata. Greška: {$mail->ErrorInfo}";
}
?>
