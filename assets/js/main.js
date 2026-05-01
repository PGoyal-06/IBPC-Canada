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

        // reCAPTCHA v3 → EmailJS
        if (typeof grecaptcha !== 'undefined') {
          grecaptcha.ready(function() {
            grecaptcha.execute(RECAPTCHA_SITE_KEY, {action: 'contact'}).then(function(token) {
              $('#recaptcha_token').val(token);
              sendViaEmailJS(form, $btn, original);
            });
          });
        } else {
          sendViaEmailJS(form, $btn, original);
        }
      },
    });
  }

  // ── Membership Form Logic ──
  if ($('#membershipForm').length) {
    var $mForm = $('#membershipForm');

    // Conditional visibility: Affiliate Criteria & Nominees
    $mForm.find('#membership_type').on('change', function() {
      var val = $(this).val();
      $('#affiliate_criteria_group').toggle(val === 'Affiliate');
      
      // Secondary Member Message
      var $msg = $('#secondary_member_message');
      if (val === 'Platinum') {
        $msg.text('This member type can nominate 4 secondary members.').show();
      } else if (val === 'Gold') {
        $msg.text('This member type can nominate 1 secondary member.').show();
      } else {
        $msg.hide();
      }

      // Duration: Silver, Gold, Platinum; Classification: Silver, Gold only
      var showDuration = (['Silver', 'Gold', 'Platinum'].indexOf(val) > -1);
      $('#duration_section_row').toggle(showDuration);
      $('#classification_section_row').toggle(['Silver', 'Gold'].indexOf(val) > -1);
      $('#startup_group').toggle(val === 'Affiliate');

      if (showDuration && !$mForm.find('input[name="membership_duration"]:checked').length) {
        $mForm.find('input[name="membership_duration"][value="One Year"]').prop('checked', true).trigger('change');
      }

      // Nominee Logic (Gold: 1, Platinum: 4, Diamond: 1)
      var nomineeCount = 0;
      if (val === 'Gold') nomineeCount = 1;
      if (val === 'Platinum') nomineeCount = 4;
      if (val === 'Diamond') nomineeCount = 1;

      $('#nominee_section').toggle(nomineeCount > 0);
      $('#nominee_form_group').toggle(nomineeCount > 0);

      for (var i = 1; i <= 4; i++) {
        var $block = $('#nominee_block_' + i);
        var $fields = $('.nominee-field-' + i);
        if (i <= nomineeCount) {
          $block.show();
          $fields.prop('required', true);
        } else {
          $block.hide();
          $fields.prop('required', false).val('');
        }
      }

      updateSavings();
    });

    // Savings Calculation
    function updateSavings() {
      var type = $('#membership_type').val();
      var duration = $mForm.find('input[name="membership_duration"]:checked').val();
      var $display = $('#savings_display');
      
      if (duration === 'Three Years') {
        var savings = 0;
        if (type === 'Silver') savings = 335; // (3 * 555) - 1330
        if (type === 'Gold') savings = 1110;  // (3 * 1850) - 4440
        if (type === 'Platinum') savings = 3330; // (3 * 5550) - 13320
        
        if (savings > 0) {
          $('#savings_amount').text(savings.toLocaleString());
          $display.fadeIn();
        } else {
          $display.fadeOut();
        }
      } else {
        $display.fadeOut();
      }
    }

    $mForm.find('input[name="membership_duration"]').on('change', updateSavings);

    // Conditional visibility: Date of Birth
    $mForm.find('#affiliate_criteria').on('change', function() {
      var val = $(this).val();
      $('#dob_group').toggle(val === 'Member under 45 years');
      checkAffiliateEligibility();
    });

    // Affiliate eligibility validation
    function checkAffiliateEligibility() {
      var memType = $('#membership_type').val();
      if (memType !== 'Affiliate') return;

      var criteria = $('#affiliate_criteria').val();
      var dob = $('#dob').val();
      var gender = $('#gender').val();

      // Gender check for Woman Entrepreneur
      if (criteria === 'Woman entrepreneur / professional' && gender === 'Male') {
        alert("The 'Woman entrepreneur / professional' criteria is reserved for women. Please select another criteria or update your gender selection.");
        $('#affiliate_criteria').val('');
        return;
      }

      // Age check
      if (criteria === 'Member under 45 years' && dob) {
        var birthDate = new Date(dob);
        var today = new Date();
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
          age--;
        }
        if (age >= 45) {
          alert("The 'Member under 45 years' criteria requires the applicant to be under 45. Please verify the Date of Birth or select another criteria.");
          $('#dob').val('');
        }
      }
    }

    $mForm.find('#dob, #gender').on('change', checkAffiliateEligibility);

    // Startup Toggle
    $mForm.find('input[name="is_startup"]').on('change', function() {
      var val = $(this).val();
      $('#startup_details_section').toggle(val === 'Yes');
      // Update requirements
      $('#startup_name, #startup_details').prop('required', val === 'Yes');
    });

    // Conditional visibility: Corporate Details
    $mForm.find('input[name="member_classification"]').on('change', function() {
      var val = $(this).val();
      var isCorporate = (val === 'Corporate');
      $('.corporate-required').toggle(isCorporate);
      $('.corporate-docs').toggle(isCorporate);
      $('.corporate-fields').toggle(isCorporate);
      
      // Toggle required attribute for business registration number
      $('#business_reg_number').prop('required', isCorporate);
    });

    // Initial check for classification (if defaulted to Individual)
    if ($mForm.find('input[name="member_classification"]:checked').val() === 'Corporate') {
      $('.corporate-fields, .corporate-docs, .corporate-required').show();
      $('#business_reg_number').prop('required', true);
    }

    // Upload zone: show selected filename
    $mForm.on('change', '.upload-zone-input', function() {
      var $strong = $(this).closest('.upload-zone').find('strong');
      if (!$strong.data('original')) $strong.data('original', $strong.text());
      $strong.text(this.files[0] ? this.files[0].name : $strong.data('original'));
    });

    // Validation
    if ($.fn.validate) {
      $mForm.validate({
        errorClass: 'is-invalid',
        validClass: 'is-valid',
        submitHandler: function (form) {
          var $btn = $(form).find('button[type="submit"]');
          var original = $btn.text();
          $btn.prop('disabled', true).text('Processing...');

          if (typeof grecaptcha !== 'undefined') {
            grecaptcha.ready(function() {
              grecaptcha.execute(RECAPTCHA_SITE_KEY, {action: 'membership'}).then(function(token) {
                $('#recaptcha_token').val(token);
                submitMembershipForm(form, $btn, original);
              });
            });
          } else {
            submitMembershipForm(form, $btn, original);
          }
        }
      });
    }
  }

  // ── Membership Form AJAX Helper ──
  function submitMembershipForm(form, $btn, originalText) {
    var formData = new FormData(form);

    $.ajax({
      url: $(form).attr('action'),
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      dataType: 'json',
      success: function (res) {
        if (res.success) {
          alert(res.message || 'Application submitted successfully!');
          form.reset();
          // Hide conditional groups and reset upload zone labels
          $('#affiliate_criteria_group, #dob_group, .corporate-docs, .corporate-required, #classification_section_row, #startup_group, #duration_section_row, #nominee_section, #startup_details_section, #savings_display, #secondary_member_message').hide();
          $mForm.find('.upload-zone strong').each(function() {
            var orig = $(this).data('original');
            if (orig) $(this).text(orig);
          });
        } else {
          alert(res.message || 'Submission failed. Please try again.');
        }
      },
      error: function (xhr) {
        var msg = 'Network error. Please try again.';
        if (xhr.responseJSON && xhr.responseJSON.message) msg = xhr.responseJSON.message;
        alert(msg);
      },
      complete: function () {
        $btn.prop('disabled', false).text(originalText);
      }
    });
  }

  // ── EmailJS send helper ──
  function sendViaEmailJS(form, $btn, originalText) {
    if (typeof emailjs === 'undefined') {
      alert('Email service is not available. Please try again later.');
      $btn.prop('disabled', false).text(originalText);
      return;
    }

    emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY });

    // Map form fields to EmailJS template variables
    var templateParams = {
      from_name:  form.full_name.value,
      from_email: form.email.value,
      phone:      form.phone.value,
      company:    form.company.value,
      subject:    'New Contact Inquiry — IBPC Canada',
      message:    form.message.value
    };

    emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, templateParams)
      .then(function() {
        alert('Thank you! Your message has been sent.');
        form.reset();
      })
      .catch(function(error) {
        console.error('EmailJS error:', error);
        alert('Something went wrong. Please try again.');
      })
      .finally(function() {
        $btn.prop('disabled', false).text(originalText);
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
