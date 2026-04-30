<?php
/**
 * IBPC Canada — Sponsorship
 */
$pageTitle = 'Sponsorship — IBPC Canada';
$pageDescription = 'Explore sponsorship opportunities with IBPC Canada and gain visibility among top India-Canada business professionals.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Sponsorship';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Sponsorship']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'Sponsorship opportunities help partners connect with the IBPC Canada network and support high-impact business programming.';
include __DIR__ . '/../includes/page-tagline.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <h2 class="section-label">Partner With Us</h2>
        <h3 class="section-title">Sponsorship Opportunities</h3>

        <p>IBPC Canada offers multiple sponsorship tiers for organizations looking to connect with the India-Canada business community. Our events and initiatives provide high-visibility platforms for brand exposure, networking, and thought leadership.</p>

        <h2>Why Sponsor IBPC Canada?</h2>
        <ul class="styled-list">
          <li>Direct access to 500+ Indian and Canadian business professionals</li>
          <li>Brand visibility at flagship events, conferences, and galas</li>
          <li>Logo placement on website, newsletters, and promotional materials</li>
          <li>Speaking opportunities at industry panels and summits</li>
          <li>Exclusive networking sessions with government and trade leaders</li>
        </ul>

        <h2>Sponsorship Tiers</h2>
        <div class="row" style="margin-top: 20px;">
          <div class="col-md-4">
            <div class="person-card" style="border-color: #d4af37; border-width: 2px;">
              <div style="font-size: 36px; margin-bottom: 10px;">🥇</div>
              <h5 class="person-name">Platinum Sponsor</h5>
              <p class="person-role">$25,000 / Year</p>
              <p class="person-bio">Premium logo placement, keynote speaking slots, VIP event access, and dedicated newsletter feature.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="person-card" style="border-color: #c0c0c0; border-width: 2px;">
              <div style="font-size: 36px; margin-bottom: 10px;">🥈</div>
              <h5 class="person-name">Gold Sponsor</h5>
              <p class="person-role">$15,000 / Year</p>
              <p class="person-bio">Logo on event materials, panel participation, priority seating, and social media mentions.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="person-card" style="border-color: #cd7f32; border-width: 2px;">
              <div style="font-size: 36px; margin-bottom: 10px;">🥉</div>
              <h5 class="person-name">Silver Sponsor</h5>
              <p class="person-role">$7,500 / Year</p>
              <p class="person-bio">Logo on website, event brochures, complimentary member passes, and newsletter listing.</p>
            </div>
          </div>
        </div>

        <div style="margin-top: 40px; text-align: center;">
          <p>Interested in becoming a sponsor? Contact us to discuss a customized partnership.</p>
          <a href="/contact" class="btn-1">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
