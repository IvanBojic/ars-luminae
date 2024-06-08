<!-- ===================
///// Begin header /////
========================
* Use class "show-hide-on-scroll" to hide header on scroll down and show on scroll up.
* Use class "fixed-top" to set header to fixed position.
-->
<header id="header" class="show-hide-on-scroll">
	<div class="header-inner">

		<!-- Begin logo -->
		<div id="logo">
			<a href="index.php" class="logo-dark"><img src="assets/img/logo25btr.png" alt="logo"></a>
			<a href="index.php" class="logo-light"><img src="assets/img/logo25btr.png" alt="logo"></a>
		</div>
		<!-- End logo -->

		<!-- Begin header tools -->
		<div class="header-tools">
			<ul>
				<li>
					<!-- off-canvas menu trigger (menu button) -->
					<a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span>menu</a>
				</li>
			</ul>
		</div>
		<!-- End header tools -->

		<!-- Begin menu (Bootstrap navbar)
		===================================
		* Use class "navbar-default" or "navbar-border-bottom" for navbar style.
		-->
		<nav class="navbar navbar-default">
			<div class="navbar-inner">

				<!-- Toggle for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> <!-- /.navbar-header -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">

						<!-- Begin dropdown
						==============================
						* Use class "dropdown-hover" to make navigation toggle on desktop hover.
						* Use class "dropdown-menu-right" to right align the dropdown menu.
						* Use class "dropdown-menu-dark" to enable dark dropdown menu.
						-->
						<li><a href="index.php">Home</a></li>
						<!-- End dropdown -->

						<!-- Begin dropdown
						====================
						* Use class "dropdown-hover" to make navigation toggle on desktop hover.
						* Use class "dropdown-menu-right" to right align the dropdown menu.
						* Use class "dropdown-menu-dark" to enable dark dropdown menu.
						-->
						<!--								<li><a href="page-about-me.html">About Me</a></li>-->
						<!-- End dropdown -->

						<!-- Begin dropdown
						====================
						* Use class "dropdown-hover" to make navigation toggle on desktop hover.
						* Use class "dropdown-menu-right" to right align the dropdown menu.
						* Use class "dropdown-menu-dark" to enable dark dropdown menu.
						-->
						<li class="dropdown dropdown-hover">
							<a href="#0" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Photo Gallery <span class="caret-2"><i class="fas fa-chevron-down"></i></span></a>
							<ul class="dropdown-menu">

								<!-- Begin dropdown (submenu)
								==============================
								* Use class "dropdown-hover" to make navigation toggle on desktop hover.
								* Use class "dropdown-menu-dark" to enable dark dropdown menu.
								-->
								<li class="dropdown dropdown-submenu dropdown-hover">
									<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Album List <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
									<ul class="dropdown-menu">

										<li><a href="album-list-carousel.html">Carousel</a></li>
										<li><a href="album-list-carousel-full.html">Carousel Full</a></li>
										<li><a href="album-list-slideshow.html">Slideshow</a></li>

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Grid <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
											<ul class="dropdown-menu">
												<li><a href="album-list-grid-3col.html">3 Columns</a></li>
												<li><a href="album-list-grid-4col.html">4 Columns</a></li>
												<li><a href="album-list-grid-5col.html">5 Columns</a></li>
												<li><a href="album-list-grid-6col.html">6 Columns</a></li>
												<li><a href="album-list-grid-no-gutter.html">No Gutter</a></li>
												<li><a href="album-list-grid-no-heading.html">No Heading</a></li>
											</ul>
										</li>
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masonry <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
											<ul class="dropdown-menu">
												<li><a href="album-list-masonry-3col.html">3 Columns</a></li>
												<li><a href="album-list-masonry-4col.html">4 Columns</a></li>
												<li><a href="album-list-masonry-5col.html">5 Columns</a></li>
												<li><a href="album-list-masonry-6col.html">6 Columns</a></li>
												<li><a href="album-list-masonry-no-gutter.html">No Gutter</a></li>
												<li><a href="album-list-masonry-no-heading.html">No Heading</a></li>
											</ul>
										</li>
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Album Styles <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
											<ul class="dropdown-menu">
												<li><a href="gallery_list.php">Style 1</a></li>
												<li><a href="album-list-item-style-2.html">Style 2</a></li>
												<li><a href="album-list-item-no-style.html">No Style</a></li>
											</ul>
										</li>
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Caption Styles <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
											<ul class="dropdown-menu">
												<li><a href="album-list-item-caption-default.html">Caption Default</a></li>
												<li><a href="album-list-item-caption-boxed.html">Caption Boxed</a></li>
												<li><a href="album-list-item-caption-gradient.html">Caption Gradient</a></li>
												<li><a href="album-list-item-caption-outside.html">Caption Outside 1</a></li>
												<li><a href="album-list-item-caption-outside-2.html">Caption Outside 2</a></li>
											</ul>
										</li>
										<!-- End dropdown -->

									</ul>
								</li>
								<!-- End dropdown -->

								<!-- Begin dropdown (submenu)
								==============================
								* Use class "dropdown-hover" to make navigation toggle on desktop hover.
								* Use class "dropdown-menu-dark" to enable dark dropdown menu.
								-->
								<li class="dropdown dropdown-submenu dropdown-hover">
									<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Album Single <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
									<ul class="dropdown-menu">

										<li><a href="album-single-alter-heading.html">Alter Heading</a></li>
										<li><a href="album-single-justified.html">Justified</a></li>

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Grid <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
											<ul class="dropdown-menu">
												<li><a href="album-single-grid-3col.html">3 Columns</a></li>
												<li><a href="album-single-grid-4col.html">4 Columns</a></li>
												<li><a href="album-single-grid-5col.html">5 Columns</a></li>
												<li><a href="album-single-grid-6col.html">6 Columns</a></li>
												<li><a href="album-single-grid-filter.html">With Filter</a></li>
												<li><a href="album-single-grid-no-gutter.html">No Gutter</a></li>
												<li><a href="album-single-grid-no-heading.html">No Heading</a></li>
											</ul>
										</li>
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masonry <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
											<ul class="dropdown-menu">
												<li><a href="album-single-masonry-3col.html">3 Columns</a></li>
												<li><a href="album-single-masonry-4col.html">4 Columns</a></li>
												<li><a href="gallery_single.php">5 Columns</a></li>
												<li><a href="album-single-masonry-6col.html">6 Columns</a></li>
												<li><a href="album-single-masonry-filter.html">Filter</a></li>
												<li><a href="album-single-masonry-no-gutter.html">No Gutter</a></li>
												<li><a href="album-single-masonry-no-heading.html">No Heading</a></li>
											</ul>
										</li>
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hover Styles <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
											<ul class="dropdown-menu">
												<li><a href="album-single-item-hover-default.html">Hover Default</a></li>
												<li><a href="album-single-item-hover-boxed.html">Hover Boxed</a></li>
												<li><a href="album-single-item-hover-center.html">Hover Center</a></li>
												<li><a href="album-single-item-hover-boxed-center.html">Hover Center Boxed</a></li>
												<li><a href="album-single-item-hover-icon.html">Hover Icon</a></li>
												<li><a href="album-single-item-hover-simple.html">Hover Simple</a></li>
											</ul>
										</li>
										<!-- End dropdown -->

										<li><a href="album-single-carousel.html">Carousel</a></li>
										<li><a href="album-single-carousel-full.html">Carousel Full</a></li>
										<li><a href="album-single-slideshow.html">Slideshow</a></li>

									</ul>
								</li>
								<!-- End dropdown -->

							</ul>
						</li>
						<!-- End dropdown -->

						<!-- Begin dropdown
						====================
						* Use class "dropdown-hover" to make navigation toggle on desktop hover.
						* Use class "dropdown-menu-right" to right align the dropdown menu.
						* Use class "dropdown-menu-dark" to enable dark dropdown menu.
						-->
						<li><a href="page-contact.php">Contact</a></li>
						<!-- End dropdown -->

						<!-- Begin dropdown
						====================
						* Use class "dropdown-hover" to make navigation toggle on desktop hover.
						* Use class "dropdown-menu-right" to right align the dropdown menu.
						* Use class "dropdown-menu-dark" to enable dark dropdown menu.
						-->
						<li class="dropdown dropdown-hover">
							<a href="#0" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <span class="caret-2"><i class="fas fa-chevron-down"></i></span></a>
							<ul class="dropdown-menu">
								<li><a href="page-about-me.php">About Me</a></li>
								<li><a href="page-contact.php">Contact</a></li>
								<li><a href="page-404.html">404 Error</a></li>
							</ul>
						</li>
						<!-- End dropdown -->

					</ul> <!-- /.nav -->
				</div> <!-- /.navbar-collapse -->

			</div> <!-- /.navbar-inner -->
		</nav>
		<!-- End menu -->

	</div> <!-- /.header-inner -->
