<?php
include_once 'components/php_composer.php';

$albumi = clsFunctions::procitajFoldere($fajl = null);

?>

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
			<a href="index.php" class="logo-dark"><img src="assets/img/ars-luminae-logo.png" alt="logo"></a>
			<a href="index.php" class="logo-light"><img src="assets/img/ars-luminae-logo.png" alt="logo"></a>
		</div>
		<!-- End logo -->

		<!-- Begin menu (Bootstrap navbar)
		===================================
		* Use class "navbar-default" or "navbar-border-bottom" for navbar style.
		-->
		<nav class="navbar navbar-default">
			<div class="navbar-inner">

				<!-- Toggle for better mobile display -->
				<div id="nav" class="navbar-header">
                    <!-- off-canvas menu trigger (menu button) -->
                   <!-- <div id="shopping-cart">-->
                        <a href="index.php" class="cart-link">
                            <span class="cart-icon"><i class="fas fa-shopping-cart"></i></span>
                        </a>
                    <!--</div>-->
                    <div id="mobile-menu">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
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
						<li><a href="index.php">Naslovna</a></li>
						<!-- End dropdown -->

						<!-- Begin dropdown
						====================
						* Use class "dropdown-hover" to make navigation toggle on desktop hover.
						* Use class "dropdown-menu-right" to right align the dropdown menu.
						* Use class "dropdown-menu-dark" to enable dark dropdown menu.
						-->
						<li class="dropdown dropdown-hover">
							<a href="#0" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Albumi <span class="caret-2"><i class="fas fa-chevron-down"></i></span></a>
							<ul class="dropdown-menu">
                                <?php foreach ($albumi as $album) { ?>
                                    <li><a href="gallery_single.php?album=<?= $album['title']; ?>"><?= $album['title']; ?></a></li>
                                <?php } ?>
							</ul>
						</li>
						<!-- End dropdown -->

						<!-- Begin dropdown
						====================
						* Use class "dropdown-hover" to make navigation toggle on desktop hover.
						* Use class "dropdown-menu-right" to right align the dropdown menu.
						* Use class "dropdown-menu-dark" to enable dark dropdown menu.
						-->
						<li class="dropdown dropdown-hover">
							<a href="#0" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ARS LUMINAE <span class="caret-2"><i class="fas fa-chevron-down"></i></span></a>
							<ul class="dropdown-menu">
								<li><a href="page-about-me.php">O nama</a></li>
                                <li><a href="page-contact.php">Kontakt</a></li>
                                <li><a href="privacy.php">Politika privatnosti</a></li>
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

            <li><a class="link" href="gallery_list.php">Albumi</a></li>
            <li><a class="link" href="page-contact.php">O nama</a></li>

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
