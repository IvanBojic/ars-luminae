<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_GET['album'])) {
    http_response_code(400);
    exit('Album nije definisan.');
}

$album = basename($_GET['album']);

// PROVERA SESSION DOZVOLE
if (
    empty($_SESSION['album_access']) ||
    empty($_SESSION['album_access'][$album])
) {
    http_response_code(403);
    exit('Nemate dozvolu za preuzimanje ovog albuma.');
}

// Putanje
$baseDir = realpath(__DIR__ . '/assets/img/portfolio/download');
$albumDir = $baseDir . '/' . $album;

// Validacija foldera - koristi is_dir umesto realpath
if (!is_dir($albumDir)) {
    http_response_code(404);
    exit('Album ne postoji.');
}

$albumDirReal = realpath($albumDir);

// Sprečavanje path traversal napada
if (!$albumDirReal || strpos($albumDirReal, realpath($baseDir)) !== 0) {
    http_response_code(403);
    exit('Nedozvoljen pristup.');
}

// Kreiranje ZIP-a
$zipName = $album . '.zip';
$tmpZip = sys_get_temp_dir() . '/' . uniqid('zip_', true) . '.zip';

$zip = new ZipArchive();
if ($zip->open($tmpZip, ZipArchive::CREATE) !== true) {
    http_response_code(500);
    exit('Greška pri kreiranju ZIP fajla.');
}

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($albumDirReal, FilesystemIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if ($file->isFile()) {
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($albumDirReal) + 1);
        $zip->addFile($filePath, $relativePath);
    }
}

$zip->close();

// Slanje ZIP-a
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . $zipName . '"');
header('Content-Length: ' . filesize($tmpZip));
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');

readfile($tmpZip);
unlink($tmpZip);
exit;
?>