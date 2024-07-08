/* =================================================================
* Template JS
* 
* Template:    Agatha -	Photography Portfolio Website Template
* Author:      Themetorium
* URL:         https://themetorium.net
*
================================================================= */


'use strict';

// ===========================================
// Display loading animation while page loads
// ===========================================

// Wait for window load
$(window).on('load', function () {
	// Animate loader off screen
	$("#preloader").fadeOut("slow");
});


// =========================================================================
// Smooth scrolling
// Note: requires Easing plugin - http://gsgd.co.uk/sandbox/jquery/easing/
// =========================================================================

$('.sm-scroll').on("click", function () {
	if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top - 71
			}, 1500, 'easeInOutExpo');
			return false;
		}
	}
});


// ===================================================
// Hide header/menu on scroll down, show on scroll up
// ===================================================

var lastScrollTop = 0, delta = 5;
var navbarHeight = $('.show-hide-on-scroll').outerHeight();

$(window).scroll(function (event) {
	var st = $(this).scrollTop();

	// Make sure they scroll more than delta
	if (Math.abs(lastScrollTop - st) <= delta)
		return;

	// If they scrolled down and are past the header, add class .fly-up.
	// This is necessary so you never see what is "behind" the header.
	if (st > lastScrollTop && st > navbarHeight) {
		// Scroll Down
		$('.show-hide-on-scroll').addClass('fly-up');
	} else {
		// Scroll Up
		$('.show-hide-on-scroll').removeClass('fly-up');
	}

	lastScrollTop = st;
});


// ==========================================================================
// Header Filled (cbpAnimatedHeader)
// Source: http://tympanus.net/codrops/2013/06/06/on-scroll-animated-header/
// ==========================================================================

