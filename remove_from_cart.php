<?php
session_start();
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['image_path']) && isset($_POST['album_name'])) {
        $imagePath = $_POST['image_path'];
        $albumName = $_POST['album_name'];

        if (isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array_filter($_SESSION['cart'], function($item) use ($imagePath, $albumName) {
                return !($item['path'] === $imagePath && $item['album'] === $albumName);
            });

            // Osigurajte da je niz pravilno indeksiran
            $_SESSION['cart'] = array_values($_SESSION['cart']);

            $response = [
                'status' => 'success',
                'message' => 'Image removed from cart successfully.',
                'data' => $_SESSION['cart'],
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Cart is empty.',
            ];
        }
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Required data missing.',
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
