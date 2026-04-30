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

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Resources</h2>
    <h3 class="section-title">Reports</h3>
    <p>IBPC Canada produces research reports and policy briefs to help members navigate the India-Canada trade landscape. Reports are available to all members after login.</p>

    <div class="resource-search-bar mt-4">
      <input type="text" placeholder="Search reports by name…">
      <button class="btn-1 btn-search">Search</button>
    </div>

    <div class="row">
      <?php foreach ($reports as $report): ?>
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 resource-card-col">
        <div class="resource-card">
          <div class="resource-thumb">
            <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
            <span class="resource-type"><?php echo e($report['type']); ?></span>
          </div>
          <div class="resource-body">
            <h5><?php echo e($report['title']); ?></h5>
            <div class="resource-meta"><?php echo e($report['date']); ?></div>
            <a href="/login" class="btn-1">Download</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <p style="margin-top: 10px; font-size: 13px; color: #888;">
      * Full reports are available to IBPC Canada members.
      <a href="/login" style="color: var(--color-primary); font-weight: 600;">Login</a> or
      <a href="/membership-application" style="color: var(--color-primary); font-weight: 600;">apply for membership</a> to access.
    </p>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
