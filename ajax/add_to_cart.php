<?php
session_start();
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['image_path']) && isset($_POST['album_name'])) {
        $imagePath = $_POST['image_path'];
        $imageTime = $_POST['image_time'];
        $albumName = $_POST['album_name'];
        $photoName = $_POST['photo_name'];
        $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

        $newItem = [
            'path' => $imagePath,
            'time' => $imageTime,
            'album' => isset($albumName) && $albumName ? $albumName : 'Nepoznat album',
            'title' => isset($photoName) && $photoName ? $photoName : 'Bez naziva',
            'quantity' => $quantity
        ];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $exists = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['path'] === $imagePath && $item['album'] === $albumName) {
                $item['quantity'] = $quantity; // Update quantity if item exists
                $exists = true;
                break;
            }
        }

        if (!$exists) {
            $_SESSION['cart'][] = $newItem;
        }

        $response = [
            'status' => 'success',
            'message' => 'Image added to cart successfully.',
            'data' => $_SESSION['cart'],
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Required data missing.',
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
