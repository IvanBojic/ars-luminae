<?php
include_once __DIR__ . '/../components/php_composer.php';
require_once __DIR__ . '/../config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$album = $_POST['album'] ?? '';
$password = $_POST['password'] ?? '';

if ($album === '' || $password === '') {
    echo json_encode(['success' => false, 'message' => 'Nedostaju podaci']);
    exit;
}

$metaFile = __DIR__ . '/../assets/img/portfolio/albums_meta.json';
$albums = json_decode(file_get_contents($metaFile), true);

foreach ($albums as $item) {
    if ($item['item'] === $album) {

        if (empty($item['password'])) {
            echo json_encode(['success' => false, 'message' => 'Album nema lozinku']);
            exit;
        }
        
        // Direktno poređenje plain text lozinki
        if ($password === $item['password']) {

            // SESSION DOZVOLA
            $_SESSION['album_access'][$album] = true;

            echo json_encode(['success' => true]);
            exit;
        }

        break;
    }
}

echo json_encode(['success' => false, 'message' => 'Pogrešna lozinka']);
?>