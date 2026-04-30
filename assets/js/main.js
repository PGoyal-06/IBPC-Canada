/**
 * IBPC Canada — main.js
 * Carousel init, counter animation, search overlay, interactions
 */
(function ($) {
  'use strict';

  // ── Hero Carousel (Owl Carousel 2) ──
  if ($('.hero-carousel').length) {
    $('.hero-carousel').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      dots: true,
      nav: false,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      smartSpeed: 800,
    });
  }

  // ── Leadership Speaks Carousel ──
  if ($('.testimonial-carousel').length) {
    $('.testimonial-carousel').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 6000,
      dots: true,
      nav: false,
      smartSpeed: 600,
      margin: 0,
    });
  }

  // ── CounterUp Animation ──
  if ($.fn.counterUp) {
    $('.counter').counterUp({
      delay: 10,
      time: 1500,
    });
  }

  // ── Search Overlay ──
  var $searchOverlay = $('.search-overlay');
  $('.search-toggle').on('click', function (e) {
    e.preventDefault();
    $searchOverlay.addClass('active');
    $searchOverlay.find('input').focus();
  });
  $('.close-search').on('click', function () {
    $searchOverlay.removeClass('active');
  });
  $(document).on('keydown', function (e) {
    if (e.key === 'Escape') {
      $searchOverlay.removeClass('active');
    }
  });

  // ── jQuery Validate on contact form ──
  if ($('#contactForm').length && $.fn.validate) {
    $('#contactForm').validate({
      rules: {
        full_name: { required: true, minlength: 2 },
        company:   { required: true },
        email:     { required: true, email: true },
        phone:     { required: true },
      },
      messages: {
        full_name: 'Please enter your full name',
        company:   'Please enter your company name',
        email:     'Please enter a valid email address',
        phone:     'Please enter your phone number',
      },
      errorClass: 'is-invalid',
      validClass: 'is-valid',
      submitHandler: function (form) {
        var $btn = $(form).find('button[type="submit"]');
        var original = $btn.text();
        $btn.prop('disabled', true).text('Sending...');

        $.ajax({
          url: '/api/contact.php',
          method: 'POST',
          data: $(form).serialize(),
          dataType: 'json',
          success: function (res) {
            if (res.success) {
              alert('Thank you! Your message has been sent.');
              form.reset();
            } else {
              alert(res.message || 'Something went wrong. Please try again.');
            }
          },
          error: function () {
            alert('Network error. Please try again.');
          },
          complete: function () {
            $btn.prop('disabled', false).text(original);
          },
        });
      },
    });
  }

  // ── Newsletter form ──
  $('#newsletterForm').on('submit', function (e) {
    e.preventDefault();
    var $form = $(this);
    var $btn = $form.find('button');
    var original = $btn.text();
    $btn.prop('disabled', true).text('...');

    $.ajax({
      url: '/api/subscribe.php',
      method: 'POST',
      data: $form.serialize(),
      dataType: 'json',
      success: function (res) {
        if (res.success) {
          alert('Thank you for subscribing!');
          $form[0].reset();
        } else {
          alert(res.message || 'Subscription failed.');
        }
      },
      error: function () {
        alert('Network error. Please try again.');
      },
      complete: function () {
        $btn.prop('disabled', false).text(original);
      },
    });
  });

  // ── Resource page search (Reports, Legislations, Magazines) ──
  $(document).on('click', '.resource-search-bar .btn-search', function () {
    var query = $(this).closest('.resource-search-bar').find('input').val().toLowerCase().trim();
    $(this).closest('section').find('.resource-card-col').each(function () {
      var title = $(this).find('.resource-body h5').text().toLowerCase();
      $(this).toggle(!query || title.indexOf(query) !== -1);
    });
  });
  $(document).on('keypress', '.resource-search-bar input', function (e) {
    if (e.which === 13) $(this).siblings('.btn-search').trigger('click');
  });

  // ── Upcoming Events filter ──
  function filterUpcoming() {
    var query = $('#upcoming-search').val().toLowerCase().trim();
    var type  = $('#upcoming-type').val().toLowerCase();
    $('.upcoming-event-item').each(function () {
      var title    = $(this).find('h4').text().toLowerCase();
      var cardType = ($(this).data('type') || '').toLowerCase();
      var matchQ   = !query || title.indexOf(query) !== -1;
      var matchT   = !type  || cardType === type;
      $(this).toggle(matchQ && matchT);
    });
  }
  $('#upcoming-search-btn').on('click', filterUpcoming);
  $('#upcoming-search').on('keypress', function (e) { if (e.which === 13) filterUpcoming(); });
  $('#upcoming-type').on('change', filterUpcoming);

  // ── Past Events filter ──
  function filterPast() {
    var query = $('#past-search').val().toLowerCase().trim();
    var year  = $('#past-year').val();
    $('.past-event-item').each(function () {
      var title    = $(this).find('h4').text().toLowerCase();
      var cardYear = String($(this).data('year') || '');
      var matchQ   = !query || title.indexOf(query) !== -1;
      var matchY   = !year  || cardYear === year;
      $(this).toggle(matchQ && matchY);
    });
  }
  $('#past-search-btn').on('click', filterPast);
  $('#past-search').on('keypress', function (e) { if (e.which === 13) filterPast(); });
  $('#past-year').on('change', filterPast);

})(jQuery);
