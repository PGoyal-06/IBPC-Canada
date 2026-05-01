<?php
/**
 * IBPC Canada — Former Patrons
 */
$pageTitle = 'Former Patrons — IBPC Canada';
$pageDescription = 'Honoring the former patrons of IBPC Canada whose contributions laid the foundation for our organization.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Former Patrons';
$pageHeaderIcon  = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Former Patrons']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'IBPC Canada honours the former patrons whose generous support and guidance helped establish and grow the organization.';
include __DIR__ . '/../includes/page-tagline.php';

?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Legacy</h2>
    <h3 class="section-title">Former Patrons</h3>
    <p>We gratefully acknowledge the former patrons whose leadership and vision helped establish IBPC Canada as a premier bilateral business organization.</p>

    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The list of Former Patrons will be updated soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
