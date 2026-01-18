<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Postavljanje Content-Security-Policy header-a
header('Content-Type: application/json');

$response = ['status' => 'error', 'message' => ''];

// Prikupite podatke iz forme
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];
$captcha = $_POST['captcha'];
$captcha_result = $_POST['captcha_result'];

if ($captcha != $captcha_result) {
    $response['message'] = 'Pogrešan odgovor na pitanje.';
    echo json_encode($response);
    exit;
}

// Kreirajte telo mejla sa stilizovanim HTML-om
$mailBody = "
<div class='container' style='background-color:#999'>
  <div class='row'>
    <img src='https://duskolukovic.com/assets/img/ars-luminae-logo.png' alt='logo' style='width:100%'>
  </div>
  <div class='row' style='text-align:center'>
    <h2>Poruka sa kontakt forme</h2>
  </div>
  <div class='row' style='padding:15px'>
    <p><strong>Ime i prezime:</strong> " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Naslov:</strong> " . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') . "</p>
    <p><strong>Poruka:</strong> " . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . "</p>
  </div>
</div>";

$mail = new PHPMailer(true);

try {
    // Podešavanja servera
    $mail->SMTPDebug = 0; // Onemogućite debug output
    $mail->isMail();
    /* $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;  */

    // Primaoci
    $mail->setFrom($email, $name);
    $mail->addAddress('duskolukovic@gmail.com', 'Admin');

    // Sadržaj
    $mail->isHTML(true); // Postavite na true za HTML sadržaj
    $mail->Subject = 'Poruka sa kontakt forme - duskolukovic.com';
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
