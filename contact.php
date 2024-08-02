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
				<div class="page-header-image parallax bg-image top-center-bg" style="background-image: url(assets/img/main/banners/home-2.jpg); background-position: 50% 50%;"></div>
				<!-- End page header image -->

				<!-- Element cover -->
				<div class="cover page-header-cover"></div>

				<!-- Begin page header info -->
				<div class="container page-header-content no-padding max-width-800 text-center">
					<div class="row">
						<div class="col-lg-12">

							<h1 class="album-title">Kontaktirajte nas</h1>

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> 
				<!-- End page header info -->

			</section>
			<!-- End page header section -->


			<!-- ================================
			/////// Begin content section ///////
			================================= -->
			<section id="content-section" class="page page-contact">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap min-height-600">
								<div class="row margin-bottom-40">
									<div class="col-lg-4">

										<address>
											<strong>ARS LUMINAE</strong><br>
                                            PIB: 111088443 | MB: 65182742 <br>
                                            ŽR: 155-38413-07 <br> <br>
											Photo Duško Luković <br>
                                            <i class="fas fa-home"></i> 1. Oktobar 4/16, Čačak <br>
                                            <i class="fas fa-phone"></i> <a href="tel:+381601644844">060/1-644-844</a> <br>
											<i class="fas fa-envelope"></i> <a href="mailto:duskolukovic@gmail.com">duskolukovic@gmail.com</a> <br>
                                        </address>

										<div class="social-icons">
											<ul>
                                                <li><a target="_blank" href="https://www.facebook.com" title="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a target="_blank" href="https://twitter.com/" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a target="_blank" href="https://www.pinterest.com" title="Follow us on Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a target="_blank" href="https://www.instagram.com/arsluminaestudio/" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</div>

									</div> <!-- /.col -->

									<div class="col-md-8">

										<h4>NE STIDITE SE, KAŽITE NAM ŠTA MISLITE.</h4>
										<p>
                                            Mi smo posvećeni beleženju vaših najdragocenijih trenutaka sa pažnjom, kreativnošću i profesionalizmom.
                                            Ako imate bilo kakvih pitanja, želje ili posebnih zahteva, ne ustručavajte se da nas kontaktirate.
                                        </p>

									</div> <!-- /.col -->
								</div> <!-- /.row -->

								<div class="row">
									<div class="col-md-12 contact-form-container">

										<!-- Begin contact form 
										========================= -->
										<form id="contact-form">

											<!-- Begin hidden required fields -->
											<input type="hidden" name="project_name" value="duskolukovic.com"> <!-- Change value to your site name -->
											<input type="hidden" name="admin_email" value="ivan.bojic95@gmail.com"> <!-- Change value to your email address (where a message will be sent) -->
											<input type="hidden" name="form_subject" value="Message from duskolukovic.com"> <!-- Change value to your own message subject -->
											<!-- End Hidden Required Fields -->

											<div class="row">
												<div class="col-lg-4">
													<div class="form-group">
														<input type="text" class="form-control" name="Name" placeholder="Ime i prezime *" required="">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="email" class="form-control" name="Email" placeholder="Email *" required="">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="text" class="form-control" name="Subject" placeholder="Naslov *" required="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<textarea class="form-control" name="Message" rows="8" placeholder="Vaša poruka *" required=""></textarea>
													</div>
												</div>
											</div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="captcha">Koliko je 3 + 4?</label>
                                                    <input type="text" id="captcha" name="captcha" required>
                                                    <input type="hidden" name="captcha_result" value="7">
                                                </div>
                                            </div>
											<div class="row">
												<div class="col-lg-12">
													<button type="submit" class="btn btn-primary btn-rounded-5x btn-block">Pošalji</button>
												</div>
											</div>
										</form>
										<!-- End contact form -->

									</div> <!-- /.col-->
								</div> <!-- /.row -->
							</div>
							<!-- End content wrap -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->

				<div class="container margin-top-40">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap">

								<div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1208.835650736618!2d20.35095574801754!3d43.8949488106058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475773f193b3bb23%3A0x7286dd3e15419e49!2sArs%20Luminae!5e0!3m2!1ssr!2srs!4v1718876504040!5m2!1ssr!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
								<!-- End custom Google Map -->

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