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
                if (is_file($putanjaDoDatoteke) && preg_match("/\.(jpg|jpeg|png|gif)$/", $datoteka)) {
                    $nazivSlike = pathinfo($datoteka, PATHINFO_FILENAME);

                    $slike[] = [
                        'path'    => $folder . '/' . $datoteka,
                        'title'   => $nazivSlike,
                    ];

                }
            }
        }

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
                    if (is_file($putanjaDoDatoteke) && preg_match("/\.(jpg|jpeg|png|gif)$/", $datoteka)) {
                        $brojSlika++;
                    }
                }
            }
        }

        return $brojSlika;
    }

}