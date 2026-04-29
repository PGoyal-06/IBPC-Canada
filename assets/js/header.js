/**
 * IBPC Canada — header.js
 * Navbar scroll behavior + mobile toggle
 */
(function ($) {
  'use strict';

  var $navbar = $('.nav-bar');
  var $navLinks = $('.nav-links');
  var $hamburger = $('.open-nav-bar');
  var isHomepage = $navbar.hasClass('transparent');

  // Scroll: toggle .active class
  function handleScroll() {
    if (!isHomepage) return;
    if ($(window).scrollTop() > 80) {
      $navbar.addClass('active');
    } else {
      $navbar.removeClass('active');
    }
  }

  $(window).on('scroll', handleScroll);
  handleScroll(); // run on load

  // Mobile hamburger toggle
  $hamburger.on('click', function () {
    $navLinks.toggleClass('open');
    $(this).toggleClass('is-open');
  });

  // Close mobile nav on link click
  $navLinks.find('a').on('click', function () {
    if ($(window).width() < 992) {
      $navLinks.removeClass('open');
      $hamburger.removeClass('is-open');
    }
  });

  // Dropdown hover on desktop, click on mobile
  $('.nav-links > li').on('mouseenter', function () {
    if ($(window).width() >= 992) {
      $(this).addClass('show');
    }
  }).on('mouseleave', function () {
    if ($(window).width() >= 992) {
      $(this).removeClass('show');
    }
  });

  // Mobile dropdown toggle
  $('.nav-links > li > a').on('click', function (e) {
    if ($(window).width() < 992 && $(this).siblings('.nav-dropdown').length) {
      e.preventDefault();
      $(this).parent().toggleClass('show');
    }
  });

})(jQuery);
