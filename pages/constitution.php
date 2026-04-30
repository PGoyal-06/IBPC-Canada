<?php
/**
 * IBPC Canada — Constitution & Articles of Association
 */
$pageTitle = 'Constitution & Articles of Association — IBPC Canada';
$pageDescription = 'Access the official Constitution and Articles of Association governing IBPC Canada.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Constitution & Articles';
$pageHeaderIcon  = 'file';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Constitution & Articles']];
include __DIR__ . '/../includes/page-header.php';

?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The IBPC Canada Constitution &amp; Articles of Association will be added once the official Canadian document is finalized.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
