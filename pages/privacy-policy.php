<?php
/**
 * IBPC Canada — Privacy Policy
 */
$pageTitle = 'Privacy Policy — IBPC Canada';
$pageDescription = 'IBPC Canada\'s Privacy Policy — how we collect, use, and protect your personal information in accordance with Canadian privacy law.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Privacy Policy';
$breadcrumbs = [['label' => 'Privacy Policy']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <h2 class="section-label">Legal</h2>
        <h3 class="section-title">Privacy Policy</h3>
        <p style="color: #888; font-size: 13px; margin-bottom: 30px;">Last updated: April 29, 2026</p>

        <h2>1. Introduction</h2>
        <p>India Business &amp; Professional Council Canada ("IBPC Canada," "we," "us," or "our") is committed to protecting the privacy of our members, visitors, and stakeholders. This Privacy Policy explains how we collect, use, disclose, and protect personal information in accordance with Canada's <em>Personal Information Protection and Electronic Documents Act</em> (PIPEDA) and applicable provincial privacy legislation.</p>

        <h2>2. Information We Collect</h2>
        <p>We may collect the following categories of personal information:</p>
        <ul class="styled-list">
          <li><strong>Contact information:</strong> name, email address, phone number, mailing address</li>
          <li><strong>Professional information:</strong> company name, job title, industry, website</li>
          <li><strong>Account credentials:</strong> encrypted password hash (we never store plaintext passwords)</li>
          <li><strong>Event information:</strong> RSVP data, dietary preferences, attendance records</li>
          <li><strong>Communications:</strong> content of contact form submissions and enquiries</li>
          <li><strong>Usage data:</strong> pages visited, browser type, IP address (via standard web server logs)</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <ul class="styled-list">
          <li>To process and manage your IBPC Canada membership</li>
          <li>To register you for events and send event-related communications</li>
          <li>To respond to your enquiries and provide support</li>
          <li>To send newsletters, publications, and updates (you may unsubscribe at any time)</li>
          <li>To improve our website and services</li>
          <li>To comply with applicable legal and regulatory obligations</li>
        </ul>

        <h2>4. Sharing Your Information</h2>
        <p>We do not sell, rent, or trade your personal information to third parties. We may share information in the following limited circumstances:</p>
        <ul class="styled-list">
          <li>With service providers (email delivery, website hosting) who process data on our behalf under strict confidentiality agreements</li>
          <li>In the Member Directory, visible only to logged-in IBPC Canada members (you may opt out by contacting us)</li>
          <li>When required by law, court order, or regulatory authority</li>
          <li>In connection with a merger, acquisition, or reorganization of IBPC Canada, subject to equivalent privacy protections</li>
        </ul>

        <h2>5. Data Retention</h2>
        <p>We retain personal information for as long as necessary to fulfil the purposes for which it was collected, to maintain your membership records, and to comply with our legal obligations. Members who cancel their membership may request deletion of their personal data, subject to applicable legal retention requirements.</p>

        <h2>6. Cookies</h2>
        <p>Our website uses session cookies necessary for secure login and basic website functionality. We do not use third-party advertising cookies. Analytics data (if Google Analytics is enabled) is collected in aggregate and does not personally identify you. You may disable cookies in your browser settings, though this may affect some website functionality.</p>

        <h2>7. Security</h2>
        <p>We implement industry-standard security measures including HTTPS encryption, hashed password storage, and access controls to protect your personal information. No method of transmission over the internet is 100% secure; however, we take all reasonable steps to protect your data.</p>

        <h2>8. Your Rights</h2>
        <p>Under PIPEDA, you have the right to:</p>
        <ul class="styled-list">
          <li>Access the personal information we hold about you</li>
          <li>Request correction of inaccurate or incomplete information</li>
          <li>Withdraw consent to certain uses of your data (subject to legal limitations)</li>
          <li>Lodge a complaint with the Office of the Privacy Commissioner of Canada</li>
        </ul>

        <h2>9. Contact</h2>
        <p>To exercise your privacy rights or for any privacy-related questions, please contact our Privacy Officer at:</p>
        <p>
          <strong><?php echo SITE_NAME; ?></strong><br>
          <?php echo OFFICE_ADDRESS; ?><br>
          Email: <a href="mailto:<?php echo OFFICE_EMAIL; ?>" style="color: var(--color-primary);"><?php echo OFFICE_EMAIL; ?></a><br>
          Phone: <?php echo OFFICE_PHONE; ?>
        </p>

        <h2>10. Changes to This Policy</h2>
        <p>We may update this Privacy Policy from time to time. Material changes will be communicated to members via email or a notice on our website. Continued use of our website or membership services after such changes constitutes acceptance of the updated policy.</p>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
