<?php
/**
 * IBPC Canada — Voter Guidelines
 */
$pageTitle = 'Voter Guidelines — IBPC Canada';
$pageDescription = 'IBPC Canada voter guidelines — eligibility requirements, the voting process, and how to cast your ballot in the Governing Board election.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Voter Guidelines';
$pageHeaderIcon  = 'info';
$breadcrumbs = [['label' => 'Elections', 'url' => '/elections'], ['label' => 'Voter Guidelines']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>IBPC Canada voter guidelines will be added once the official election process is finalized.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
