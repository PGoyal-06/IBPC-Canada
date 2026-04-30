<?php
/**
 * IBPC Canada — Magazines
 */
$pageTitle = 'Magazines — IBPC Canada';
$pageDescription = 'Browse and download IBPC Canada\'s quarterly magazine covering trade, business, and professional community news.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Magazines';
$pageHeaderIcon  = 'file';
$breadcrumbs = [['label' => 'Reports & Legislations'], ['label' => 'Magazines']];
include __DIR__ . '/../includes/page-header.php';

$magazines = [
    ['title' => 'IBPC Canada Business Review — Spring 2026',    'date' => 'April 2026',     'issue' => 'Vol. 3, Issue 1'],
    ['title' => 'IBPC Canada Business Review — Winter 2025',    'date' => 'December 2025',  'issue' => 'Vol. 2, Issue 4'],
    ['title' => 'IBPC Canada Business Review — Fall 2025',      'date' => 'September 2025', 'issue' => 'Vol. 2, Issue 3'],
    ['title' => 'IBPC Canada Business Review — Summer 2025',    'date' => 'June 2025',      'issue' => 'Vol. 2, Issue 2'],
    ['title' => 'IBPC Canada Business Review — Spring 2025',    'date' => 'March 2025',     'issue' => 'Vol. 2, Issue 1'],
    ['title' => 'IBPC Canada Business Review — Annual 2024',    'date' => 'December 2024',  'issue' => 'Vol. 1, Issue 4'],
];
?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>IBPC Canada magazines and publications will be added soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