var cbpAnimatedHeader = (function () {

	var docElem = document.documentElement,
		header = document.querySelector('#header'),
		didScroll = false,
		changeHeaderOn = 1;

	function init() {
		window.addEventListener('scroll', function (event) {
			if (!didScroll) {
				didScroll = true;
				setTimeout(scrollPage, 150);
			}
		}, false);
	}

	function scrollPage() {
		var sy = scrollY();
		if ($(this).scrollTop() > 150) {
			$('#header.fixed-top, #header.show-hide-on-scroll').addClass("header-filled");
		} else {
			$('#header.fixed-top, #header.show-hide-on-scroll').removeClass("header-filled");
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();


// ====================
// Bootstrap menu/nav
// ====================

// Keeping dropdown submenu inside screen.
// More info: http://stackoverflow.com/questions/17985334/jquery-solution-for-keeping-dropdown-submenu-inside-screen
$('.keep-inside-screen').parent().hover(function () {
	var menu = $('> .dropdown-menu', this);
	var menupos = $(menu).offset();

	if (menupos.left + menu.width() > $(window).width()) {
		var newpos = -$(menu).width();
		menu.css({left: newpos});
	}
});


// ===================================================
// Bootstrap submenu
// Source: http://vsn4ik.github.io/bootstrap-submenu
// ===================================================

(function (factory) {
	if (typeof define == 'function' && define.amd) {
		// AMD. Register as an anonymous module
		define(['jquery'], factory);
	} else if (typeof exports == 'object') {
		// Node/CommonJS
		module.exports = factory(require('jquery'));
	} else {
		// Browser globals
		factory(jQuery);
	}
})(function ($) {
	// Or ':not(.disabled):has(a)' or ':not(.disabled):parent';
	var desc = ':not(.disabled, .divider, .dropdown-header)';

	function Submenupicker(element) {
		this.$element = $(element);
		this.$main = this.$element.closest('.dropdown, .dropup, .btn-group');
		this.$menu = this.$element.parent();
		this.$drop = this.$menu.parent().parent();
		this.$menus = this.$menu.siblings('.dropdown-submenu');

		var $children = this.$menu.find('> .dropdown-menu > ' + desc);

		this.$submenus = $children.filter('.dropdown-submenu');
		this.$items = $children.not('.dropdown-submenu');

		this.init();
	}

	Submenupicker.prototype = {
		init: function () {
			this.$element.on({
				'click.bs.dropdown': $.proxy(this.click, this),
				keydown: $.proxy(this.keydown, this)
			});

			this.$menu.on('hide.bs.submenu', $.proxy(this.hide, this));
			this.$items.on('keydown', $.proxy(this.item_keydown, this));

			// Bootstrap fix
			this.$menu.nextAll(desc + ':first:not(.dropdown-submenu)').children('a').on('keydown', $.proxy(this.next_keydown, this));
		},
		click: function (event) {
			event.stopPropagation();

			this.toggle();
		},
		toggle: function () {
			if (this.$menu.hasClass('open')) {
				this.close();
			} else {
				this.$menu.addClass('open');
				this.$menus.trigger('hide.bs.submenu');
			}
		},
		hide: function (event) {
			// Stop event bubbling
			event.stopPropagation();

			this.close();
		},
		close: function () {
			this.$menu.removeClass('open');
			this.$submenus.trigger('hide.bs.submenu');
		},
		keydown: function (event) {
			// 13: Return, 27: Esc, 32: Spacebar
			// 38: Arrow up, 40: Arrow down

			// Off vertical scrolling
			if ($.inArray(event.keyCode, [32, 38, 40]) != -1) {
				event.preventDefault();
			}

			if ($.inArray(event.keyCode, [13, 32]) != -1) {
				this.toggle();
			} else if ($.inArray(event.keyCode, [27, 38, 40]) != -1) {
				event.stopPropagation();

				if (event.keyCode == 27) {
					if (this.$menu.hasClass('open')) {
						this.close();
					} else {
						this.$menus.trigger('hide.bs.submenu');
						this.$drop.removeClass('open').children('a').trigger('focus');
					}
				} else {
					var $items = this.$main.find('li:not(.disabled):visible > a');

					var index = $items.index(event.target);

					if (event.keyCode == 38 && index !== 0) {
						index--;
					} else if (event.keyCode == 40 && index !== $items.length - 1) {
						index++;
					} else {
						return;
					}

					$items.eq(index).trigger('focus');
				}
			}
		},
		item_keydown: function (event) {
			// 27: Esc

			if (event.keyCode != 27) {
				return;
			}

			event.stopPropagation();

			this.close();
			this.$element.trigger('focus');
		},
		next_keydown: function (event) {
			// 38: Arrow up

			if (event.keyCode != 38) {
				return;
			}

			// Off vertical scrolling
			event.preventDefault();

			event.stopPropagation();

			// Use this.$drop instead this.$main (optimally)
			var $items = this.$drop.find('li:not(.disabled):visible > a');

			var index = $items.index(event.target);

			$items.eq(index - 1).trigger('focus');
		}
	};

	// For AMD/Node/CommonJS used elements (optional)
	// http://learn.jquery.com/jquery-ui/environments/amd/
	return $.fn.submenupicker = function (elements) {
		var $elements = this instanceof $ ? this : $(elements);

		return $elements.each(function () {
			var data = $.data(this, 'bs.submenu');

			if (!data) {
				data = new Submenupicker(this);

				$.data(this, 'bs.submenu', data);
			}
		});
	};

});

// Bootstrap Sub-Menus trigger
$('.dropdown-submenu > a').submenupicker();


// =================================================================
// Off-Canvas Menu
// Source: http://codyhouse.co/gem/secondary-expandable-navigation
// =================================================================

var $lateral_menu_trigger = $('#cd-menu-trigger'),
	$content_wrapper = $('#body-content'),
	$navigation = $('header');

// open-close lateral menu clicking on the menu icon.
$lateral_menu_trigger.on('click', function (event) {
	event.preventDefault();

	$lateral_menu_trigger.toggleClass('is-clicked');
	$navigation.toggleClass('lateral-menu-is-open');
	$content_wrapper.toggleClass('lateral-menu-is-open');
	$('#cd-lateral-nav').toggleClass('lateral-menu-is-open');
});

// close lateral menu clicking outside the menu itself.
$content_wrapper.on('click', function (event) {
	if (!$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span')) {
		$lateral_menu_trigger.removeClass('is-clicked');
		$navigation.removeClass('lateral-menu-is-open');
		$content_wrapper.removeClass('lateral-menu-is-open');
		$('#cd-lateral-nav').removeClass('lateral-menu-is-open');
	}
});

// close lateral menu clicking on link.
$("#cd-lateral-nav .link").on("click", function (e) {
	$lateral_menu_trigger.removeClass('is-clicked');
	$navigation.removeClass('lateral-menu-is-open');
	$content_wrapper.removeClass('lateral-menu-is-open');
	$('#cd-lateral-nav').removeClass('lateral-menu-is-open');
	e.stopPropagation();
});

// open (or close) submenu items in the lateral menu. Close all the other open submenu items.
$('.item-has-children').children('a').on('click', function (event) {
	event.preventDefault();
	$(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(300).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(300);
});


// =========================================================
// Justified Gallery
// Source: http://miromannino.github.io/Justified-Gallery/
// =========================================================

$(".justified-gallery").justifiedGallery({
	rowHeight: 360, // The preferred height of rows in pixel.
	maxRowHeight: '200%', // A number (e.g 200) which specifies the maximum row height in pixel. A negative value to don't have limits. Alternatively, a string which specifies a percentage (e.g. 200% means that the row height can't exceed 2 * rowHeight).
	margins: 6, // Decide the margins between the images.
	border: 0, // Decide the border size of the gallery. With a negative value the border will be the same as the margins.
	fixedHeight: false, // Decide if you want to have a fixed height (rowHeight).
	randomize: false, // Automatically randomize or not the order of photos.
	captions: false, // Must be "false"!!!
	lastRow: 'nojustify' // 'justify', 'nojustify' or 'hide'.
});


// =====================================================================================
// Isotope
// Source: http://isotope.metafizzy.co
// Note-1: "imagesloaded" blugin is required: https://github.com/desandro/imagesloaded
// Note-2: "lazysizes" blugin is recommended: https://github.com/aFarkas/lazysizes
// =====================================================================================

$(document).ready(function() {

	// START SEND MAIL
	$('#cart-form').submit(function(e) {
		e.preventDefault();

		var formData = $(this).serializeArray();
		var cartData = sessionStorage.getItem('cart') || '[]';
		formData.push({ name: 'cartData', value: cartData });

		$.ajax({
			url: 'ajax/send_email',
			type: 'POST',
			data: formData,
			success: function(response) {
				// console.log(response);
				// Proverite da li je odgovor JSON objekat
				try {
					response = typeof response === 'string' ? JSON.parse(response) : response;
				} catch (e) {
					console.error('Error parsing response from send_email.php:', e);
					return;
				}

				if (response.status === 'success') {
					// Isprazni kontejner sa formom
					document.querySelector('.form-container').innerHTML = '<h2 class="send-success">Poruka je uspešno poslata.</h2>';

					// Isprazni sesiju sa podacima iz korpe
					sessionStorage.removeItem('cart');

					// AJAX zahtev za čišćenje sesije na serveru
					$.ajax({
						url: 'ajax/clear_cart',
						type: 'POST',
						success: function(response) {
							try {
								response = typeof response === 'string' ? JSON.parse(response) : response;
								if (response.status === 'success') {
									renderCart([]); // Renderujte praznu korpu
									updateCartCounter(0); // Ažurirajte brojač korpe
								} else {
									console.error('Failed to clear cart on server:', response.message);
								}
							} catch (e) {
								console.error('Error parsing response from clear_cart.php:', e);
							}
						},
						error: function(xhr, status, error) {
							console.error('AJAX error:', status, error);
						}
					});
				} else {
					// Prikaz poruke o grešci
					alert(response.message || 'Došlo je do greške prilikom slanja poruke.');
				}
			},
			error: function(xhr, status, error) {
				console.error('AJAX error:', status, error);
				alert('Došlo je do greške prilikom slanja poruke.');
			}
		});
	});

	function renderCartForMail() {
		var cartData = sessionStorage.getItem('cart');
		var cart = [];

		try {
			cart = JSON.parse(cartData);
			if (!Array.isArray(cart)) {
				console.error('Cart data is not an array:', cart);
				cart = [];
			}
		} catch (e) {
			console.error('Error parsing cart data from sessionStorage:', e);
			cart = [];
		}

		var cartTable = $('#cart-table-body');
		cartTable.empty(); // Očistite prethodni sadržaj

		cart.forEach(function(item) {
			var row = `<tr>
                    <td><img src="${item.path}" alt="${item.album}" width="50"></td>
                    <td>${item.album}</td>
                    <td>1</td>
                </tr>`;
			cartTable.append(row);
		});

		// Dodajte deo za cenu
		$('#total-price').text(calculateTotalForMail(cart));
	}

	function calculateTotalForMail(cart) {
		// Pretpostavimo da je cena svakog artikla 10
		var total = cart.length * 10;
		return total + ' RSD';
	}

	// END SEND MAIL


	// START CART FUNCTIONS
	const photoPrice = 200; // Cena jedne fotografije

	document.addEventListener('DOMContentLoaded', (event) => {
		sessionStorage.removeItem('cart');

		const cartData = sessionStorage.getItem('cart');
		let cart = [];

		try {
			cart = JSON.parse(cartData) || [];
			if (!Array.isArray(cart)) {
				console.error('Cart data is not an array:', cart);
				cart = [];
			}
		} catch (e) {
			console.error('Error parsing cart data from sessionStorage:', e);
			cart = [];
		}

		updateCartCounter(cart.length); // Initial update of the cart counter

		if (window.location.pathname.includes('/cart')) {
			renderCart(cart);
		}
	});

	// AddToCart
	$(document).on('click', '.add-to-cart-button', function(e) {
		e.preventDefault();
		var $button = $(this);
		var imagePath = $button.closest('.album-single-item').find('.asi-img').attr('src');
		var imageTime = $button.closest('.album-single-item').find('.asi-text-overlay').text().trim();
		var albumName = $('#album-naziv').val();
		var photoName = $button.closest('.isotope-item').find('.slika-naziv').val(); // Use class instead of ID
		var quantity = 1; // Default quantity

		var cartData = sessionStorage.getItem('cart');
		var cart = [];

		try {
			cart = JSON.parse(cartData);
			if (!Array.isArray(cart)) {
				console.error('Cart data is not an array:', cart);
				cart = [];
			}
		} catch (e) {
			console.error('Error parsing cart data from sessionStorage:', e);
			cart = [];
		}

		var itemIndex = cart.findIndex(item => item.path === imagePath && item.album === albumName);

		if (itemIndex > -1) {
			$.ajax({
				url: 'ajax/remove_from_cart',
				type: 'POST',
				data: {
					image_path: imagePath,
					album_name: albumName
				},
				success: function(response) {
					// console.log('Server response:', response);
					var result;
					try {
						result = typeof response === 'string' ? JSON.parse(response) : response;
					} catch (e) {
						console.error('Error parsing JSON response:', e);
						return;
					}

					if (result.status === 'success') {
						let serverCart = result.data;

						if (!Array.isArray(serverCart)) {
							console.error("Server cart data is not an array:", serverCart);
							serverCart = [];
						}

						sessionStorage.setItem('cart', JSON.stringify(serverCart));

						if (window.location.pathname.includes('/cart')) {
							renderCart(serverCart);
						}
						$button.removeClass('add-to-cart-success');
						updateCartCounter(serverCart.length);
					} else {
						console.error('Error removing item from cart:', result.message);
					}
				},
				error: function(xhr, status, error) {
					console.error('AJAX error:', status, error);
				}
			});
		} else {
			// Add new item
			$.ajax({
				url: 'ajax/add_to_cart',
				type: 'POST',
				data: {
					image_path: imagePath,
					image_time: imageTime,
					album_name: albumName,
					photo_name: photoName,
					quantity: quantity
				},
				success: function(response) {
					if (typeof response === 'string') {
						try {
							response = JSON.parse(response);
						} catch (e) {
							console.error('Error parsing JSON response:', e);
							return;
						}
					}

					if (response.status === 'success') {
						const cart = response.data;
						if (Array.isArray(cart)) {
							sessionStorage.setItem('cart', JSON.stringify(cart));
							$button.addClass('add-to-cart-success');
							updateCartCounter(cart.length);
							if (window.location.pathname.includes('/cart')) {
								renderCart(cart);
							}
						} else {
							console.error("Cart data is not an array:", cart);
						}
					} else {
						console.error('Server error:', response.message);
					}
				},
				error: function(xhr, status, error) {
					console.error('AJAX error:', status, error);
				}
			});
		}
	});

	function renderCart(cartItems) {
		if (!Array.isArray(cartItems)) {
			console.error('Expected cartItems to be an array, but received:', cartItems);
			return;
		}
		// console.log("Rendering cart with items:", cartItems);
		const cartContainer = document.getElementById('cart-container');
		const cartSummary = document.getElementById('cart-summary');

		if (!cartContainer || !cartSummary) {
			console.error('Cart container or cart summary element not found');
			return;
		}

		cartContainer.innerHTML = ''; // Clear existing content

		if (cartItems.length === 0) {
			const emptyCartImg = document.createElement('img');
			emptyCartImg.className = 'empty-cart';
			emptyCartImg.src = 'assets/img/empty_cart.png';
			emptyCartImg.alt = 'image';
			cartContainer.appendChild(emptyCartImg);
			cartSummary.innerHTML = ''; // Clear summary if cart is empty
			updateCartCounter(0); // Update cart counter to 0 if cart is empty
			return;
		}

		// Group items by album
		const albums = cartItems.reduce((acc, item) => {
			if (!acc[item.album]) {
				acc[item.album] = [];
			}
			acc[item.album].push(item);
			return acc;
		}, {});

		let totalItemCount = 0;

		for (const [albumName, items] of Object.entries(albums)) {
			const albumTitle = document.createElement('h3');
			albumTitle.className = 'album-title';
			albumTitle.textContent = albumName;
			cartContainer.appendChild(albumTitle);

			const albumList = document.createElement('ul');
			albumList.className = 'album-list';

			items.forEach((item) => {
				const albumItem = document.createElement('li');
				albumItem.className = 'album-item';

				const img = document.createElement('img');
				img.src = item.path;
				img.alt = 'Image';
				albumItem.appendChild(img);

				const inputContainer = document.createElement('div');
				inputContainer.className = 'input-container';

				const spinnerInput = document.createElement('input');
				spinnerInput.type = 'number';
				spinnerInput.className = 'spinner-input';
				spinnerInput.id = 'spinner';
				spinnerInput.value = item.quantity || 1;
				spinnerInput.min = 1;
				spinnerInput.max = 200;
				inputContainer.appendChild(spinnerInput);

				spinnerInput.addEventListener('input', function() {
					updateTotalPrice();
					updateQuantityInSession(item.path, item.album, spinnerInput.value);
				});

				const removeButton = document.createElement('button');
				removeButton.className = 'remove-item btn btn-danger';
				removeButton.textContent = 'X';
				removeButton.onclick = function() {
					removeFromCart(item.path, item.album);
				};
				inputContainer.appendChild(removeButton);

				albumItem.appendChild(inputContainer);
				albumList.appendChild(albumItem);
			});

			cartContainer.appendChild(albumList);
		}

		function updateTotalPrice() {
			const spinnerInputs = document.querySelectorAll('.spinner-input');
			totalItemCount = Array.from(spinnerInputs).reduce((total, input) => total + parseInt(input.value, 10), 0);
			const totalPrice = totalItemCount * photoPrice;
			cartSummary.innerHTML = `
            <div class="row">
                <div class="col-lg-4">
                    <strong>Cena jedne fotografije:</strong> ${photoPrice}.00RSD<br>
                    <strong>Broj poručenih fotografija:</strong> ${totalItemCount}<br>
                    <strong>Ukupna cena fotografija:</strong> ${totalPrice}.00RSD
                </div>
            </div>
        `;
		}

		function updateQuantityInSession(imagePath, albumName, quantity) {
			const cartData = sessionStorage.getItem('cart');
			let cart = [];

			try {
				cart = JSON.parse(cartData);
				if (!Array.isArray(cart)) {
					console.error('Cart data is not an array:', cart);
					cart = [];
				}
			} catch (e) {
				console.error('Error parsing cart data from sessionStorage:', e);
				cart = [];
			}

			const itemIndex = cart.findIndex(item => item.path === imagePath && item.album === albumName);
			if (itemIndex > -1) {
				cart[itemIndex].quantity = parseInt(quantity, 10);
				sessionStorage.setItem('cart', JSON.stringify(cart));
			}
		}

		updateTotalPrice(); // Update total price after rendering cart
	}

	function removeFromCart(imagePath, albumName) {
		// Update local cart session first
		var cartData = sessionStorage.getItem('cart');
		var cart = [];

		try {
			cart = JSON.parse(cartData);
			if (!Array.isArray(cart)) {
				console.error('Cart data is not an array:', cart);
				cart = [];
			}
		} catch (e) {
			console.error('Error parsing cart data from sessionStorage:', e);
			cart = [];
		}

		// Filter out the item to be removed
		var updatedCart = cart.filter(item => !(item.path === imagePath && item.album === albumName));
		sessionStorage.setItem('cart', JSON.stringify(updatedCart));

		// Send AJAX request to server to update backend
		$.ajax({
			url: 'ajax/remove_from_cart',
			type: 'POST',
			data: {
				image_path: imagePath,
				album_name: albumName
			},
			success: function(response) {
				// console.log('Server response:', response);
				var result;
				try {
					result = typeof response === 'string' ? JSON.parse(response) : response;
				} catch (e) {
					console.error('Error parsing JSON response:', e);
					return;
				}

				if (result.status === 'success') {
					let serverCart = result.data;

					if (!Array.isArray(serverCart)) {
						console.error("Server cart data is not an array:", serverCart);
						serverCart = [];
					}

					sessionStorage.setItem('cart', JSON.stringify(serverCart));

					if (window.location.pathname.includes('/cart')) {
						renderCart(serverCart);
					}
					updateCartCounter(serverCart.length);
				} else {
					console.error('Error removing item from cart:', result.message);
				}
			},
			error: function(xhr, status, error) {
				console.error('AJAX error:', status, error);
			}
		});
	}

	function updateCartCounter(count) {
		const cartCounter = document.getElementById('cart-counter');
		cartCounter.textContent = count > 0 ? count : '';
	}

	const initialCart = JSON.parse(sessionStorage.getItem('cart')) || [];
	// console.log("Initial cart:", initialCart);
	updateCartCounter(initialCart.length);

	if (window.location.pathname.includes('/cart')) {
		renderCart(initialCart);
	}

// END CART FUNCTIONS

	function loadImages(time, album, page, itemsPerPage) {
		$.ajax({
			url: 'ajax/api',
			type: 'POST',
			data: { time: time, album: album, page: page, items_per_page: itemsPerPage },
			success: function(response) {
				var slike, pagination;
				try {
					var parsedResponse = typeof response === 'string' ? JSON.parse(response) : response;
					slike = parsedResponse.images;
					pagination = parsedResponse.pagination;

					if (!Array.isArray(slike)) {
						//console.error('Images response nije niz');
						return;
					}

					var $container = $('.isotope-items-wrap');
					$container.empty();

					// Dodajte grid-sizer element
					$container.append('<div class="grid-sizer"></div>');

					for (var i = 0; i < slike.length; i++) {
						var slika = slike[i];
						if (!slika.path || !slika.title) {
							console.error('Nedostaju podaci za sliku', slika);
							continue;
						}

						var createdTime = new Date('1970-01-01T' + slika.created_time + 'Z').getHours();
                        var inCartClass = slika.in_cart ? 'add-to-cart-success' : '';

						var html = `
                            <div class="isotope-item" data-time="${createdTime}">
								<input type="hidden" class="slika-naziv" value="${slika.title}">
                                <div class="album-single-item">
                                    <img class="asi-img" src="${slika.path}" alt="image">
                                    <div class="asi-text-overlay">
                                        ${slika.created_time}
                                    </div>
                                    <div class="asi-cover">
                                        <div class="asi-info">
											<div class="icon-wrapper">
												<a class="c-link add-to-cart-button ${inCartClass}" href="#">
													<span class="c-icon"><i class="fas fa-shopping-cart"></i></span>
												</a>
											</div>
                                            <div class="icon-wrapper">
                                                <a class="s-link lg-trigger" href="${slika.path}" data-exthumbnail="${slika.path}" data-sub-html="<h4>${slika.created_time}</h4><p>Poručene slike dobijate u formatu 13x18cm i cena je 200.00RSD po komadu.</p>">
                                                    <span class="s-icon"><i class="fas fa-search"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

						$container.append(html);
					}

					$('.pagination').html(pagination.html);

					$('.pagination-link').click(function(e) {
						e.preventDefault();
						var page = $(this).data('page');
						loadImages(time, album, page, itemsPerPage);
					});

					// Ponovo inicijalizujte lightGallery za nove elemente
					$('.isotope-items-wrap').find('.lg-trigger').lightGallery({
						selector: 'this',
						download: false,
					});

					// Ponovo inicijalizujte Isotope za nove elemente
					$container.imagesLoaded(function () {
						$container.isotope('reloadItems');
						$container.isotope({
							itemSelector: '.isotope-item',
							transitionDuration: '0.5s',
							masonry: {
								columnWidth: '.grid-sizer',
								horizontalOrder: true
							}
						});
					});

				} catch (e) {
					console.error('Greška pri parsiranju JSON odgovora:', e);
				}
			},
			error: function() {
				console.error('Greška pri filtriranju slika');
			}
		});
	}

	// Inicijalizacija Isotope
	var $container = $('.isotope-items-wrap');
	$container.imagesLoaded(function () {
		$container.isotope({
			itemSelector: '.isotope-item',
			transitionDuration: '0.5s',
			masonry: {
				columnWidth: '.grid-sizer',
				horizontalOrder: true
			}
		});
	});

	// Filter
	$('.isotope-filter-links a').on("click", function () {
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector
		});
		return false;
	});

	// Filter item active
	var filterItemActive = $('.isotope-filter-links a');
	filterItemActive.on('click', function () {
		var $this = $(this);
		if (!$this.hasClass('active')) {
			filterItemActive.removeClass('active');
			$this.addClass('active');
		}
	});

	// if isotope exist add "overflow-y: scroll;" to body tag
	$(".isotope").each(function () {
		$('body').css('overflow-y', 'scroll');
	});

	// Klik na timeline value
	$('.timeline-value').click(function () {
		var isActive = $(this).hasClass('active');

		// Uklanjanje klase 'active' sa svih elemenata .timeline-value
		$('.timeline-value').removeClass('active');

		// Ako element nije već aktivan, dodajte mu klasu 'active'
		if (!isActive) {
			$(this).addClass('active');
		} else {
			// Ako je element već aktivan, resetujemo filtere i prikazujemo sve slike
			$(this).removeClass('active');
			loadImages('all', $('#album-naziv').val(), 1, $('#show-items-desktop').val());
			return;
		}

		var time = $(this).data('value');
		var album = $('#album-naziv').val(); // Dobijanje naziva albuma iz skrivenog inputa
		var itemsPerPage = $('#show-items-desktop').val(); // Dobijanje broja stavki po stranici iz select elementa

		// Učitaj slike sa filterom ili bez filtera
		loadImages(time, album, 1, itemsPerPage); // Učitaj slike za prvu stranicu
	});

	// Događaj za promenu broja stavki po stranici
	$('#show-items-desktop').on('change', function () {
		var time = $('.timeline-value.active').data('value') || 'all';
		var album = $('#album-naziv').val();
		var itemsPerPage = $(this).val();

		loadImages(time, album, 1, itemsPerPage);
	});

	// Pozivanje loadImages funkcije prilikom inicijalnog učitavanja stranice sa default vrednostima
	var initialTime = $('.timeline-value.active').data('value') || 'all';
	var initialAlbum = $('#album-naziv').val();
	var initialItemsPerPage = $('#show-items-desktop').val();
	if (window.location.pathname === '/gallery') {
		loadImages(initialTime, initialAlbum, 1, initialItemsPerPage);
	}

	// Iterate over each select element
	$('select').each(function () {
		// Cache the number of options
		var $this = $(this),
			numberOfOptions = $(this).children('option').length;

		// Hides the select element
		$this.addClass('s-hidden');

		// Wrap the select element in a div
		$this.wrap('<div class="select"></div>');

		// Insert a styled div to sit over the top of the hidden select element
		$this.after('<div class="styledSelect"></div>');

		// Cache the styled div
		var $styledSelect = $this.next('div.styledSelect');

		// Show the first select option in the styled div
		$styledSelect.text($this.children('option').eq(0).text());

		// Insert an unordered list after the styled div and also cache the list
		var $list = $('<ul />', {
			'class': 'options'
		}).insertAfter($styledSelect);

		// Insert a list item into the unordered list for each select option
		for (var i = 0; i < numberOfOptions; i++) {
			$('<li />', {
				text: $this.children('option').eq(i).text(),
				rel: $this.children('option').eq(i).val()
			}).appendTo($list);
		}

		// Cache the list items
		var $listItems = $list.children('li');

		// Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
		$styledSelect.click(function (e) {
			e.stopPropagation();
			$('div.styledSelect.active').each(function () {
				$(this).removeClass('active').next('ul.options').hide();
			});
			$(this).toggleClass('active').next('ul.options').toggle();
		});

		// Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
		// Updates the select element to have the value of the equivalent option
		$listItems.click(function (e) {
			e.stopPropagation();
			$styledSelect.text($(this).text()).removeClass('active');
			$this.val($(this).attr('rel'));
			$list.hide();
			// Trigger change event on select element
			$this.trigger('change');
		});

		// Hides the unordered list when clicking outside of it
		$(document).click(function () {
			$styledSelect.removeClass('active');
			$list.hide();
		});
	});
});

// =====================================================
// lightGallery (lightbox plugin)
// Source: http://sachinchoolur.github.io/lightGallery
// =====================================================

$(".lightgallery").lightGallery({

	// Please read about gallery options here: http://sachinchoolur.github.io/lightGallery/docs/api.html

	// lightgallery core
	selector: '.lg-trigger',
	mode: 'lg-fade', // Type of transition between images ('lg-fade' or 'lg-slide').
	height: '100%', // Height of the gallery (ex: '100%' or '300px').
	width: '100%', // Width of the gallery (ex: '100%' or '300px').
	iframeMaxWidth: '100%', // Set maximum width for iframe.
	loop: true, // If false, will disable the ability to loop back to the beginning of the gallery when on the last element.
	speed: 600, // Transition duration (in ms).
	closable: true, // Allows clicks on dimmer to close gallery.
	escKey: true, // Whether the LightGallery could be closed by pressing the "Esc" key.
	keyPress: true, // Enable keyboard navigation.
	hideBarsDelay: 5000, // Delay for hiding gallery controls (in ms).
	controls: true, // If false, prev/next buttons will not be displayed.
	mousewheel: true, // Chane slide on mousewheel.
	download: false, // Enable download button. By default download url will be taken from data-src/href attribute but it supports only for modern browsers. If you want you can provide another url for download via data-download-url.
	counter: true, // Whether to show total number of images and index number of currently displayed image.
	swipeThreshold: 50, // By setting the swipeThreshold (in px) you can set how far the user must swipe for the next/prev image.
	enableDrag: true, // Enables desktop mouse drag support.
	enableTouch: true, // Enables touch support.

	// thumbnial plugin
	thumbnail: true, // Enable thumbnails for the gallery.
	showThumbByDefault: false, // Show/hide thumbnails by default.
	thumbMargin: 5, // Spacing between each thumbnails.
	toogleThumb: true, // Whether to display thumbnail toggle button.
	enableThumbSwipe: true, // Enables thumbnail touch/swipe support for touch devices.
	exThumbImage: 'data-exthumbnail', // If you want to use external image for thumbnail, add the path of that image inside "data-" attribute and set value of this option to the name of your custom attribute.

	// autoplay plugin
	autoplay: false, // Enable gallery autoplay.
	autoplayControls: true, // Show/hide autoplay controls.
	pause: 6000, // The time (in ms) between each auto transition.
	progressBar: true, // Enable autoplay progress bar.
	fourceAutoplay: false, // If false autoplay will be stopped after first user action

	// fullScreen plugin
	fullScreen: true, // Enable/Disable fullscreen mode.

	// zoom plugin
	zoom: true, // Enable/Disable zoom option.
	scale: 0.5, // Value of zoom should be incremented/decremented.
	enableZoomAfter: 50, // Some css styles will be added to the images if zoom is enabled. So it might conflict if you add some custom styles to the images such as the initial transition while opening the gallery. So you can delay adding zoom related styles to the images by changing the value of enableZoomAfter.

	// video options
	videoMaxWidth: '1000px', // Set limit for video maximal width.

	// Youtube video options
	loadYoutubeThumbnail: true, // You can automatically load thumbnails for youtube videos from youtube by setting loadYoutubeThumbnail true.
	youtubeThumbSize: 'default', // You can specify the thumbnail size by setting respective number: 0, 1, 2, 3, 'hqdefault', 'mqdefault', 'default', 'sddefault', 'maxresdefault'.
	youtubePlayerParams: { // Change youtube player parameters: https://developers.google.com/youtube/player_parameters
		modestbranding: 0,
		showinfo: 1,
		controls: 1
	},

	// Vimeo video options
	loadVimeoThumbnail: true, // You can automatically load thumbnails for vimeo videos from vimeo by setting loadYoutubeThumbnail true.
	vimeoThumbSize: 'thumbnail_medium', // Thumbnail size for vimeo videos: 'thumbnail_large' or 'thumbnail_medium' or 'thumbnail_small'.
	vimeoPlayerParams: { // Change vimeo player parameters: https://developer.vimeo.com/player/embedding#universal-parameters
		byline: 1,
		portrait: 1,
		title: 1,
		color: 'CCCCCC',
		autopause: 1
	}

});


// =======================================================================================
// Defer videos (Youtube, Vimeo)
// Note: When you have embed videos in your webpages it causes your page to load slower.
// Deffering will allow your page to load quickly.
// Source: https://www.feedthebot.com/pagespeed/defer-videos.html
// =======================================================================================

function init() {
	var vidDefer = document.getElementsByTagName('iframe');
	for (var i = 0; i < vidDefer.length; i++) {
		if (vidDefer[i].getAttribute('data-src')) {
			vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
		}
	}
}

window.onload = init;


// =============================================================================================
// Styling a select element
// Source: http://stackoverflow.com/questions/7208786/how-to-style-the-option-of-a-html-select
// =============================================================================================

// ==============================================================================
// Add to favorite button
// Source: http://www.webdesigncrowd.com/demo/circle-reveal-animation-12.23.13/
// ==============================================================================

$(".fav-count").on("click", function () {
	var total = parseInt($(this).html(), 10);
	if ($(this).parent().hasClass("active")) {
		total -= 1;
	} else {
		total += 1;
	}
	$(this).html(total);
	$(this).parent().toggleClass("active");
});

$(".icon-heart").on("click", function () {
	var total = parseInt($(this).parent().siblings(".fav-count").first().html(), 10);
	if ($(this).parent().parent().hasClass("active")) {
		total -= 1;
	} else {
		total += 1;
	}
	$(this).parent().siblings(".fav-count").first().html(total);
	$(this).parent().parent().toggleClass("active");
});


// ==========================
// Album description toggle
// ==========================

$('.al-desc-toggle-trigger').on("click", function () {
	$('.album-description').toggleClass('al-desc-full');
	$('.al-desc-toggle').slideToggle(400);
});


// ================================================
// OWL Carousel
// Source:: http://www.owlcarousel.owlgraphic.com
// ================================================

$('.owl-carousel').each(function () {
	var $carousel = $(this);
	$carousel.owlCarousel({

		items: $carousel.data("items"),
		loop: $carousel.data("loop"),
		margin: $carousel.data("margin"),
		center: $carousel.data("center"),
		startPosition: $carousel.data("start-position"),
		animateIn: $carousel.data("animate-in"),
		animateOut: $carousel.data("animate-out"),
		autoWidth: $carousel.data("autowidth"),
		autoHeight: $carousel.data("autoheight"),
		autoplay: $carousel.data("autoplay"),
		autoplayTimeout: $carousel.data("autoplay-timeout"),
		autoplayHoverPause: $carousel.data("autoplay-hover-pause"),
		autoplaySpeed: $carousel.data("autoplay-speed"),
		nav: $carousel.data("nav"),
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		navSpeed: $carousel.data("nav-speed"),
		dots: $carousel.data("dots"),
		dotsSpeed: $carousel.data("dots-speed"),
		mouseDrag: $carousel.data("mouse-drag"),
		touchDrag: $carousel.data("touch-drag"),
		dragEndSpeed: $carousel.data("drag-end-speed"),
		lazyLoad: $carousel.data("lazy-load"),
		video: true,
		responsive: {
			0: {
				items: $carousel.data("mobile-portrait"),
				center: false,
			},
			480: {
				items: $carousel.data("mobile-landscape"),
				center: false,
			},
			768: {
				items: $carousel.data("tablet-portrait"),
				center: false,
			},
			992: {
				items: $carousel.data("tablet-landscape"),
			},
			1200: {
				items: $carousel.data("items"),
			}
		}

	});

	// Mousewheel plugin
	var owl = $('.owl-mousewheel');
	owl.on('mousewheel', '.owl-stage', function (e) {
		if (e.deltaY > 0) {
			owl.trigger('prev.owl');
		} else {
			owl.trigger('next.owl');
		}
		e.preventDefault();
	});
});


// =======================================================
// YTPlayer (Background Youtube video)
// Source: https://github.com/pupunzi/jquery.mb.YTPlayer
// =======================================================

// Disabled on mobile devices, because the video background doesn't work on mobile devices (instead, the background image is displayed).
if (!jQuery.browser.mobile) {
	$(".youtube-bg").mb_YTPlayer();
}


// =======================================
// Background image scrolling animations
// =======================================

var x = 0;
setInterval(function () {
	x -= 1;
	// Background image scrolling horisontally.
	$('.bg-image-scroll-horizontal').css('background-position', x + 'px 50%');

	// Background image scrolling vertically.
	$('.bg-image-scroll-vertical').css('background-position', '50% ' + x + 'px');

}, 80); // Scrolling speed.


// ===============================================
// Universal PHP Mail Feedback Script
// Source: https://github.com/agragregra/uniMail
// ===============================================

//E-mail Ajax Send
$('#contact-form').on('submit', function(event) {
	event.preventDefault(); // Prevent the default form submission

	$.ajax({
		url: 'ajax/contact-mail', // URL to send the form data to
		type: 'POST', // HTTP method to use
		data: $(this).serialize(), // Serialize form data
		success: function(response) {
			if (response.status === 'success') {
				// Isprazni kontejner sa formom
				document.querySelector('.contact-form-container').innerHTML = '<h2 class="send-success">Poruka je uspešno poslata.</h2>';

			} else {
				// Prikaz poruke o grešci
				alert(response.message || 'Došlo je do greške prilikom slanja poruke.');
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
			// Prikaz poruke o grešci
			alert(response.message || 'Došlo je do greške prilikom slanja poruke.');
		}
	});
});

// ======================
// Scroll to top button
// ======================

// Check to see if the window is top if not then display button
$(window).scroll(function () {
	if ($(this).scrollTop() > 500) {
		$('.scrolltotop').fadeIn();
	} else {
		$('.scrolltotop').fadeOut();
	}
});


// =========================================================================================
// Parallax effect
// Source: http://www.webdesignerdepot.com/2013/07/how-to-create-a-simple-parallax-effect/
// =========================================================================================


$(window).scroll(function (e) {
	parallax();
});

function parallax() {
	var scrolled = $(window).scrollTop();
	if ($(window).width() > 992) { // disable parallax on small devices.
		$('.parallax').css('top', (scrolled * 0.4) + 'px');
	}
}

// ===============
// Window resize
// ===============

$(window).resize(function () {

	// Make "body" padding-top equal to "#header" height
	$('body').css('padding-top', $('#header').css('height'));

	// Full height page - minus "header" and "footer" height
	$('.full-page').innerHeight($(window).height() - $('#header').innerHeight() - $('#footer').innerHeight());

	// Full height carousel - minus "header" and "footer" height
	$('.full-carousel').innerHeight($(window).height() - $('#header').innerHeight() - $('#footer').innerHeight());

}).resize();


// ===============
// Miscellaneous
// ===============

// Bootstrap-3 modal fix
$('.modal').appendTo("body")

// Bootstrap tooltip
$('[data-toggle="tooltip"]').tooltip()

// Bootstrap popover
$('[data-toggle="popover"]').popover({
	html: true
});
