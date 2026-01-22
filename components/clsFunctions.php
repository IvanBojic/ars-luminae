<?php

class clsFunctions
{

    public static function procitajSlikeIzFoldera($folder, $filterTime = null)
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
                            $timeToFilter = $dateTime->format('H');
                        } else {
                            $timeTaken = 'N/A';
                            $timeToFilter = "01";
                        }
                    } else {
                        $timeTaken = "01:00";
                        $timeToFilter = "01";
                    }

                    // Ako je filter postavljen, preskoči slike koje ne odgovaraju filteru
                    if ($filterTime && $filterTime !== 'all' && $timeToFilter !== $filterTime) {
                        continue;
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

    // Funkcija koja obavlja filtriranje i vraća JSON odgovor
    public static function filtrirajSlike($folder, $filterTime) {
        $slike = self::procitajSlikeIzFoldera($folder, $filterTime);
        return json_encode($slike);
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

    public static function procitajFoldere($folder = null)
    {
        // Ako je folder prosleđen i nije prazan – koristi njega,
        // u suprotnom koristi podrazumevani albums folder
        $folder = (!empty($folder)) ? $folder : 'assets/img/albums';

        $folderi = array();
        $putanjaDoFoldera = __DIR__ . '/../' . $folder;

        // Provera da li folder postoji i da li je direktorijum
        if (is_dir($putanjaDoFoldera)) {
            $datoteke = scandir($putanjaDoFoldera);

            foreach ($datoteke as $datoteka) {
                // preskoči . i ..
                if ($datoteka === '.' || $datoteka === '..') {
                    continue;
                }

                $putanjaDoDatoteke = $putanjaDoFoldera . '/' . $datoteka;

                if (is_dir($putanjaDoDatoteke)) {
                    $folderi[] = array(
                        'path'  => $folder . '/' . $datoteka,
                        'title' => $datoteka,
                        'file'  => $datoteka,
                        'count' => self::prebrojSlikeIzFoldera($putanjaDoDatoteke),
                    );
                }
            }
        }

        return $folderi;
    }

    public static function getFolderInfo($folder = null)
    {
        // Podrazumevani folder ako nije prosleđen
        $folder = (!empty($folder)) ? $folder : 'assets/img/albums';

        $putanja = __DIR__ . '/../' . $folder;

        // Ako folder ne postoji ili nije direktorijum
        if (!is_dir($putanja)) {
            return null;
        }

        return [
            'path'   => $folder,
            'title'  => basename($folder),
            'count'  => self::prebrojSlikeIzFoldera($putanja),
            'exists' => true
        ];
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

    public static function getFirstImage($album, $basePath = 'assets/img/albums')
    {
        // Ako je prosleđen ceo path (npr. img/portfolio/Album)
        if (strpos($album, '/') !== false) {
            $folderPath = $album;
        } else {
            // Klasičan slučaj: albums/NazivAlbuma
            $folderPath = rtrim($basePath, '/') . '/' . $album;
        }

        // Fizička putanja
        $dir = __DIR__ . '/../' . $folderPath;

        if (!is_dir($dir)) {
            return 'assets/img/main/grid/img-1.jpg';
        }

        $allowedExt = array('jpg', 'jpeg', 'png', 'gif', 'webp');
        $files = scandir($dir);

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;

            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, $allowedExt)) {
                return $folderPath . '/' . $file;
            }
        }

        return 'assets/img/main/grid/img-1.jpg';
    }

    public static function render_pagination($current_page, $total_pages, $album_naziv) {
        $max_pages_to_show = 5;
        $pages = [];

        if ($total_pages <= $max_pages_to_show) {
            for ($i = 1; $i <= $total_pages; $i++) {
                $pages[] = $i;
            }
        } else {
            $pages[] = 1;
            if ($current_page > 3) {
                $pages[] = '...';
            }

            $start = max(2, $current_page - 1);
            $end = min($total_pages - 1, $current_page + 1);

            for ($i = $start; $i <= $end; $i++) {
                $pages[] = $i;
            }

            if ($current_page < $total_pages - 2) {
                $pages[] = '...';
            }
            $pages[] = $total_pages;
        }

        foreach ($pages as $page) {
            if ($page === '...') {
                echo '<li><span>...</span></li>';
            } else {
                $active_class = $page == $current_page ? 'class="active"' : '';
                echo '<li ' . $active_class . '><a href="?album=' . $album_naziv . '&page=' . $page . '">' . $page . '</a></li>';
            }
        }
    }

    public static function getAlbumMeta($albumName)
    {
        $jsonFile = __DIR__ . '/../assets/img/portfolio/albums_meta.json';

        if (!file_exists($jsonFile)) {
            return null;
        }

        $data = json_decode(file_get_contents($jsonFile), true);

        if (!is_array($data)) {
            return null;
        }

        foreach ($data as $album) {
            if (!empty($album['item']) && $album['item'] === $albumName) {
                return $album;
            }
        }

        return null;
    }

}