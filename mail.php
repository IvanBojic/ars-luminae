<?php

include_once 'components/php_composer.php';
// Univerzalni PHP skript za slanje mejlova sa slikom

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $data = $_POST;

    // Sanitizacija i priprema podataka
    $project_name = htmlspecialchars(trim($data["project_name"]));
    $admin_email  = htmlspecialchars(trim($data["admin_email"]));
    $form_subject = htmlspecialchars(trim($data["form_subject"]));
    $name         = htmlspecialchars(trim($data["Name"]));
    $email        = htmlspecialchars(trim($data["Email"]));
    $subject      = htmlspecialchars(trim($data["Subject"]));
    $message      = htmlspecialchars(trim($data["Message"]));

    // Validacija email adrese
    if (!filter_var($admin_email, FILTER_VALIDATE_EMAIL)) {
        die('Neispravna mejl adresa.');
    }

    // Formiranje HTML sadržaja mejla sa slikom
    $email_content = "
        <html>
        <head>
            <style>
                /* Stilovi za mejl */
            </style>
        </head>
        <body>
            <p><img src='https://bojovilinno.com/assets/img/ars-luminae-logo.png' alt='Slika' style='width: 100%; height: 50px;'></p>
            <h2>Poruka sa kontakt forme</h2>
            <p><strong>Ime i prezime:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Naslov:</strong> $subject</p>
            <p><strong>Poruka:</strong></p>
            <p>$message</p>
        </body>
        </html>
    ";

    // Headers za HTML mejl
    $headers = "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-Type: text/html; charset=UTF-8" . PHP_EOL;
    $headers .= "From: $project_name <$admin_email>" . PHP_EOL;

    // Slanje mejla
    if (mail($admin_email, $form_subject, $email_content, $headers)) {
        echo 'Mejl je uspešno poslat.';
    } else {
        echo 'Slanje mejla nije uspelo.';
    }
} else {
    echo 'Nevažeći metod zahteva.';
}

?>
