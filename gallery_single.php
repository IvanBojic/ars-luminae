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

                            <!--TODO: Napraviti dinamicki iz foldera-->
							<h1 class="album-title">Beauty &amp; Fashion</h1>

							<!-- Begin album meta -->
							<div class="album-meta">
                                <!--TODO: Napraviti dinamicki iz foldera-->
								<span class="photos-count">167 Photos</span>
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
								<a href="" class="an-item prev-album bg-image" style="background-image: url(assets/img/album-list/grid/img-2.jpg); background-position: 50% 50%;" title="Previous album">
									<!-- Element cover -->
									<div class="cover"></div>

									<div class="an-item-info">
										<span class="an-icon"><i class="fas fa-chevron-left"></i></span>
										<span class="an-text">Prev</span>
									</div>
								</a>
								<!-- End album nav item -->

								<!-- Begin album nav item -->
								<a href="gallery_list.php" class="an-item to-album-list bg-image" style="background-image: url(assets/img/album-list/grid/img-4.jpg); background-position: 50% 50%;" title="Back to album list">
									<!-- Element cover -->
									<div class="cover"></div>

									<div class="an-item-info">
										<span class="an-icon"><i class="fas fa-th-list"></i></span>
										<span class="an-text">List</span>
									</div>
								</a>
								<!-- End album nav item -->

								<!-- Begin album nav item -->
								<a href="" class="an-item next-album bg-image" style="background-image: url(assets/img/album-list/grid/img-7.jpg); background-position: 50% 50%;" title="Next album">
									<!-- Element cover -->
									<div class="cover"></div>

									<div class="an-item-info">
										<span class="an-icon"><i class="fas fa-chevron-right"></i></span>
										<span class="an-text">Next</span>
									</div>
								</a>
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
								<div class="isotope gutter-2 col-5">

									<!-- Begin gallery top content -->
									<div class="gallery-top-content">

										<div class="row margin-bottom-40">
											<div class="col-xs-4">


											</div> <!-- /.col -->

											<div class="col-xs-8">

												<!-- Begin album attributes -->
												<ul class="album-attributes">

													<!-- Begin show items on page
													==============================
													* Use class "options-dark" to enable dark dropdown menu.
													-->
													<li class="hide-from-md">
														<form class="form-inline show-on-page margin-right-15">
															<div class="form-group">
																<label for="show-items">Show:</label>
																<select id="show-items" class="select-styled">
																	<option value="show-15-items">15 items</option>
																	<option value="show-25-items">25 items</option>
																	<option value="show-50-items">50 items</option>
																	<option value="show-all-items">Show All</option>
																</select>
															</div>
														</form>
													</li>
													<!-- End show items on page -->
													
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
									<div id="gallery" class="isotope-items-wrap lightgallery hover-center hover-boxed">

										<!-- Grid sizer (do not remove!!!) -->
										<div class="grid-sizer"></div>

										<!-- //////////////////
										// Begin isotope item. Note: use class "width2" for alternative item width (works best on first item).
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-1.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-1.jpg" data-exthumbnail="assets/img/album-single/thumb/img-1.jpg" data-sub-html="<h4>Lana Melray</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-2.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-2.jpg" data-exthumbnail="assets/img/album-single/thumb/img-2.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-3.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="https://www.youtube.com/watch?v=meBbDqAXago">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-play"></i></span>
														</div>
													</a>													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-4.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-4.jpg" data-exthumbnail="assets/img/album-single/thumb/img-4.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-5.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-5.jpg" data-exthumbnail="assets/img/album-single/thumb/img-5.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>												
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-6.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-6.jpg" data-exthumbnail="assets/img/album-single/thumb/img-6.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>												
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-7.jpg" alt="image">
													<!-- Begin item cover -->
													<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-7.jpg" data-exthumbnail="assets/img/album-single/thumb/img-7.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-8.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="https://vimeo.com/1084537">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-play"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-9.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-9.jpg" data-exthumbnail="assets/img/album-single/thumb/img-9.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-10.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-10.jpg" data-exthumbnail="assets/img/album-single/thumb/img-10.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-11.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-11.jpg" data-exthumbnail="assets/img/album-single/thumb/img-11.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-12.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-12.jpg" data-exthumbnail="assets/img/album-single/thumb/img-12.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-13.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-13.jpg" data-exthumbnail="assets/img/album-single/thumb/img-13.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-14.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-14.jpg" data-exthumbnail="assets/img/album-single/thumb/img-14.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-15.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-15.jpg" data-exthumbnail="assets/img/album-single/thumb/img-15.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-16.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-16.jpg" data-exthumbnail="assets/img/album-single/thumb/img-16.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-17.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-17.jpg" data-exthumbnail="assets/img/album-single/thumb/img-17.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-18.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-18.jpg" data-exthumbnail="assets/img/album-single/thumb/img-18.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-19.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-19.jpg" data-exthumbnail="assets/img/album-single/thumb/img-19.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-20.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-20.jpg" data-exthumbnail="assets/img/album-single/thumb/img-20.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-21.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-21.jpg" data-exthumbnail="assets/img/album-single/thumb/img-21.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-22.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-22.jpg" data-exthumbnail="assets/img/album-single/thumb/img-22.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-23.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-23.jpg" data-exthumbnail="assets/img/album-single/thumb/img-23.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/masonry/img-24.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-24.jpg" data-exthumbnail="assets/img/album-single/thumb/img-24.jpg">
														<div class="asi-info">
															<span class="s-icon"><i class="fas fa-search"></i></span>
														</div>
													</a>
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

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