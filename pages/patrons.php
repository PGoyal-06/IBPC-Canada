<?php
/**
 * IBPC Canada — Patrons
 */
$pageTitle = 'Patrons — IBPC Canada';
$pageDescription = 'Meet the distinguished patrons of IBPC Canada who guide our mission of strengthening India-Canada business relationships.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Patrons';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Patrons']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'IBPC Canada is guided by respected community and business leaders who support its mission to strengthen India-Canada economic ties.';
include __DIR__ . '/../includes/page-tagline.php';

// Placeholder patron data — in production this comes from the DB
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Leadership</h2>
    <h3 class="section-title">IBPC CANADA PATRONS</h3>
    <p>IBPC Canada is proud to be guided by distinguished leaders from government, industry, and the diplomatic community who share our vision of strengthening India-Canada economic relations.</p>

    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The list of IBPC Canada Patrons will be updated soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
