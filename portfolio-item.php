<?php
include_once 'components/php_composer.php';

session_start();

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

/* -------------------------
   OBRADA LOZINKE
-------------------------- */
if ($hasPassword && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $inputPassword = trim($_POST['album_password'] ?? '');
    $realPassword  = trim($albumMeta['password']);

    if ($inputPassword !== '' && hash_equals($realPassword, $inputPassword)) {
        $_SESSION['album_access'][$albumName] = true;
    } else {
        $error = 'Pogrešna lozinka';
    }
}

$hasAccess = !$hasPassword || !empty($_SESSION['album_access'][$albumName]);

/* -------------------------
   PODACI O ALBUMU
-------------------------- */
$folder_info = clsFunctions::getFolderInfo($folder);

$slike = clsFunctions::procitajSlikeIzFoldera($folder);
$slike = is_array($slike) ? array_values($slike) : [];

$ukupno = count($slike);

/* -------------------------
   NAVIGACIJA
-------------------------- */
$currentIndex = (int)($_GET['img'] ?? 0);
$currentIndex = max(0, min($currentIndex, $ukupno - 1));

$prevIndex = ($currentIndex > 0) ? $currentIndex - 1 : null;
$nextIndex = ($currentIndex < $ukupno - 1) ? $currentIndex + 1 : null;

$currentImage = $slike[$currentIndex] ?? null;
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

							<h1 class="album-title"><?= $folder_info['title']; ?></h1>

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
											<span class="photos-count"><?= $folder_info['count']; ?> Photos</span>
										</div>
										<!-- End portfolio meta -->

										<!-- Begin author -->
										<div class="author">
											<a href="" class="author-info">- Oficijelni fotograf <br> Duško Luković</a>
										</div>
										<!-- End author -->

										<!-- Begin portfolio description -->
										<div class="album-description margin-top-20">
											<div class="al-desc-inner">

												<?php if (!empty($albumMeta['description']['short'])): ?>
													<p><?= htmlspecialchars($albumMeta['description']['short']); ?></p>
												<?php endif; ?>

												<?php if (!empty($albumMeta['description']['full'])): ?>
													<div class="al-desc-toggle">
														<p><?= htmlspecialchars($albumMeta['description']['full']); ?></p>
													</div>
												<?php endif; ?>

											</div>


											<!-- Begin doggle trigger -->
											<div class="al-desc-toggle-trigger">
												<span class="al-desc-more"><i class="fas fa-chevron-down"></i> More</span>
												<span class="al-desc-less"><i class="fas fa-chevron-up"></i> Less</span>
											</div>
											<!-- End doggle trigger -->
										</div>
										<!-- End portfolio description -->

										<!-- Begin portfolio atr -->
										<div class="portfolio-atr margin-top-50">
											<ul class="list-unstyled">
												<li>
													<h4 class="head">Client:</h4>
													<span class="info">
														<?= !empty($albumMeta['client']) ? htmlspecialchars($albumMeta['client']) : '—'; ?>
													</span>
												</li>

												<?php if (!empty($albumMeta['password'])): ?>

													<li class="album-protect margin-top-20">

														<h4 class="head">Download album:</h4>

														<?php if (!empty($albumMeta['password']) && !$hasAccess): ?>

															<form method="post" class="margin-top-10">
																<input type="password"
																	name="album_password"
																	placeholder="Unesite lozinku"
																	class="form-control"
																	required>

																<button type="submit" class="btn btn-dark margin-top-10">
																	Otključaj
																</button>

																<?php if (!empty($error)): ?>
																	<p class="text-danger margin-top-5"><?= htmlspecialchars($error); ?></p>
																<?php endif; ?>
															</form>

														<?php endif; ?>

														<?php if ($hasAccess && !empty($albumMeta['password'])): ?>

															<a href="portfolio/download_album.php?album=<?= urlencode($albumName); ?>"
															class="btn btn-success margin-top-10">
															Preuzmi ceo album
															</a>

														<?php endif; ?>

														<a href="portfolio/download_album.php?album=<?= urlencode($albumName); ?>"
														id="downloadAlbum"
														class="btn btn-success margin-top-10"
														style="display:none;">
															Preuzmi ceo album
														</a>

													</li>

												<?php endif; ?>


												<!-- Begin portfolio share -->
												<li class="portfolio-share">
													<h4 class="head">Share:</h4>
													<span class="info"><a href="#0" title="Share to Facebook"><i class="fab fa-facebook-f"></i></a></span>
													<span class="info"><a href="#0" title="Share to Twitter"><i class="fab fa-twitter"></i></a></span>
													<span class="info"><a href="#0" title="Share to Google Plus"><i class="fab fa-google-plus-g"></i></a></span>
													<span class="info"><a href="#0" title="Share to Pinterest"><i class="fab fa-pinterest-p"></i></a></span>
													<span class="info"><a href="#0" title="Share to Instagram"><i class="fab fa-instagram"></i></a></span>
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

									<!-- Begin album attributes -->
									<ul class="album-attributes">

										<?php if ($nextIndex !== null): ?>
										<li class="portfolio-nav pull-right">
											<a href="?folder=<?= urlencode($folder); ?>&img=<?= $nextIndex; ?>"
											class="pn-link portf-next"
											title="Next image">
												<span class="pn-link-text hide-from-sm">Next</span>
												<span class="pn-link-icon"><i class="fas fa-chevron-right"></i></span>
											</a>
										</li>
										<?php endif; ?>

										<?php if ($prevIndex !== null): ?>
										<li class="portfolio-nav pull-right">
											<a href="?folder=<?= urlencode($folder); ?>&img=<?= $prevIndex; ?>"
											class="pn-link portf-prev margin-right-15"
											title="Previous image">
												<span class="pn-link-icon"><i class="fas fa-chevron-left"></i></span>
												<span class="pn-link-text hide-from-sm">Prev</span>
											</a>
										</li>
										<?php endif; ?>

									</ul>

									<!-- End album attributes -->

								</div>
								<!-- End gallery top content -->

								<!-- Begin gallery (album single items)
								======================================== 
								* Use classes "hover-center", "hover-boxed", "hover-dark", "hover-simple" to change album single item hover variations.
								-->
								<div id="gallery" class="lightgallery hover-center hover-boxed">
									<?php if (!empty($slike) && is_array($slike)): ?>
										<?php foreach ($slike as $slika): ?>

											<?php
											// --- PROVERE ---
											if (
												!is_array($slika) ||
												empty($slika['path']) ||
												!file_exists($slika['path'])
											) {
												continue; // preskoči neispravan zapis
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

        <?php
        /* Including scripts */
        include 'scripts.php';
        ?>

    </body>
    <!-- End body -->

</html>