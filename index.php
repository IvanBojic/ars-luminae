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


			<!-- ==============================
			/////// Begin intro section ///////
			===================================
			* Use class "bg-image-scroll-horizontal" or "bg-image-scroll-vertical" to enable background image scrolling animation (otherwise use class "bg-image" or "bg-image-fixed").
			* Use class "full-page" to enable fullscreen intro.
			-->
			<section id="intro-section" class="full-page bg-image-scroll-vertical" style="background-image: url(assets/img/scrolling-bg.jpg); background-position: 50% 50%;">

				<!-- Element cover -->
				<div class="cover bg-transparent-6-dark"></div>

				<!-- Begin intro caption
				=========================
				* Use classes "align-center" and "text-center" to align caption to the center.
				-->
				<div class="intro-caption bg-transparent-8-dark text-gray-3">
					<h1 class="intro-title">Ars Luminae</h1>
					<p class="intro-text hide-from-xs">Minima nemo, doloribus sed illo, repudiandae fugit itaque non cum atque aperiam similique velit enim soluta necessi atentis taker.</p>
					<div class="intro-button-wrap">
						<a href="gallery_list.php" class="btn btn-default btn-rounded-5x">Choose gallery</a>
					</div>
				</div>
				<!-- End intro caption -->

				<!-- Begin made with love
				<div class="made-with-love hide-from-sm">
					<p>Made With <span class="text-red"><i class="far fa-heart"></i></span></p>
				</div>
				 End made with love -->

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