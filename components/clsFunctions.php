<?php

class clsFunctions
{

    public static function procitajSlikeIzFoldera($folder)
    {
        $slike = array();
        $putanjaDoFoldera = __DIR__ . '/../' . $folder; // Prilagodite putanju ako je potrebno

        // Provera da li je folder validan
        if (is_dir($putanjaDoFoldera)) {
            $datoteke = scandir($putanjaDoFoldera); // Učitava sve datoteke iz foldera

            // Iteracija kroz sve datoteke
            foreach ($datoteke as $datoteka) {
                $putanjaDoDatoteke = $putanjaDoFoldera . '/' . $datoteka;

                // Provera da li je datoteka slika
                if (is_file($putanjaDoDatoteke) && $datoteka !== '.' && $datoteka !== '..' && preg_match("/\.(jpg|jpeg|png|gif)$/i", $datoteka)) {
                    $nazivSlike = pathinfo($datoteka, PATHINFO_FILENAME);

                    // Preuzimanje EXIF podataka
                    $exif = exif_read_data($putanjaDoDatoteke, 0, true);

                    // Provera i formatiranje datuma snimanja slike
                    $dateTaken = isset($exif['EXIF']['DateTimeOriginal']) ? $exif['EXIF']['DateTimeOriginal'] : 'N/A';

                    if ($dateTaken !== 'N/A') {
                        // Kreiranje DateTime objekta
                        $dateTime = DateTime::createFromFormat('Y:m:d H:i:s', $dateTaken);
                        if ($dateTime) {
                            // Formatiranje vremena u 'HH:MM'
                            $timeTaken = $dateTime->format('H:i');
                        } else {
                            $timeTaken = 'N/A';
                        }
                    } else {
                        $timeTaken = '';
                    }

                    $slike[] = [
                        'path'    => $folder . '/' . $datoteka,
                        'title'   => $nazivSlike,
                        'created_time' => $timeTaken
                    ];

                }
            }
        }

        // Sortiranje slika prema 'created_time'
        usort($slike, function($a, $b) {
            if ($a['created_time'] == $b['created_time']) {
                return 0;
            }
            return ($a['created_time'] < $b['created_time']) ? -1 : 1;
        });

        return $slike;
    }

    public static function procitajSlikeIzJSON($jsonFile)
    {

        $slike = array();

        $jsonFile = isset($jsonData) ? $jsonFile : __DIR__ . '/../reference.json';

        $jsonData = file_get_contents($jsonFile); // Učitava JSON datoteku
        $data = json_decode($jsonData, true); // Pretvara JSON u PHP niz

        // Iteracija kroz JSON niz
        foreach ($data as $slika) {
            // Pristupanje elementima pomoću ključeva
            $title = $slika['title'];
            $path = $slika['path'];
            $link = $slika['link'];

            // Dodavanje slike u rezultujući niz
            $slike[] = [
                'title' => $title,
                'path' => $path,
                'link' => $link
            ];
        }

        return $slike;
    }

    public static function procitajFoldere($folder)
    {
        $folder = 'assets/img/album-single';
        $albumi = array();
        $putanjaDoFoldera = __DIR__ . '/../' . $folder; // Prilagodite putanju ako je potrebno

        // Provera da li je folder validan
        if (is_dir($putanjaDoFoldera)) {
            $datoteke = scandir($putanjaDoFoldera); // Učitava sve datoteke iz foldera

            // Iteracija kroz sve datoteke
            foreach ($datoteke as $datoteka) {
                $putanjaDoDatoteke = $putanjaDoFoldera . '/' . $datoteka;

                // Provera da li je element direktorijum i da nije '.' ili '..'
                if (is_dir($putanjaDoDatoteke) && $datoteka !== '.' && $datoteka !== '..') {
                    $nazivFoldera = basename($datoteka);

                    $folderi[] = [
                        'path'  => $folder . '/' . $datoteka,
                        'title' => $nazivFoldera,
                        'file'  => $datoteka,
                        'count' => self::prebrojSlikeIzFoldera($putanjaDoDatoteke),
                    ];
                }
            }
        }

        return $folderi;
    }

    public static function prebrojSlikeIzFoldera($putanjaDoFoldera)
    {
        $brojSlika = 0;

        // Provera da li je folder validan
        if (is_dir($putanjaDoFoldera)) {
            $datoteke = scandir($putanjaDoFoldera); // Učitava sve datoteke iz foldera

            // Iteracija kroz sve datoteke
            foreach ($datoteke as $datoteka) {

                // Provera da li je element direktorijum i da nije '.' ili '..'
                if (is_file($putanjaDoFoldera . '/' . $datoteka) && $datoteka !== '.' && $datoteka !== '..') {

                    $putanjaDoDatoteke = $putanjaDoFoldera . '/' . $datoteka;
                    // Provera da li je datoteka slika
                    if (is_file($putanjaDoDatoteke) && preg_match("/\.(jpg|jpeg|png|gif)$/i", $datoteka)) {
                        $brojSlika++;
                    }
                }
            }
        }

        return $brojSlika;
    }

    public static function getFirstImage($albumTitle) {
        $imagePath = "assets/img/album-single/$albumTitle/";
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Dodajte ostale ekstenzije ako je potrebno

        foreach ($imageExtensions as $ext) {
            $imageFile = glob($imagePath . $albumTitle . ".*");
            if (!empty($imageFile)) {
                return $imageFile[0]; // Pronađena prva slika
            }
        }

        // Defaultna slika ili fallback u slučaju da slika ne postoji
        return "assets/img/album-list/grid/img-1.jpg";
    }

}