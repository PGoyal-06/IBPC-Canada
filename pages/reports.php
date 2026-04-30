<?php
/**
 * IBPC Canada — Reports
 */
$pageTitle = 'Reports — IBPC Canada';
$pageDescription = 'Access IBPC Canada\'s research reports, trade analysis documents, and economic briefs on India-Canada bilateral trade.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Reports';
$pageHeaderIcon = 'file';
$breadcrumbs = [['label' => 'Reports & Legislations'], ['label' => 'Reports']];
include __DIR__ . '/../includes/page-header.php';

$reports = [
    ['title' => 'India-Canada Trade Report 2025 — Annual Review',          'date' => 'December 2025', 'type' => 'Annual Report'],
    ['title' => 'CECA Impact Assessment: Opportunities for Canadian SMEs',   'date' => 'October 2025',  'type' => 'Policy Brief'],
    ['title' => 'Indian Diaspora in Canada: Economic Contribution Study',    'date' => 'August 2025',   'type' => 'Research Report'],
    ['title' => 'Technology Sector Bilateral Investment White Paper',         'date' => 'June 2025',     'type' => 'White Paper'],
    ['title' => 'Clean Energy Partnership: India-Canada Opportunities 2025', 'date' => 'April 2025',    'type' => 'Sector Report'],
    ['title' => 'India-Canada Trade Report 2024 — Annual Review',            'date' => 'December 2024', 'type' => 'Annual Report'],
    ['title' => 'Financial Services Corridor: Fintech Collaboration Report', 'date' => 'September 2024','type' => 'Sector Report'],
    ['title' => 'Healthcare & Pharma Cross-Border Investment Analysis',      'date' => 'July 2024',     'type' => 'Research Report'],
];
?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>IBPC Canada reports will be added once official documents are available.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
