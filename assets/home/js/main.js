(function($) {

  "use strict";

  // Sticky Nav
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 200) {
            $('.scrolling-navbar').addClass('top-nav-collapse');
        } else {
            $('.scrolling-navbar').removeClass('top-nav-collapse');
        }
    });

	// mengecilkan Size Gambar saat discroll di area bawah
		$(window).on('scroll', function() {
            if ($(window).scrollTop() > 200) {
                $('.navbar-header-body').addClass('navbar-header-size');
            } else {
                $('.navbar-header-body').removeClass('navbar-header-size');
            }
        });


    /*
   One Page Navigation & wow js
   ========================================================================== */
    //Initiat WOW JS
    new WOW().init();

    // one page navigation
    $('.main-navigation').onePageNav({
            currentClass: 'active'
    });

    $(window).on('load', function() {

        $('body').scrollspy({
            target: '.navbar-collapse',
            offset: 100
        });

		// Mencoba untuk menghilangkan TopHeader saat di scroll akhirnya bisa dengan segala upaya usaha
		$(window).on('scroll', function() {
            if ($(window).scrollTop() > 200) {
                $('.x').hide();
            } else {
                $('.x').show();
            }
        });

    });

    // Slick Nav
    $('.mobile-menu').slicknav({
      prependTo: '.navbar-header',
      parentTag: 'span',
      allowParentLinks: true,
      duplicate: false,
      label: '',
    });

/*
   Back Top Link
   ========================================================================== */
    var offset = 200;
    var duration = 500;
    $(window).scroll(function() {
      if ($(this).scrollTop() > offset) {
        $('.back-to-top').fadeIn(400);
      } else {
        $('.back-to-top').fadeOut(400);
      }
    });

    $('.back-to-top').on('click',function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, 600);
      return false;
    })

/*
   Page Loader
   ========================================================================== */
  $(window).load(function() { // Poin utama dimana menunggu untuk website 100% terload
    $('#status').fadeOut(); // Setelah terload akan tampil animasi FadeOut
    $('#preloader').delay(100).fadeOut('slow'); // Penting karena berfungsi untuk menghilangkan background putih setelah terload
})

}(jQuery));
