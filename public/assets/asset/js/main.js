(function ($) {
	"use strict";

	var windowOn = $(window);

    /*===========================================
        =    On Load Function      =
    =============================================*/
    $(window).on('load', function () {
		preloader();
		wowAnimation();
	});

    /*===========================================
        =    Preloader      =
    =============================================*/
	function preloader() {
		$('.preloader').delay(0).fadeOut();
	};


	/*===========================================
		=            header-sticky          =
	=============================================*/
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 200) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	if ($('.tg-header-height').length > 0) {
		var headerHeight = document.querySelector(".tg-header-height");      
		var setHeaderHeight = headerHeight.offsetHeight;	
		$(".tg-header-height").each(function () {
			$(this).css({
				'height' : $(this).height()
			});
		});
	}

	/*===========================================
		=    		Mobile Menu			      =
	=============================================*/
	//SubMenu Dropdown Toggle
	if ($('.tgmenu__wrap li.menu-item-has-children ul').length) {
		$('.tgmenu__wrap .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="plus-line"></span></div>');
	}

	//Mobile Nav Hide Show
	if ($('.tgmobile__menu').length) {

		var mobileMenuContent = $('.tgmenu__wrap .tgmenu__main-menu').html();
		$('.tgmobile__menu .tgmobile__menu-box .tgmobile__menu-outer').append(mobileMenuContent);

		//Dropdown Button
		$('.tgmobile__menu li.menu-item-has-children .dropdown-btn').on('click', function () {
			$(this).toggleClass('open');
			$(this).prev('.sub-menu').slideToggle(300);
		});
		//Menu Toggle Btn
		$('.mobile-nav-toggler').on('click', function () {
			$('body').addClass('mobile-menu-visible');
		});

		//Menu Toggle Btn
		$('.tgmobile__menu-backdrop, .tgmobile__menu .close-btn').on('click', function () {
			$('body').removeClass('mobile-menu-visible');
		});
	};


	/*===========================================
		=           Scroll Up  	         =
	=============================================*/
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 245) {
			$("#sticky-header").removeClass("sticky-menu");
			$('.scroll-to-target').removeClass('open');
			$("#header-fixed-height").removeClass("active-height");

		} else {
			$("#sticky-header").addClass("sticky-menu");
			$('.scroll-to-target').addClass('open');
			$("#header-fixed-height").addClass("active-height");
		}
	});

	if ($('.scroll-to-target').length) {
	$(".scroll-to-target").on('click', function () {
		var target = $(this).attr('data-target');
		// animate
		$('html, body').animate({
		scrollTop: $(target).offset().top
		}, 0);

	});
	}

	/*===========================================
		=          Data Background    =
	=============================================*/
	$("[data-background]").each(function () {
		$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});


	/*=============================================
		=            Header Search            =
	=============================================*/
	$(".search-open-btn").on("click", function () {
		$(".search__popup").addClass("search-opened");
		$(".search-popup-overlay").addClass("search-popup-overlay-open");
	});
	$(".search-close-btn").on("click", function () {
		$(".search__popup").removeClass("search-opened");
		$(".search-popup-overlay").removeClass("search-popup-overlay-open");
	});

	/*=============================================
	=     Offcanvas Menu      =
	=============================================*/
	$(".menu-tigger").on("click", function () {
		$(".offCanvas__info, .offCanvas__overly").addClass("active");
		return false;
	});
	$(".menu-close, .offCanvas__overly").on("click", function () {
		$(".offCanvas__info, .offCanvas__overly").removeClass("active");
	});


	/*===========================================
		=        Magnific Popup    =
	=============================================*/
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});


	/*===========================================
		=        magnificPopup video view    =
	=============================================*/
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});



	/*=============================================
		=       Nice Select Js      =
	=============================================*/
	$('.select').niceSelect();

	/*=============================================
		=      Wow Js     =
	=============================================*/

	function wowAnimation() {
		var wow = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 0,
			mobile: false,
			live: true
		});
		wow.init();
	}
	/*=============================================
		=       jarallax Js	      =
	=============================================*/
	if ($('.jarallax').length > 0) {
		$('.jarallax').jarallax({
			speed: 0.2,
			imgWidth: 1200,
			imgHeight: 520,
		});
	};


	/*=============================================
		=       tg-hero-text-slide-active	      =
	=============================================*/

	var tg_hero_text_slide_1 = new Swiper(".tg-hero-text-slide-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 30,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 10000,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	});


	////////////////////////////////////////////////////
	// 03. tp-project-slider-active
	var swiper = new Swiper(".tg-portfolio-slider-active", {
		slidesPerView: 1,
		speed:1000,
		spaceBetween: 24,
		loop: true,
		centeredSlides: true,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 4000,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 2,
			},
			'991': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			nextEl: ".tg-portfolio-next",
			prevEl: ".tg-portfolio-prev",
		},
	});

	/*=============================================
		=       button hover animation	      =
	=============================================*/
	$('.tg-btn-rounded').on('mouseenter', function (e) {
		var x = e.pageX - $(this).offset().left;
		var y = e.pageY - $(this).offset().top;

		$(this).find('.tg-btn-circle-dot').css({
			top: y,
			left: x
		});
	});

	/*=============================================
		=      tg_brand_slider-active      =
	=============================================*/
	var tg_brand_slider= new Swiper(".tg-brand-slide-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		centeredSlides: true,
		allowTouchMove: false,
		speed: 8000,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	});


	/*=============================================
		=       Service       =
	=============================================*/
	document.addEventListener("DOMContentLoaded", function () {
		let serviceItems = document.querySelectorAll(".service-item");
		let images = document.querySelectorAll(".hover-image");
	
		serviceItems.forEach((item, index) => {
			item.addEventListener("mouseenter", function () {
				serviceItems.forEach((el) => el.classList.remove("active"));
				images.forEach((img) => img.classList.remove("active"));
				this.classList.add("active");
				images[index].classList.add("active");
			});
		});
	});
	

	/*=============================================
		=     td-testimonial-3-slider	   =
	=============================================*/
	var slider = new Swiper('.tg-testimonial-slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3500,
		},
		navigation: {
			nextEl: ".tg-testimonial-next",
			prevEl: ".tg-testimonial-prev",
		},
	});

	/*=============================================
		=       tg-hero-4-text-slide-active	      =
	=============================================*/

	var tg_hero_text_slide = new Swiper(".tg-hero-4-text-slide-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 30,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 4000,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	});

	/*=============================================
		=     tg-testimonial-4-slider	   =
	=============================================*/
	var slider = new Swiper('.tg-testimonial-4-slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3500,
		},
		navigation: {
			nextEl: ".tg-testimonial-4-next",
			prevEl: ".tg-testimonial-4-prev",
		},
	});

	new PureCounter();
	new PureCounter({
		filesizing: true,
		selector: ".filesizecount",
		pulse: 2,
	});


	/*=============================================
		=     tg-hero-7-zoom	   =
	=============================================*/
	var slider = new Swiper('.tg-hero-7-zoom', {
		slidesPerView: 1,
		speed:1500,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3500,
		},
		navigation: {
			nextEl: ".tg-hero-7-prev",
			prevEl: ".tg-hero-7-next",
		},
	});

	/*=============================================
		=     tg-testimonial-4-slider	   =
	=============================================*/
	var slider = new Swiper('.tg-testimonial-8-slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 3500,
		},
		pagination: {
			el: ".tg-testimonial-8-pagenation",
			clickable: true,
		  },
	});


	/*=============================================
		=       tg-text-slide-active	      =
	=============================================*/
	var tg_text_slide_active = new Swiper(".tg-text-slide-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 30,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 10000,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	});


	/*=============================================
		=        increment-decrement	      =
	=============================================*/
    $('.decrement').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val(), 10) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.increment').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val(), 10) + 1);
		$input.change();
		return false;
	});

})(jQuery);


