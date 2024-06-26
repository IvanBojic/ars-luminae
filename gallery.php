<?php
include_once 'components/php_composer.php';

$album_naziv = $_GET['album'];

$fajl = 'assets/img/album-single/' . $album_naziv;
$slike = clsFunctions::procitajSlikeIzFoldera($fajl);
$broj_fotografija = clsFunctions::prebrojSlikeIzFoldera($fajl);

// korpa kroz cookie ide
$items_per_page = 10; // broj stavki po stranici
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$total_items = count($slike);
$total_pages = ceil($total_items / $items_per_page);

$start_index = ($current_page - 1) * $items_per_page;
$slike_to_display = array_slice($slike, $start_index, $items_per_page);

// Prikupljanje jedinstvenih vremena
$vremena = array_map(function($slika) {
    return date('H', strtotime($slika['created_time']));
}, $slike);

$jedinstvena_vremena = array_unique($vremena);
sort($jedinstvena_vremena);
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
			<section id="page-header-secion">

				<!-- Begin page header image
				===============================
				* Use class "parallax" to enable parallax effect.
				-->
				<div class="page-header-image parallax bg-image" style="background-image: url(assets/img/headings/heading-blur-1.jpg); background-position: 50% 50%;"></div>
				<!-- End page header image -->

				<!-- Element cover -->
				<div class="cover page-header-cover"></div>

				<!-- Begin page header info -->
				<div class="container-fluid page-header-content no-padding">
					<div class="row">
						<div class="col-md-8">

							<h1 class="album-title"><?= $album_naziv; ?></h1>

							<!-- Begin album meta -->
							<div class="album-meta">
								<span class="photos-count"><?= $broj_fotografija; ?> Photos</span>
							</div>
							<!-- End album meta -->

							<!-- Begin author -->
							<div class="author">
								<a href="#" class="author-avatar bg-image" style="background-image: url(assets/img/author.jpg); background-position: 50% 50%;"></a>
								<a href="" class="author-info">- by: Dusko Lukovic</a>
							</div>
							<!-- End author -->

						</div> <!-- /.col -->

						<div class="col-md-4">

							<!-- Begin album nav
							===================== -->
							<div class="album-nav">

								<!-- Begin album nav item -->
								<!--<a href="" class="an-item prev-album bg-image" style="background-image: url(assets/img/album-list/grid/img-2.jpg); background-position: 50% 50%;" title="Previous album">

									<div class="cover"></div>

									<div class="an-item-info">
										<span class="an-icon"><i class="fas fa-chevron-left"></i></span>
										<span class="an-text">Prev</span>
									</div>
								</a>-->
								<!-- End album nav item -->

								<!-- Begin album nav item -->
<!--								<a href="gallery_list.php" class="an-item to-album-list bg-image" style="background-image: url(assets/img/album-list/grid/img-4.jpg); background-position: 50% 50%;" title="Back to album list">

									<div class="cover"></div>

									<div class="an-item-info">
										<span class="an-icon"><i class="fas fa-th-list"></i></span>
										<span class="an-text">Lista</span>
									</div>
								</a>-->
								<!-- End album nav item -->

								<!-- Begin album nav item -->
