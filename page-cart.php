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
				<div class="page-header-image parallax bg-image" style="background-image: url(assets/img/headings/heading-12.jpg); background-position: 50% 50%;"></div>
				<!-- End page header image -->

				<!-- Element cover -->
				<div class="cover page-header-cover"></div>

				<!-- Begin page header info -->
				<div class="container page-header-content no-padding max-width-800 text-center">
					<div class="row">
						<div class="col-lg-12">

							<h1 class="album-title">Korpa</h1>

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> 
				<!-- End page header info -->

			</section>
			<!-- End page header section -->


			<!-- ================================
			/////// Begin content section ///////
			================================= -->
			<section id="content-section" class="page page-cart">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Begin content wrap -->
                            <div class="content-wrap">

                                <div id="cart">
                                    <div class="row margin-bottom-40">
                                        <div class="col-lg-4">

                                            <strong>PORUČENE FOTOGRAFIJE</strong>

                                        </div> <!-- /.col -->

                                    </div> <!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">



                                        </div> <!-- /.col-->
                                    </div> <!-- /.row -->
                                </div>
                                <!-- End custom Google Map -->

                            </div>
                            <!-- End content wrap -->

                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->

				<div class="container  margin-top-40">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap min-height-600">
								<div class="row margin-bottom-40">
									<div class="col-lg-4">

                                        <strong>UNESITE VAŠE PODATKE</strong>

									</div> <!-- /.col -->

								</div> <!-- /.row -->

								<div class="row">
									<div class="col-md-12">

										<!-- Begin contact form 
										========================= -->
										<form id="cart-form">

											<!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
											<input type="hidden" name="project_name" value="duskolukovic.com"> <!-- Change value to your site name -->
											<input type="hidden" name="admin_email" value="ivan.bojic95@gmail.com"> <!-- Change value to your email address (where a message will be sent) -->
											<input type="hidden" name="form_subject" value="Message from duskolukovic.com"> <!-- Change value to your own message subject -->
											<!-- End Hidden Required Fields -->

											<div class="row">
												<div class="col-lg-4">
													<div class="form-group">
														<input type="text" class="form-control" name="Name" placeholder="Ime i prezime" required="">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="email" class="form-control" name="Email" placeholder="Email" required="">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="tel" class="form-control" name="Phone" placeholder="Kontakt telefon" required="">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="text" class="form-control" name="Address" placeholder="Adresa za dostavu" required="">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="text" class="form-control" name="Subject" placeholder="Naslov" required="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<textarea class="form-control" name="Message" rows="8" placeholder="Vaša poruka" required=""></textarea>
													</div>
												</div>
											</div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="captcha">Koliko je 6 + 3?</label>
                                                    <input type="text" id="captcha" name="captcha" required>
                                                    <input type="hidden" name="captcha_result" value="9">
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