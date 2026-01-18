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
				<div class="page-header-image parallax bg-image top-center-bg" style="background-image: url(assets/img/main/banners/home-4.jpg); background-position: 50% 50%;"></div>
				<!-- End page header image -->

				<!-- Element cover -->
				<div class="cover page-header-cover"></div>

				<!-- Begin page header info -->
				<div class="container page-header-content no-padding max-width-800 text-center">
					<div class="row">
						<div class="col-lg-12">

							<h1 class="album-title">O nama</h1>

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> 
				<!-- End page header info -->

			</section>
			<!-- End page header section -->


			<!-- ================================
			/////// Begin content section ///////
			================================= -->
			<section id="content-section" class="page page-about-me">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap">
								<div class="row">
									<div class="col-md-8">

										<h3>Duško Luković</h3>
										<h6>Photographer / Designer</h6>

										<p>
                                            Dobrodošli na moj sajt! <br>
                                            Kažu da dela govore više od reči.
                                            Zato bih voleo da se bolje upoznamo kroz zajedničku strast koju delimo – fotografiju. <br> 
                                            Tu sam za vas u svakoj važnoj prilici, da na spontan način uhvatim vaš ”momenat”. Filmičan I izgled fotografija je ono ka čemu težim I trudim se da svaka oslikava vaše unutrašnje zadovoljstvo I sreću. 
                                            Na sajtu možete pogledati moje radove a sa par klikova na link dobićete mogućnost da odaberete fotografiju koju želite u svom albumu. 
                                            Pozovite da zajedno stvaramo najlepše uspomene. <br>
                                            Vaš ARS LUMINAE!
                                        </p>

										<div class="social-icons margin-top-40 margin-bottom-30">
											<h6 class="head">Find me on:</h6>
											<ul>
                                                <li><a target="_blank" href="https://www.facebook.com/dusko.lukovic.5" title="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a target="_blank" href="https://www.instagram.com/arsluminaestudio/" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <!-- shange "your@email.com" to your email -->
                                                <li><a target="_blank" href="mailto:duskolukovic@gmail.com" title="Kontaktirajte nas"><i class="fas fa-envelope"></i></a></li>
											</ul>
										</div>

									</div> <!-- /.col -->

									<div class="col-md-4">
										
										<img src="assets/img/ja-300x300.jpg" alt="image">

									</div> <!-- /.col -->
								</div> <!-- /.row -->
							</div>
							<!-- End content wrap -->

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