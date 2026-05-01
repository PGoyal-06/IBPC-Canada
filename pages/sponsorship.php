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
      <div class="col-lg-10 offset-lg-1 text-center">
        <h3 class="section-title">SPONSORSHIP</h3>
        <p style="font-size: 16px; margin-bottom: 50px;">IBPC Canada is grateful to its generous sponsors for their continued support and welcomes new sponsors.</p>

        <!-- Sponsor Board Composition -->
        <div class="coming-soon-card">
          <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <h2>Coming Soon</h2>
          <p>The list of IBPC Canada sponsors will be updated soon.</p>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
