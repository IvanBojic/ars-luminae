<?php
// Including head
include_once 'components/php_composer.php';

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Provjera postojanja sesije i inicijalizacija $cart niza
foreach ($cart as &$item) {
    if (!isset($item['album']) || empty($item['album'])) {
        $item['album'] = 'Nepoznat album';
    }
}

unset($item); // Unset the reference variable

$currentAlbum = '';

?>

<!DOCTYPE html>
<html lang="en">

<?php
/* Including head */
include 'head.php';
?>

<body id="body">

<!-- Begin page preloader -->
<div id="preloader">
    <div class="pulse bg-main"></div>
</div>
<!-- End page preloader -->

<?php
// Including header
include 'header.php';
?>

<!-- Begin body content -->
<div id="body-content">

    <!-- Begin page header section -->
    <section id="page-header-secion" class="alter-heading">

        <!-- Begin page header image -->
        <div class="page-header-image parallax bg-image" style="background-image: url(assets/img/headings/heading-12.jpg); background-position: 50% 50%;"></div>
        <!-- End page header image -->

        <!-- Element cover -->
        <div class="cover page-header-cover"></div>

        <!-- Begin page header info -->
        <div class="container page-header-content no-padding max-width-800 text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="album-title">Korpa</h1>
                </div>
            </div>
        </div>
        <!-- End page header info -->

    </section>
    <!-- End page header section -->

    <!-- Begin content section -->
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
                                </div>
                            </div>

                            <div class="row margin-bottom-40">
                                <div class="col-md-12">
                                    <?php
                                    $currentAlbum = ''; // Inicijalizujemo promenljivu za trenutni album

                                    // Prolazimo kroz niz $cart
                                    foreach ($cart as $index => $item) {
                                        // Proveravamo da li je trenutni album različit od albuma u trenutnom $item-u
                                        if ($currentAlbum !== $item['album']) {
                                            // Ako nije prvi put da se ulazi u petlju, zatvaramo prethodnu listu
                                            if ($currentAlbum !== '') {
                                                echo '</ul>'; // Zatvorite prethodnu listu
                                            }
                                            echo '<h3 class="album-title">' . htmlspecialchars($item['album']) . '</h3>'; // Prikažite naziv albuma
                                            echo '<ul class="album-list">'; // Započnite novu listu
                                            $currentAlbum = $item['album']; // Ažuriramo trenutni album
                                        }

                                        // Prikazujemo sliku samo ako je unikatna za taj album
                                        echo '<li class="album-item">';
                                        echo '<img src="' . htmlspecialchars($item['path']) . '" alt="Image" style="width: 25%; height: auto;">';
                                        echo '<form method="post" action="remove_from_cart.php" style="display:inline;">';
                                        echo '<input type="hidden" name="item_index" value="' . $index . '">';
                                        echo '<button type="submit" class="remove-item btn btn-danger">X</button>';
                                        echo '</form>';
                                        echo '</li>';
                                    }

                                    // Na kraju petlje, zatvaramo poslednju listu ako postoji neki album koji nije zatvoren
                                    if ($currentAlbum !== '') {
                                        echo '</ul>';
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <strong>Cena jedne fotografije:</strong> 200.00RSD<br>
                                    <strong>Broj poručenih fotografija:</strong> 3<br>
                                    <strong>Ukupna cena fotografija:</strong> 600.00RSD
                                </div>
                            </div>
                        </div>
                        <!-- End custom Google Map -->

                    </div>
                    <!-- End content wrap -->

                </div>
            </div>
        </div>

        <div class="container margin-top-40">
            <div class="row">
                <div class="col-md-12">

                    <!-- Begin content wrap -->
                    <div class="content-wrap min-height-600">
                        <div class="row margin-bottom-40">
                            <div class="col-lg-4">
                                <strong>UNESITE VAŠE PODATKE</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <!-- Begin contact form -->
                                <form id="cart-form">

                                    <!-- Begin hidden required fields -->
                                    <input type="hidden" name="project_name" value="duskolukovic.com">
                                    <input type="hidden" name="admin_email" value="ivan.bojic95@gmail.com">
                                    <input type="hidden" name="form_subject" value="Message from duskolukovic.com">
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
                                    <div class="row margin-bottom-15">
                                        <div class="col-lg-12 ">
                                            <button type="submit" class="btn btn-primary btn-rounded-5x btn-block">Pošalji</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <strong>Nakon što pošaljete Vašu porudžbinu, mi ćemo Vas vrlo brzo kontaktirati. Pozdrav!</strong>
                                        </div>
                                    </div>
                                </form>
                                <!-- End contact form -->

                            </div>
                        </div>
                    </div>
                    <!-- End content wrap -->

                </div>
            </div>
        </div>

    </section>
    <!-- End content section -->

    <?php
    // Including footer
    include 'footer.php';
    ?>

</div>
<!-- End body content -->

<!-- Scroll to top button -->
<a href="#body" class="scrolltotop sm-scroll"><i class="fas fa-chevron-up"></i></a>

<?php
// Including scripts
include 'scripts.php';
?>

</body>
</html>
