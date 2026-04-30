<?php
/**
 * IBPC Canada — Contact Us
 * PRD §3.7: same layout as homepage contact section + full-width map
 */
$pageTitle = 'Contact Us — IBPC Canada';
$pageDescription = 'Get in touch with IBPC Canada. Reach out for membership inquiries, trade facilitation, event partnerships, or general questions.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle  = 'Contact Us';
$pageHeaderIcon   = 'info';
$breadcrumbs      = [['label' => 'Contact Us']];
include __DIR__ . '/../includes/page-header.php';
?>

<!-- ============================================================
     GET IN TOUCH + CONTACT INFO
     ============================================================ -->
<section class="sec-contact section-padding">
  <div class="container">
    <div class="row">

      <!-- Left: Contact Form (~55%) -->
      <div class="col-lg-7 col-md-6">
        <h2 class="section-label">Reach Out</h2>
        <h3 class="section-title">Get In Touch</h3>

        <form id="contactForm" method="POST" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="full_name">Full Name *</label>
                <input type="text" id="full_name" name="full_name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="company">Company *</label>
                <input type="text" id="company" name="company" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="phone">Phone *</label>
                <input type="tel" id="phone" name="phone" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5"></textarea>
          </div>

          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div>
          </div>

          <button type="submit" class="btn-1">Submit</button>
        </form>
      </div>

      <!-- Right: Contact Info (~45%) -->
      <div class="col-lg-4 offset-lg-1 col-md-6">
        <h2 class="section-label">Info</h2>
        <h3 class="section-title">Contact Us</h3>

        <div class="contact-staff">
          <div class="staff-photo">
            <img src="https://ui-avatars.com/api/?name=Office+IBPC&size=100&background=1F3D8C&color=fff" alt="IBPC Canada Office">
          </div>
          <div class="staff-info">
            <div class="staff-name">IBPC Canada Office</div>
            <div class="staff-role">General Inquiries</div>
            <div class="staff-email"><a href="mailto:<?php echo OFFICE_EMAIL; ?>"><?php echo e(OFFICE_EMAIL); ?></a></div>
          </div>
        </div>

        <div class="contact-detail">
          <strong>Postal Address</strong>
          <?php echo e(OFFICE_ADDRESS); ?>
        </div>

        <div class="contact-detail">
          <strong>Phone</strong>
          <a href="tel:<?php echo e(OFFICE_PHONE); ?>"><?php echo e(OFFICE_PHONE); ?></a>
        </div>

        <div class="contact-detail">
          <strong>Mobile</strong>
          <a href="tel:<?php echo e(OFFICE_MOBILE); ?>"><?php echo e(OFFICE_MOBILE); ?></a>
        </div>

        <div class="contact-detail">
          <strong>Email</strong>
          <a href="mailto:<?php echo e(OFFICE_EMAIL); ?>"><?php echo e(OFFICE_EMAIL); ?></a>
        </div>

        <div class="contact-detail">
          <strong>Office Timings</strong>
          <?php echo e(OFFICE_HOURS); ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     GOOGLE MAPS EMBED
     ============================================================ -->
<section class="sec-map">
  <iframe
    src="<?php echo GMAPS_EMBED_URL; ?>"
    width="100%"
    height="400"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    title="IBPC Canada Office Location">
  </iframe>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
