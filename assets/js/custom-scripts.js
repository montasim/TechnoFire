$(document).ready(function () {
  "use strict";

  //===== Header Search =====//
  $(".srch-btn").on("click", function () {
    $(".header-search").addClass("active");
    return false;
  });
  $(".srch-cls-btn").on("click", function () {
    $(".header-search").removeClass("active");
    return false;
  });

  //===== Side Panel =====//
  $(".sidepanel > span").on("click", function () {
    $(".sidepanel").toggleClass("show");
    $(this).toggleClass("spin");
    return false;
  });

  //===== Color Picker =====*/
  $(".color-picker a").on("click", function () {
    $(".color-picker a").removeClass("applied");
    $(this).addClass("applied");
    return false;
  });

  //===== Accordians =====//
  $("#toggle .toggle-content").hide();
  $("#toggle h6:first")
    .addClass("active")
    .next()
    .slideDown(500)
    .parent()
    .addClass("activate");
  $("#toggle h6").on("click", function () {
    if ($(this).next().is(":hidden")) {
      $("#toggle h6")
        .removeClass("active")
        .next()
        .slideUp(500)
        .parent()
        .removeClass("activate");
      $(this)
        .toggleClass("active")
        .next()
        .slideDown(500)
        .parent()
        .toggleClass("activate");
    }
  });

  //===== Accordians =====//
  $("#toggle2 .toggle-content").hide();
  $("#toggle2 h6:last")
    .addClass("active")
    .next()
    .slideDown(500)
    .parent()
    .addClass("activate");
  $("#toggle2 h6").on("click", function () {
    if ($(this).next().is(":hidden")) {
      $("#toggle2 h6")
        .removeClass("active")
        .next()
        .slideUp(500)
        .parent()
        .removeClass("activate");
      $(this)
        .toggleClass("active")
        .next()
        .slideDown(500)
        .parent()
        .toggleClass("activate");
    }
  });

  //===== Responsive Header =====//
  $(".rspn-mnu-btn").on("click", function () {
    $(".rsnp-mnu").addClass("slidein");
    return false;
  });
  $(".rspn-mnu-cls").on("click", function () {
    $(".rsnp-mnu").removeClass("slidein");
    return false;
  });
  $(".rsnp-mnu li.menu-item-has-children > a").on("click", function () {
    $(this).parent().siblings().children("ul").slideUp();
    $(this).parent().siblings().removeClass("active");
    $(this).parent().children("ul").slideToggle();
    $(this).parent().toggleClass("active");
    return false;
  });

  //===== Scrollbar =====//
  if ($(".rsnp-mnu").length > 0) {
    var ps = new PerfectScrollbar(".rsnp-mnu");
  }

  //===== LightBox =====//
  if ($.isFunction($.fn.fancybox)) {
    $('[data-fancybox],[data-fancybox="gallery"]').fancybox({});
  }

  //===== Select =====//
  if ($("select").length > 0) {
    $("select").selectpicker();
  }

  //===== Count Down =====//
  if ($.isFunction($.fn.downCount)) {
    $(".countdown").downCount({
      date: "12/12/2020 12:00:00",
      offset: +5,
    });
  }

  //===== Counter Up =====//
  if ($.isFunction($.fn.counterUp)) {
    $(".counter").counterUp({
      delay: 10,
      time: 2000,
    });
  }

  //===== Owl Carousel =====//
  if ($.isFunction($.fn.owlCarousel)) {
    //=== Video Carousel ===//
    $(".vdo-car").owlCarousel({
      autoplay: true,
      smartSpeed: 3000,
      loop: true,
      items: 4,
      dots: false,
      slideSpeed: 2000,
      autoplayHoverPause: true,
      nav: true,
      margin: 10,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>",
      ],
      responsive: {
        0: { items: 1, nav: false },
        481: { items: 2, margin: 10 },
        780: { items: 2, margin: 10 },
        981: { items: 3, margin: 10 },
        1025: { items: 4, margin: 10 },
        1200: { items: 4 },
      },
    });

    //=== Latest Event Carousel ===//
    $(".ltst-evnt-car").owlCarousel({
      autoplay: true,
      smartSpeed: 3000,
      loop: true,
      items: 1,
      dots: false,
      slideSpeed: 5000,
      autoplayHoverPause: true,
      nav: true,
      margin: 0,
      animateIn: "fadeIn",
      animateOut: "fadeOut",
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>",
      ],
    });

    $(".featured-car").owlCarousel({
      loop: true,
      margin: 0,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    });
  }

  //===== Slick Carousel =====//
  if ($.isFunction($.fn.slick)) {
    $(".wrk-gal-mn").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      slide: "li",
      fade: false,
      asNavFor: ".wrk-gal-nv",
    });

    $(".wrk-gal-nv").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: ".wrk-gal-mn",
      dots: false,
      arrows: false,
      slide: "li",
      vertical: false,
      centerMode: true,
      centerPadding: "0",
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            centerMode: true,
          },
        },
        {
          breakpoint: 490,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            centerMode: true,
          },
        },
      ],
    });
  }
}); //===== Document Ready Ends =====//

jQuery(window).on("load", function () {
  "use strict";

  //===== PageLoader =====//
  $(".preloader").fadeOut("slow");
}); //===== Window onLoad Ends =====//

//===== Sticky Header =====//
$(window).on("scroll", function () {
  "use strict";

  var menu_height = $("header").innerHeight();
  var scroll = $(window).scrollTop();
  if (scroll >= menu_height) {
    $(".stick").addClass("sticky");
  } else {
    $(".stick").removeClass("sticky");
  }
}); //===== Window onScroll Ends =====//