</header>
<!-- End header -->

<!-- ==================================================================================================
///// Begin off-canvas menu (more info: http://codyhouse.co/gem/secondary-expandable-navigation/) /////
=================================================================================================== -->
<nav id="cd-lateral-nav">
    <div class="nav-inner">

        <!-- Menu header -->
        <div class="menu-header">Extra Stuff</div>

        <!-- Begin nav links
        ===================== -->
        <ul class="cd-navigation">

            <li><a class="link" href="album-list-grid-5col.html">Photo Gallery</a></li>
            <li><a class="link" href="page-contact.php">Contact</a></li>

            <li class="cd-menu-separator"></li>

        </ul>
        <!-- End nav links -->

        <!-- Begin nav content box -->
        <div class="cd-content-box">

            <h2 class="cd-menu-heading">Instagram:</h2>

            <!-- Begin thumbnail list
            ==========================
            * Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
            * Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
            -->
            <ul class="thumb-list col-3 gutter-3">
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-1.jpg);"></a></li>
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-2.jpg);"></a></li>
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-3.jpg);"></a></li>
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-4.jpg);"></a></li>
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-5.jpg);"></a></li>
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-6.jpg);"></a></li>
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-7.jpg);"></a></li>
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-8.jpg);"></a></li>
                <li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-9.jpg);"></a></li>
            </ul>
            <!-- End thumbnail list -->

        </div>
        <!-- End nav content box -->

    </div> <!-- /.nav-inner -->
</nav>
<!-- End off-canvas menu -->
