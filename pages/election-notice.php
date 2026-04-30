<?php
/**
 * IBPC Canada — Election Notice
 */
$pageTitle = 'Election Notice — IBPC Canada';
$pageDescription = 'Official IBPC Canada election notice announcing the schedule, eligibility criteria, and nomination process for the upcoming election.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Election Notice';
$pageHeaderIcon  = 'megaphone';
$breadcrumbs = [['label' => 'Elections', 'url' => '/elections'], ['label' => 'Election Notice']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>IBPC Canada election notices will be added once the official Canadian election materials are finalized.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
