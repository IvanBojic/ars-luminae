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
				<div class="page-header-image parallax bg-image" style="background-image: url(assets/img/headings/heading-blur-5.jpg); background-position: 50% 50%;"></div>
				<!-- End page header image -->

				<!-- Element cover -->
				<div class="cover page-header-cover"></div>

				<!-- Begin page header info -->
				<div class="container-fluid page-header-content no-padding text-center">
					<div class="row">
						<div class="col-md-12">

							<h1 class="album-title">Gallery</h1>

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
								<div class="isotope gutter-3 col-4">

									<!-- Begin isotope items (album list items) 
									============================================= 
									* Use class "caption-gradient" to enable gradient caption.
									* Use class "caption-outside" to enable caption outside.
									* Use class "caption-dark" to enable dark caption (no effect if "caption-gradient" or "caption-outside" is used).
									* Use class "caption-boxed" to enable boxed caption (no effect if "caption-gradient" or "caption-outside" is used).
									* Use class "caption-sm", "caption-lg" or "caption-xlg" to change caption size.
									* Use classes "ali-style-1", "ali-style-2" to change album list item style (no effect if "gutter-1" is used).
									* Note: For grid layout make sure that your images are the same dimensions.
									* Note: For masonry layout make sure that your images are the different dimensions.
									-->
									<div class="isotope-items-wrap ali-style-1 caption-gradient">

										<!-- Grid sizer (do not remove!!!) -->
										<div class="grid-sizer"></div>


										<!-- //////////////////
										// Begin isotope item. Note: use class "width2" for alternative item width (works best on first item)
										/////////////////////// -->
										<div class="isotope-item fashion">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-1.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Paris Fashion Week</h2>
														<div class="ali-meta">15 photos · 134 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-45776355">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-45776355" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item fashion">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-2.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Fabulous Fog</h2>
														<div class="ali-meta">48 photos · 438 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-06548776">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-06548776" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item portraits">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-3.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Dancing Studio</h2>
														<div class="ali-meta">33 photos · 566 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-93365766">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-93365766" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item portraits">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-4.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Sit Back and Relax</h2>
														<div class="ali-meta">152 photos · 449 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-25875445">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-25875445" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item portraits">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-5.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Dad's Day</h2>
														<div class="ali-meta">9 photos · 67 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-23454358">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-23454358" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item outdoor">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-6.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Say Goodbye</h2>
														<div class="ali-meta">211 photos · 890 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-33985640">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-33985640" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item outdoor">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-7.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Beauty &amp; Fashion</h2>
														<div class="ali-meta">153 photos · 672 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-38740012">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-38740012" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item outdoor">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-8.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Autumn Nights</h2>
														<div class="ali-meta">347 photos · 1349 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-48569653">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-48569653" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->
											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-9.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Monday's Monochromes</h2>
														<div class="ali-meta">15 photos · 134 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-30944673">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-30944673" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-10.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Suspendisse Potenti</h2>
														<div class="ali-meta">62 photos · 850 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-29800967">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-29800967" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-11.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Amazing iPhoneography</h2>
														<div class="ali-meta">15 photos · 134 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-22988965">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-22988965" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album list item -->
											<div class="album-list-item">
												<a class="ali-link" href="gallery_single.php">
													<div class="ali-img-wrap">
														<img class="ali-img" src="assets/img/album-list/grid/img-12.jpg" alt="image">
													</div>
													<div class="ali-caption">
														<h2 class="ali-title">Little Bird</h2>
														<div class="ali-meta">345 photos · 5654 views</div>
													</div>
												</a>
												<a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-11878823">
													<i class="fas fa-share-alt"></i>
												</a>

												<!-- Begin album share modal -->
												<div id="modal-11878823" class="modal fade" tabindex="-1" role="dialog">
													<div class="modal-dialog modal-center">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title">Share to:</h4>
															</div>
															<div class="modal-body text-center">
																<!-- Begin modal share -->
																<div class="modal-share">
																	<ul>
																		<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																		<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																	</ul>
																	<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																</div>
																<!-- End modal share -->
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>
												<!-- End album share modal -->

											</div>
											<!-- End album list item -->

										</div>
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
									<li>
										<a href="" aria-label="Previous">
											<span aria-hidden="true"><<</span>
										</a>
									</li>
									<li><a href=""><</a></li>
									<li class="active"><a href="#0">1</a></li>
									<li><a href="">2</a></li>
									<li><a href="">3</a></li>
									<li><a href="#0">...</a></li>
									<li><a href="">6</a></li>
									<li><a href="">7</a></li>
									<li><a href="">8</a></li>
									<li><a href="">></a></li>
									<li>
										<a href="" aria-label="Next">
											<span aria-hidden="true">>></span>
										</a>
									</li>
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