<!--								<a href="" class="an-item next-album bg-image" style="background-image: url(assets/img/album-list/grid/img-7.jpg); background-position: 50% 50%;" title="Next album">

									<div class="cover"></div>

									<div class="an-item-info">
										<span class="an-icon"><i class="fas fa-chevron-right"></i></span>
										<span class="an-text">Next</span>
									</div>
								</a>-->
								<!-- End album nav item -->

							</div>
							<!-- End album nav -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div>
				<!-- End page header info -->

			</section>
			<!-- End page header section -->


			<!-- ============================
			///// Begin content section /////
			============================= -->
			<section id="content-section" class="album-single">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap">

								<!-- Begin isotope
								===================
								* Use classes "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
								* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
								-->
								<div class="isotope gutter-2 col-5 col-xs-12">

									<!-- Begin gallery top content -->
									<div class="gallery-top-content">

										<div class="row margin-bottom-40">
											<div class="row">
                                                <!-- Filter za vreme -->
                                                <div class="form-group timeline">
                                                    <ul class="timeline-options">
                                                        <?php foreach ($jedinstvena_vremena as $vreme) { ?>
                                                            <li class="timeline-value" data-value="<?= $vreme; ?>"><strong><?= $vreme; ?>h</strong></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
											</div> <!-- /.col -->

											<div class="row">

                                                <input type="hidden" id="album-naziv" value="<?php echo htmlspecialchars($album_naziv); ?>">
												<!-- Begin album attributes -->
                                                <ul class="album-attributes">
                                                    <!-- Begin show items on page for desktop -->
                                                    <li class="hide-from-md" id="desktop-options">
                                                        <form class="form-inline show-on-page margin-right-15">
                                                            <div class="form-group">
                                                                <!-- on change -->
                                                                <label for="show-items-desktop">Prikaži:</label>
                                                                <select id="show-items-desktop" class="select-styled">
                                                                    <option value="25">25 fotografija</option>
                                                                    <option value="50">50 fotografija</option>
                                                                    <option value="75">75 fotografija</option>
                                                                    <option value="100">100 fotografija</option>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <!-- End show items on page for desktop -->

                                                    <!-- Begin show items on page for mobile -->
                                                    <?php /* <li class="hide-from-xl" id="mobile-options">
                                                        <form class="form-inline show-on-page margin-right-15">
                                                            <div class="form-group">
                                                                <label for="show-items-mobile">Prikaži:</label>
                                                                <select id="show-items-mobile" class="select-styled">
                                                                    <option value="25">25 fotografija</option>
                                                                    <option value="50">50 fotografija</option>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </li> */ ?>
                                                    <!-- End show items on page for mobile -->
                                                </ul>
												<!-- End album attributes -->

											</div> <!-- /.col -->
										</div> <!-- /.row -->

									</div>
									<!-- End gallery top content -->


									<!-- Begin isotope items (album single items)
									===============================================
									* Use classes "hover-center", "hover-boxed", "hover-dark", "hover-simple" to change album single item hover variations.
									* Note1: For grid layout make sure that your images are the same dimensions.
									* Note2: For masonry layout make sure that your images are the different dimensions.
									-->
									<div id="gallery" class="isotope-items-wrap lightgallery">
										<div class="grid-sizer"></div>
                                        <?php foreach ($slike_to_display as $slika) { ?>
                                            <div class="isotope-item" data-time="<?= date('H', strtotime($slika['created_time'])); ?>">
                                                <div class="album-single-item">
                                                    <img class="asi-img" src="<?= $slika['path']; ?>" alt="image">
                                                    <div class="asi-text-overlay">
                                                        <?= $slika['created_time']; ?>
                                                    </div>
                                                    <div class="asi-cover">
                                                        <div class="asi-info">
                                                            <div class="icon-wrapper">
                                                                <a class="c-link add-to-cart-button" href="#">
                                                                    <span class="c-icon"><i class="fas fa-shopping-cart"></i></span>
                                                                </a>
                                                            </div>
                                                            <div class="icon-wrapper">
                                                                <a class="s-link lg-trigger" href="<?= $slika['path']; ?>" data-exthumbnail="<?= $slika['path']; ?>" data-sub-html="<h4><?= $slika['created_time']; ?></h4><p>Poručene slike dobijate u formatu 13x18cm i cena je 200.00RSD po komadu.</p>">
                                                                    <span class="s-icon"><i class="fas fa-search"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
										<!-- End isotope item -->

									</div>
									<!-- End isotope items wrap -->

								</div>
								<!-- End isotope -->

							</div>
							<!-- End content wrap -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->

					<div class="row">
						<div class="col-md-12">

							<!-- Begin pagination -->
                            <nav class="pagination-wrap">
                                <ul class="pagination">
                                    <?php clsFunctions::render_pagination($current_page, $total_pages, $album_naziv); ?>
                                </ul>
                            </nav>
							<!-- End pagination -->

						</div> <!-- /.col -->

					</div> <!-- /.row -->

				</div> <!-- /.container -->
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