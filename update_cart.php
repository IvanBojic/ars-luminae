<?php
// Pokrenite sesiju na početku skripte
session_start();

// Isključite sve greške
error_reporting(0);

// Proverite da li su podaci poslati preko POST zahteva
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Proverite da li su svi potrebni podaci prisutni
    if (isset($_POST['image_path']) && isset($_POST['album_name'])) {
        $imagePath = $_POST['image_path'];
        $imageTime = $_POST['image_time'];
        $albumName = $_POST['album_name'];

        $newItem = [
            'path' => $imagePath,
            'time' => $imageTime,
            'album' => isset($albumName) && $albumName ? $albumName : 'Nepoznat album'
        ];

        // Inicijalizujte korpu ako nije već inicijalizovana
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Dodajte novi predmet u korpu
        $_SESSION['cart'][] = $newItem;

        // Primer odgovora
        $response = [
            'status' => 'success', // ili 'error' u zavisnosti od ishoda
            'message' => 'Image added to cart successfully.',
            'data'    => $_SESSION['cart'],
        ];
    } else {
        // Ako neki od podataka nedostaje, vratite grešku
        $response = [
            'status' => 'error',
            'message' => 'Required data missing.',
        ];
    }

    // Vratite odgovor u JSON formatu
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
