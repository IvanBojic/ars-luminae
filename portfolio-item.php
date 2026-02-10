<?php
include_once 'components/php_composer.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* -------------------------
   VALIDACIJA FOLDERA
-------------------------- */
$folder = $_GET['folder'] ?? '';
$folder = trim($folder);

if ($folder === '') {
    die('Album nije definisan.');
}

$albumName = basename($folder);
$albumMeta = clsFunctions::getAlbumMeta($albumName) ?? [];

$hasPassword = !empty($albumMeta['password']);

$hasAccess = !$hasPassword || !empty($_SESSION['album_access'][$albumName]);

/* -------------------------
   PODACI O ALBUMU
-------------------------- */
$folder_info = clsFunctions::getFolderInfo($folder);

// Ako folder nije pronađen, pokušaj sa drugom putanjom
if (!$folder_info) {
    $folder = 'assets/img/portfolio/shared/' . $albumName;
    $folder_info = clsFunctions::getFolderInfo($folder);
}

// Ako i dalje nije pronađen, postavi default vrednosti
if (!$folder_info) {
    $folder_info = [
        'title' => $albumName,
        'count' => 0,
        'path' => $folder
    ];
}

$shortDesc = $albumMeta['description']['short'] ?? '';
$fullDesc  = $albumMeta['description']['full'] ?? '';

/* -------------------------
   PRVA SLIKA ZA SHARE
-------------------------- */
$slike = clsFunctions::procitajSlikeIzFoldera($folder);
$slike = is_array($slike) ? array_values($slike) : [];
$firstImagePath = !empty($slike[0]['path']) ? $slike[0]['path'] : '';
$shareUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/portfolio-item.php?folder=' . urlencode($folder);

/* -------------------------
   NAVIGACIJA ALBUMA
-------------------------- */
$albumi = clsFunctions::procitajFoldere('assets/img/portfolio/shared');

// Izvlači samo nazive albuma
$albumList = [];
if (is_array($albumi) && !empty($albumi)) {
    foreach ($albumi as $album) {
        if (isset($album['title'])) {
            $albumList[] = $album['title'];
        }
    }
}

// Pronalazi trenutni album
$currentAlbumIndex = array_search($albumName, $albumList, true);

// Logika navigacije sa kruživanjem
$prevAlbum = null;
$nextAlbum = null;

if ($currentAlbumIndex !== false && count($albumList) > 1) {
    // Kruživanje: ako je prvi, prev je poslednji; ako je poslednji, next je prvi
    $prevAlbum = $albumList[($currentAlbumIndex - 1 + count($albumList)) % count($albumList)];
    $nextAlbum = $albumList[($currentAlbumIndex + 1) % count($albumList)];
}

// Provera da li album postoji za preuzimanje
$downloadDir = __DIR__ . '/assets/img/portfolio/download';
$zipPath = $downloadDir . '/' . $albumName . '.zip';

$albumDownloadExists = file_exists($zipPath) && is_file($zipPath);

?>

<!DOCTYPE html>

<html lang="en">
<?php
        /* Including head */
        include 'head.php';
    ?>


<!-- =================
///// Begin body /////
================== -->
<body id="body">

<!-- Begin page preloader -->
<div id="preloader">
    <div class="pulse bg-main"></div>
</div>
<!-- End page preloader -->

<?php
        /* Including header */
        include 'header.php';
        ?>

