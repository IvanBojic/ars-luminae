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
				<div class="page-header-image parallax bg-image" style="background-image: url(assets/img/headings/heading-6.jpg); background-position: 50% 50%;"></div>
				<!-- End page header image -->

				<!-- Element cover -->
				<div class="cover page-header-cover"></div>

				<!-- Begin page header info -->
				<div class="container page-header-content no-padding max-width-800 text-center">
					<div class="row">
						<div class="col-lg-12">

							<h1 class="album-title">About Me</h1>
							<ol class="breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="active">Page - About Me</li>
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
			<section id="content-section" class="page page-about-me">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap">
								<div class="row">
									<div class="col-md-8">

										<h3>John Smith</h3>
										<h6>Photographer / Designer</h6>

										<p>Integer nec rhoncus lacus. Vestibulum suscipit tristique cursus. Nunc tempor, leo ornare dignissim laoreet, ex ligula imperdiet metus, a pellentesque lectus sem eu nunc. Donec malesuada id velit eget laoreet. Nullam posuere diam nec dolor volutpat bibendum. Aliquam efficitur id sapien in feugiat.</p>

										<blockquote>
											Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras consectetur purus sit amet fermentum. Aenean mattis eu leo quam curcus.
										</blockquote>

										<div class="social-icons margin-top-40 margin-bottom-30">
											<h6 class="head">Find me on:</h6>
											<ul>
												<li><a target="_blank" href="https://www.facebook.com" title="Follow me on Facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li><a target="_blank" href="https://twitter.com/" title="Follow me on Twitter"><i class="fab fa-twitter"></i></a></li>
												<li><a target="_blank" href="https://www.pinterest.com" title="Follow me on Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
												<li><a target="_blank" href="https://www.instagram.com" title="Follow me on Instagram"><i class="fab fa-instagram"></i></a></li>
												<!-- shange "your@email.com" to your email -->
												<li><a target="_blank" href="mailto:your@email.com" title="Contact me"><i class="fas fa-envelope"></i></a></li>
											</ul>
										</div>

									</div> <!-- /.col -->

									<div class="col-md-4">
										
										<img src="assets/img/team/team-1.jpg" alt="image">

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