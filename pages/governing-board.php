<?php
/**
 * IBPC Canada — Governing Board
 */
$pageTitle = 'Governing Board — IBPC Canada';
$pageDescription = 'Meet the Governing Board members who provide strategic direction to IBPC Canada.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Governing Board';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Governing Board']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'The Governing Board provides strategic oversight and direction for IBPC Canada’s programs, partnerships, and member initiatives.';
include __DIR__ . '/../includes/page-tagline.php';

?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Governance</h2>
    <h3 class="section-title">IBPC CANADA GOVERNING BOARD</h3>
    <p>The Governing Board provides strategic direction and oversight to IBPC Canada's operations, events, and member services. Our board comprises accomplished leaders from diverse industries who are committed to advancing India-Canada business ties.</p>

    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The list of Governing Board members will be updated soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
