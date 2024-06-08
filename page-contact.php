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

							<h1 class="album-title">Contact Us</h1>
							<ol class="breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="active">Page - Contact Us</li>
							</ol>

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
											<i class="fas fa-home"></i> <strong>Telio, Inc.</strong><br>
											1355 Market Street, Suite 900 <br>
											San Francisco, CA 94103 <br>
											<i class="fas fa-phone"></i> (123) 456-7890 <br>
											<i class="fas fa-envelope"></i> <a href="mailto:#">company@email.com</a>
										</address>

										<div class="social-icons">
											<ul>
												<li><a target="_blank" href="https://www.facebook.com" title="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li><a target="_blank" href="https://twitter.com/" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a></li>
												<li><a target="_blank" href="https://www.pinterest.com" title="Follow us on Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
												<li><a target="_blank" href="https://www.instagram.com" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</div>

									</div> <!-- /.col -->

									<div class="col-md-8">

										<h4>Don't be shy, tell us what's on your mind.</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
										consequat.</p>

									</div> <!-- /.col -->
								</div> <!-- /.row -->

								<div class="row">
									<div class="col-md-12">

										<!-- Begin contact form 
										========================= -->
										<form id="contact-form">

											<!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
											<input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
											<input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your email address (where a message will be sent) -->
											<input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
											<!-- End Hidden Required Fields -->

											<div class="row">
												<div class="col-lg-4">
													<div class="form-group">
														<input type="text" class="form-control" name="Name:" placeholder="Your Name" required="">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="email" class="form-control" name="Email:" placeholder="Your Email" required="">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="text" class="form-control" name="Subject:" placeholder="Subject" required="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<textarea class="form-control" name="Message:" rows="8" placeholder="Your Message (text only)" required=""></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<button type="submit" class="btn btn-primary btn-rounded-5x btn-block">Send Message</button>
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

								<!-- Begin custom Google Map 
								=============================
								* Tutorial: https://developers.google.com/maps/documentation/javascript/tutorial
								* Styles: https://snazzymaps.com/
								-->
								<div id="map"></div>
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