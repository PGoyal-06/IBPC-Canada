<?php
/**
 * IBPC Canada — AGM Minutes
 */
$pageTitle = 'AGM Minutes — IBPC Canada';
$pageDescription = 'Access Annual General Meeting minutes from IBPC Canada, organized by year.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'AGM Minutes';
$pageHeaderIcon  = 'file';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'AGM Minutes']];
include __DIR__ . '/../includes/page-header.php';

?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>IBPC Canada AGM materials and minutes will be added once the official documents are available.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
