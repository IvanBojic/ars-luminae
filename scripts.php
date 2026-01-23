<!-- ====================
		///// Scripts below /////
		===================== -->

<!-- Core JS -->
<script src="assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->

<!-- Libs and Plugins JS -->
<script src="assets/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery JS (http://sachinchoolur.github.io/lightGallery) -->

<script src="assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support -->
<script src="assets/vendor/jquery.easing.min.js"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
<script src="assets/vendor/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
<script src="assets/vendor/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
<script src="assets/vendor/justifiedgallery/js/jquery.justifiedGallery.min.js"></script> <!-- Justified Gallery JS (http://miromannino.github.io/Justified-Gallery/) -->
<script src="assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel JS (https://owlcarousel2.github.io/OwlCarousel2/) -->

<!-- Theme master JS -->
<script src="assets/js/theme.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    if (typeof ALBUM_NAME === 'undefined') {
        console.error('ALBUM_NAME nije definisan');
        return;
    }

    const form = document.getElementById('albumPasswordForm');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const password = form.querySelector('[name="album_password"]').value.trim();
        const errorBox = document.getElementById('albumPasswordError');

        errorBox.style.display = 'none';
        errorBox.textContent = '';

        fetch('./ajax/check_album_password', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                album: ALBUM_NAME,
                password: password
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                const btn = document.getElementById('downloadAlbum');
                if (btn) btn.style.display = 'inline-block';
                form.remove();
            } else {
                errorBox.textContent = data.message || 'Pogrešna lozinka';
                errorBox.style.display = 'block';
            }
        })
        .catch(() => {
            errorBox.textContent = 'Greška u komunikaciji sa serverom';
            errorBox.style.display = 'block';
        });
    });

});
</script>

<!--==============================
///// Begin Google Analytics /////
============================== -->

<!-- Paste your Google Analytics code here.
Go to http://www.google.com/analytics/ for more information. -->

<!--==============================
///// End Google Analytics /////
============================== -->