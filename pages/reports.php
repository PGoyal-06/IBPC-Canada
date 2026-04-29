<?php
/**
 * IBPC Canada — Reports
 */
$pageTitle = 'Reports — IBPC Canada';
$pageDescription = 'Access IBPC Canada\'s research reports, trade analysis documents, and economic briefs on India-Canada bilateral trade.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Reports';
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

    <div style="margin-top: 30px;">
      <?php foreach ($reports as $report): ?>
      <div class="doc-list-item">
        <div class="doc-icon">
          <svg viewBox="0 0 24 24" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        </div>
        <div class="doc-info">
          <div class="doc-title"><?php echo e($report['title']); ?></div>
          <div class="doc-meta"><?php echo e($report['type']); ?> &nbsp;·&nbsp; <?php echo e($report['date']); ?></div>
        </div>
        <div class="doc-action">
          <a href="/login" title="Login to download">
            <svg viewBox="0 0 24 24" width="18" height="18" stroke="var(--color-primary)" fill="none" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <p style="margin-top: 25px; font-size: 13px; color: #888;">
      * Full reports are available to IBPC Canada members.
      <a href="/login" style="color: var(--color-primary); font-weight: 600;">Login</a> or
      <a href="/membership-application" style="color: var(--color-primary); font-weight: 600;">apply for membership</a> to access.
    </p>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
