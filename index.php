<?php
include_once 'components/php_composer.php';

$fajl = 'assets/img/main/banners';
$slike = clsFunctions::procitajSlikeIzFoldera($fajl);

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

            <!-- ======================================================
            /////// Begin content section (Album list carousel) ///////
            * Use class "full-carousel" to enable full height carousel.
            ======================================================= -->
            <section id="content-section" class="album-list-carousel full-carousel">

                <!-- Begin content wrap
                ==========================
                * Use class "hover-zoom" to enable image zoom effect om hover.
                * Use class "caption-gradient" to enable gradient caption.
                * Use class "caption-dark" to enable dark caption (no effect if "caption-gradient" or "caption-outside" is used).
                * Use class "caption-boxed" to enable boxed caption (no effect if "caption-gradient" or "caption-outside" is used).
                * Use class "caption-sm", "caption-lg" or "caption-xlg" to change caption size.
                -->
                <div class="content-wrap caption-gradient caption-lg">


                    <!-- Begin content carousel (https://owlcarousel2.github.io/OwlCarousel2/)
                    ====================================================================
                    * Use class "nav-outside" for outside nav.
                    * Use class "nav-outside-top" for outside top nav.
                    * Use class "nav-rounded" for rounded nav.
                    * Use class "dots-outside" for outside dots.
                    * Use class "dots-left" or "dots-right" to align dots.
                    * Use class "dots-rounded" for rounded dots.
                    * Use class "owl-mousewheel" to enable mousewheel support.
                    * Available carousel data attributes:
                            data-items="5".......................(items visible on desktop)
                            data-tablet-landscape="4"............(items visible on mobiles)
                            data-tablet-portrait="3".............(items visible on mobiles)
                            data-mobile-landscape="2"............(items visible on tablets)
                            data-mobile-portrait="1".............(items visible on tablets)
                            data-loop="true".....................(true/false)
                            data-margin="10".....................(space between items)
                            data-center="true"...................(true/false)
                            data-start-position="0"..............(item start position)
                            data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
                            data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
                            data-mouse-drag="false"..............(true/false)
                            data-touch-drag="false"..............(true/false)
                            data-autoheight="true"...............(true/false)
                            data-autoplay="true".................(true/false)
                            data-autoplay-timeout="5000".........(milliseconds)
                            data-autoplay-hover-pause="true".....(true/false)
                            data-autoplay-speed="800"............(milliseconds)
                            data-drag-end-speed="800"............(milliseconds)
                            data-lazy-load="true"................(true/false)
                            data-nav="true"......................(true/false)
                            data-nav-speed="800".................(milliseconds)
                            data-dots="false"....................(true/false)
                            data-dots-speed="800"................(milliseconds)
                    -->
                    <div class="owl-carousel dots-rounded dots-right nav-rounded custom-nav" data-items="1" data-loop="true" data-autoplay="true" data-autoplay-timeout="8000" data-autoplay-hover-pause="true" data-nav="true"  data-animate-in="fadeIn" data-animate-out="fadeOut">

                        <?php foreach ($slike as $slika) { ?>
                            <!-- Begin album list item -->
                            <div class="album-list-item">
                                <div class="ali-img-wrap">
                                    <div class="ali-img full-cover bg-image top-center-bg" style="background-image: url(<?= $slika['path']; ?>); background-position: 50% 50%;"></div>
                                </div>
                            </div>
                            <!-- End album list item -->
                        <?php } ?>

                    </div>
                    <!-- End content carousel -->

                </div>
                <!-- End content wrap -->

				<!-- Begin intro caption
				=========================
				* Use classes "align-center" and "text-center" to align caption to the center.
				-->
				<div class="intro-caption bg-transparent-5-dark text-gray-3">
					<h1 class="intro-title">Ars Luminae</h1>
					<p class="intro-text">Mi smo Foto Studio Ars Luminae, posvećeni beleženju vaših najvažnijih trenutaka. Pratimo vaša dešavanja s pažnjom i strašću. <br>Budite slobodni da nas kontaktirate.</p>
					<div class="intro-button-wrap">
						<a href="gallery-list" class="btn btn-default btn-rounded-5x">Izaberite album</a>
					</div>
				</div>
				<!-- End intro caption -->

			</section>
			<!-- End intro section -->

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