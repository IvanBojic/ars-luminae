<?php
include_once 'components/php_composer.php'; // Uključite vašu PHP klasu

if (isset($_POST['time']) && isset($_POST['album'])) {
    $time = $_POST['time'];
    $album = $_POST['album'];
    $folder = 'assets/img/album-single/' . $album;

    $response = clsFunctions::procitajSlikeIzFoldera($folder, $time);

    echo json_encode($response); // Konvertujte niz u JSON format
}
?>
