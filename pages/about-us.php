<?php
/**
 * IBPC Canada — About Us
 */
$pageTitle = 'About Us — IBPC Canada';
$pageDescription = 'Learn about the India Business & Professional Council Canada, our mission, vision, and commitment to India-Canada bilateral trade.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'About Us';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us']];
include __DIR__ . '/../includes/page-header.php';
?>

<!-- About Intro (same dark red band as homepage) -->
<section class="sec-about">
  <div class="container">
    <p>The India Business &amp; Professional Council (IBPC) Canada is a premier member-based business association representing Indian businessmen and professionals across Canada. We serve as a trusted facilitator for India-Canada bilateral trade and economic relationships.</p>

    <p>Established to strengthen the growing economic partnership between India and Canada, IBPC Canada provides a dynamic platform for networking, business matchmaking, trade facilitation, and knowledge exchange. Our members include industry leaders, entrepreneurs, executives, and professionals spanning diverse sectors.</p>

    <p>Through strategic initiatives, high-impact events, and thought leadership, IBPC Canada actively promotes cross-border investment, innovation, and collaboration — contributing to the prosperity of both nations and the Indian diaspora in Canada.</p>
  </div>
</section>

<!-- Mission, Vision, Values -->
<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <h2 class="section-label">Our Purpose</h2>
        <h3 class="section-title">Mission &amp; Vision</h3>

        <h2>Our Mission</h2>
        <p>To serve as a premier platform connecting Indian business professionals in Canada with opportunities for bilateral trade, investment, and collaboration. IBPC Canada facilitates meaningful partnerships that contribute to economic growth in both India and Canada.</p>

        <h2>Our Vision</h2>
        <p>To be the most trusted and influential India-Canada business council, recognized for fostering innovation, driving cross-border investments, and building lasting professional relationships that benefit both nations.</p>

        <h2>Our Values</h2>
        <div class="row justify-content-center mt-4 mb-2">
          <div class="col-sm-6 col-md-4 mb-4">
            <div class="value-card">
              <div class="value-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <h5>Integrity</h5>
              <p>We uphold the highest standards of ethics and transparency in all our dealings.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4">
            <div class="value-card">
              <div class="value-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
              </div>
              <h5>Collaboration</h5>
              <p>We believe in the power of partnerships and collective action.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4">
            <div class="value-card">
              <div class="value-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <h5>Excellence</h5>
              <p>We strive for quality in every initiative, event, and member interaction.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4">
            <div class="value-card">
              <div class="value-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
              </div>
              <h5>Inclusivity</h5>
              <p>We welcome professionals from all industries and backgrounds.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4">
            <div class="value-card">
              <div class="value-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
              </div>
              <h5>Impact</h5>
              <p>We measure our success by the tangible value we create for members and communities.</p>
            </div>
          </div>
        </div>

        <h2>What We Do</h2>
        <ul class="styled-list">
          <li>Organize trade missions, conferences, and networking events</li>
          <li>Facilitate business matchmaking between Indian and Canadian companies</li>
          <li>Provide market intelligence, reports, and legislative updates</li>
          <li>Advocate for policies that strengthen India-Canada economic ties</li>
          <li>Support the Indian diaspora professional community in Canada</li>
        </ul>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
