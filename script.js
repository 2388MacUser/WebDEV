/* -------- Change Header BG on scroll -------- */
$(function() {
  $(window).on("scroll", function() {
      if($(window).scrollTop() > 50) {
          $("header").addClass("header__container--scrolled");
      } else {
         $("header").removeClass("header__container--scrolled");
      }
  });
});




/* -------- Open Panel Media Version -------- */
$ (document).ready(function() {
    $(".header__hamburger").on('click', function() {
      $(".header__menu").toggleClass("header__menu--open");
    })

  });

  $ (document).ready(function() {
    $(".header__hamburger").on('click', function() {
      $(".header-page__menu").toggleClass("header-page__menu--open");
    })

  });


