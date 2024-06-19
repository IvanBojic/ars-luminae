<?php
header('Content-Type: application/json');
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    $response = [
        'error' => true,
        'message' => $errstr,
        'file' => $errfile,
        'line' => $errline
    ];
    echo json_encode($response);
    exit;
});

include_once 'components/php_composer.php'; // Uključite vašu PHP klasu

if (isset($_POST['time']) && isset($_POST['album'])) {
    $time = $_POST['time'];
    $album = $_POST['album'];
    $folder = 'assets/img/album-single/' . $album;

    $slike = clsFunctions::procitajSlikeIzFoldera($folder, $time);

    $items_per_page = isset($_POST['items_per_page']) ? intval($_POST['items_per_page']) : 25; // Koristite isti ključ kao u JavaScript kodu
    $current_page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $total_items = count($slike);
    $total_pages = ceil($total_items / $items_per_page);

    // Filtrirajte slike za trenutnu stranicu
    $start_index = ($current_page - 1) * $items_per_page;
    $filtered_slike = array_slice($slike, $start_index, $items_per_page);

    function render_pagination($current_page, $total_pages, $album_naziv) {
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

        ob_start();
        foreach ($pages as $page) {
            if ($page === '...') {
                echo '<li><span>...</span></li>';
            } else {
                $active_class = $page == $current_page ? 'class="active"' : '';
                echo '<li ' . $active_class . '><a href="#" class="pagination-link" data-page="' . $page . '">' . $page . '</a></li>';
            }
        }
        $pagination_html = ob_get_contents();
        ob_end_clean();

        return $pagination_html;
    }

    $response = [
        'images' => $filtered_slike,
        'pagination' => [
            'current_page' => $current_page,
            'total_pages' => $total_pages,
            'html' => render_pagination($current_page, $total_pages, $album)
        ]
    ];

    echo json_encode($response);
}

?>
