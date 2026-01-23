<?php
include_once 'components/php_composer.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$ddl_albumi = clsFunctions::procitajFoldere();

// Pročitajte korpu iz sesije
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$cartItemCount = count($cart); // Izbrojite artikle u korpi

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
			<a href="index" class="logo-dark"><img src="assets/img/ars-luminae-logo.png" alt="logo"></a>
			<a href="index" class="logo-light"><img src="assets/img/ars-luminae-logo.png" alt="logo"></a>
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
                    <a href="cart" class="cart-link">
                        <span class="cart-icon"><i class="fas fa-shopping-cart"></i></span>
                        <span id="cart-counter" class="cart-counter"></span>
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
						<li><a href="index">Naslovna</a></li>
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
                                <?php foreach ($ddl_albumi as $album) { ?>
                                    <li><a href="gallery?album=<?= $album['title']; ?>"><?= $album['title']; ?></a></li>
                                <?php } ?>
							</ul>
						</li>
						<!-- End dropdown -->
						
						<!-- Begin dropdown
						==============================
						* Use class "dropdown-hover" to make navigation toggle on desktop hover.
						* Use class "dropdown-menu-right" to right align the dropdown menu.
						* Use class "dropdown-menu-dark" to enable dark dropdown menu.
						-->
						<li><a href="portfolio">Portfolio</a></li>
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
								<li><a href="about-me">O nama</a></li>
                                <li><a href="contact">Kontakt</a></li>
                                <li><a href="privacy">Politika privatnosti</a></li>
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