<!-- ==============================
/////// Begin body content ///////
=============================== -->
        <div id="body-content">


            <!-- ================================
            ///// Begin page header section /////
            ================================= -->
            <section id="page-header-secion" class="alter-heading">

                <!-- Begin page header image 
                ===============================
                * Use class "parallax" to enable parallax effect.
                -->
                <div class="page-header-image parallax bg-image top-center-bg" style="background-image: url(assets/img/main/banners/home-3.jpg); background-position: 50% 50%;"></div>
                <!-- End page header image -->

                <!-- Element cover -->
                <div class="cover page-header-cover"></div>

                <!-- Begin page header info -->
                <div class="container-fluid page-header-content no-padding text-center">
                    <div class="row">
                        <div class="col-md-12">

                            <h1 class="album-title"><?= htmlspecialchars($folder_info['title'] ?? 'Album'); ?></h1>

                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> 
                <!-- End page header info -->

            </section>
            <!-- End page header section -->


            <!-- ============================
            ///// Begin content section /////
            ============================= -->
            <section id="content-section">
                <!-- Begin content wrap -->
                <div class="content-wrap">

                    <div class="container max-width-1200"> <!-- Use class "max-width-1200" or "full-width" -->
                        <div class="row">

                            <div class="col-left col-md-4 col-lg-3">

                                <!-- Begin portfolio-info -->
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">

                                        <h1 class="portfolio-title">About Project:</h1>

                                        <!-- Begin portfolio meta -->
                                        <div class="album-meta">
                                            <span class="photos-count"><?= $folder_info['count'] ?? 0; ?> Photos</span>
                                        </div>
                                        <!-- End portfolio meta -->

                                        <!-- Begin portfolio description -->
                                        <?php if ($shortDesc || $fullDesc): ?>
                                            <div class="album-description margin-top-20">
                                                <div class="al-desc-inner">

                                                    <?php if ($shortDesc): ?>
                                                        <p><?= htmlspecialchars($shortDesc); ?></p>
                                                    <?php endif; ?>

                                                    <?php if ($fullDesc): ?>
                                                        <div class="al-desc-toggle">
                                                            <p><?= htmlspecialchars($fullDesc); ?></p>
                                                        </div>
                                                    <?php endif; ?>

													<p class="booking-text">
														Ako želite da zakažete slikanje pozovite:
													</p>

													<a href="tel:+381601644844" class="booking-phone">
														060 164 4844
													</a>

													<div class="booking-name">
														Duško
													</div>

                                                </div>

                                                <?php /* if ($fullDesc): ?>
                                                <div class="al-desc-toggle-trigger">
                                                    <span class="al-desc-more"><i class="fas fa-chevron-down"></i> More</span>
                                                    <span class="al-desc-less"><i class="fas fa-chevron-up"></i> Less</span>
                                                </div>
                                                <?php endif; */ ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- End portfolio description -->

                                        <!-- Begin portfolio atr -->
                                        <div class="portfolio-atr margin-top-50">
                                            <ul class="list-unstyled">
												
												<li>
													<h4 class="head">Photographer:</h4>
													<span class="info">
														Duško Luković
													</span>
												</li>

                                                <?php if (!empty($albumMeta['client'])): ?>
                                                    <li>
                                                        <h4 class="head">Client:</h4>
                                                        <span class="info">
                                                            <?= htmlspecialchars($albumMeta['client']); ?>
                                                        </span>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if (!empty($albumMeta['password'])): ?>

                                                    <li class="album-protect margin-top-20">

                                                        <h4 class="head">Download album:</h4>

                                                        <?php if (!empty($albumMeta['password']) && !$hasAccess): ?>

                                                            <form id="albumPasswordForm" class="margin-top-10">
                                                                <input type="password"
                                                                    name="album_password"
                                                                    placeholder="Unesite lozinku"
                                                                    class="form-control"
                                                                    required>

                                                                <button type="submit" class="btn btn-dark margin-top-10">
                                                                    Otključaj
                                                                </button>

                                                                <p id="albumPasswordError" class="text-danger margin-top-5" style="display:none;"></p>
                                                            </form>

                                                        <?php endif; ?>

                                                        <?php if ($albumDownloadExists): ?>
                                                            <a href="./download_album?album=<?= urlencode($albumName); ?>"
                                                            id="downloadAlbum"
                                                            class="btn btn-success margin-top-10"
                                                            style="<?= $hasAccess ? '' : 'display:none;' ?>">
                                                            Preuzmite ceo album
                                                            </a>
                                                        <?php else: ?>
                                                            <p class="text-warning margin-top-10">
                                                                <i class="fas fa-exclamation-circle"></i> Album nije dostupan za preuzimanje.
                                                            </p>
                                                        <?php endif; ?>

                                                    </li>

                                                <?php endif; ?>

                                                    <!-- Begin portfolio share -->
                                                    <li class="portfolio-share">
                                                        <h4 class="head">Share:</h4>
                                                        <span class="info">
                                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($shareUrl); ?>" target="_blank" title="Share to Facebook">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                        </span>
                                                        <span class="info">
                                                            <a href="https://twitter.com/intent/tweet?url=<?= urlencode($shareUrl); ?>&text=<?= urlencode($folder_info['title'] ?? 'Album'); ?>" target="_blank" title="Share to X">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                        </span>
                                                        <span class="info">
                                                            <a href="https://www.pinterest.com/pin/create/button/?url=<?= urlencode($shareUrl); ?>&media=<?= urlencode($firstImagePath); ?>&description=<?= urlencode($folder_info['title'] ?? 'Album'); ?>" target="_blank" title="Share to Pinterest">
                                                                <i class="fab fa-pinterest-p"></i>
                                                            </a>
                                                        </span>
                                                        <span class="info">
                                                            <a href="https://wa.me/?text=<?= urlencode($shareUrl); ?>" target="_blank" title="Share to WhatsApp">
                                                                <i class="fab fa-whatsapp"></i>
                                                            </a>
                                                        </span>
                                                        <span class="info">
                                                            <a href="viber://forward?text=<?= urlencode($shareUrl); ?>" target="_blank" title="Share to Viber">
                                                                <i class="fab fa-viber"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <!-- End portfolio share -->

                                            </ul>
                                        </div>
                                        <!-- End portfolio atr -->

                                    </div> <!-- /.portfolio-info-inner -->
                                </div>
                                <!-- End portfolio-info -->

                            </div> <!-- /.col -->

                            <div class="col-right col-md-8 col-lg-9">

                                <!-- Begin gallery top content -->
                                <div class="gallery-top-content margin-bottom-25">

                                    <!-- Begin album navigation -->
									<ul class="album-attributes portfolio-nav" style="position: absolute; right: 0; top: 0; width: auto; display: none;" id="albumNav">

										<?php if ($nextAlbum): ?>
										<li class="pull-right">
											<a href="?folder=<?= urlencode($nextAlbum); ?>"
											class="pn-link portf-next"
											title="Next album">
												<span class="pn-link-text hide-from-sm">Next</span>
												<span class="pn-link-icon"><i class="fas fa-chevron-right"></i></span>
											</a>
										</li>
										<?php endif; ?>

										<?php if ($prevAlbum): ?>
										<li class="pull-right">
											<a href="?folder=<?= urlencode($prevAlbum); ?>"
											class="pn-link portf-prev margin-right-15"
											title="Previous album">
												<span class="pn-link-icon"><i class="fas fa-chevron-left"></i></span>
												<span class="pn-link-text hide-from-sm">Prev</span>
											</a>
										</li>
										<?php endif; ?>

									</ul>
									<!-- End album navigation -->

                                </div>
                                <!-- End gallery top content -->

                                <!-- Begin gallery images -->
                                <div id="gallery" class="lightgallery hover-center hover-boxed">

                                    <?php
                                    $slike = clsFunctions::procitajSlikeIzFoldera($folder);
                                    $slike = is_array($slike) ? array_values($slike) : [];
                                    ?>

                                    <?php if (!empty($slike)): ?>
                                        <?php foreach ($slike as $slika): ?>

                                            <?php
                                            if (!is_array($slika) || empty($slika['path']) || !file_exists($slika['path'])) {
                                                continue;
                                            }

                                            $imgPath  = $slika['path'];
                                            $title    = !empty($slika['title']) ? $slika['title'] : basename($imgPath);
                                            $time     = !empty($slika['created_time']) ? $slika['created_time'] : '';
                                            ?>

                                            <!-- Begin album single item -->
                                            <div class="album-single-item">

                                                <img class="asi-img"
                                                    src="<?= htmlspecialchars($imgPath); ?>"
                                                    alt="<?= htmlspecialchars($title); ?>">

                                                    <a class="asi-link lg-trigger"
                                                    href="<?= htmlspecialchars($imgPath); ?>"
                                                    data-exthumbnail="<?= htmlspecialchars($imgPath); ?>"
                                                    data-sub-html="<h4><?= htmlspecialchars($title); ?></h4><?php if ($time): ?><p>Created: <?= htmlspecialchars($time); ?></p><?php endif; ?>">

                                                    </a>

                                            </div>
                                            <!-- End album single item -->

                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>Nema dostupnih slika u ovom folderu.</p>
                                    <?php endif; ?>

                                </div>
                                <!-- End gallery -->

                            </div> <!-- /.col -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                </div>
                <!-- End content wrap -->
            </section>
            <!-- End content section -->

            <?php
            /* Including footer */
            include 'footer.php';
            ?>

        </div>
        <!-- End body content -->

        <!-- Scroll to top button -->
        <a href="#body" class="scrolltotop sm-scroll"><i class="fas fa-chevron-up"></i></a>

        <script>
            const ALBUM_NAME = <?= json_encode($albumName); ?>;
        </script>

        <?php
        /* Including scripts */
        include 'scripts.php';
        ?>

    </body>
    <!-- End body -->

</html>