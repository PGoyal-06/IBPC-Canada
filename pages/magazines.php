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

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Publications</h2>
    <h3 class="section-title">Magazines</h3>
    <p>The IBPC Canada Business Review is our flagship quarterly publication featuring member profiles, trade intelligence, event highlights, and thought leadership from Canada's Indian business community.</p>

    <div class="resource-search-bar mt-4">
      <input type="text" placeholder="Search magazines by name…">
      <button class="btn-1 btn-search">Search</button>
    </div>

    <div class="row">
      <?php foreach ($magazines as $mag): ?>
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 resource-card-col">
        <div class="resource-card">
          <div class="resource-thumb">
            <svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
            <span class="resource-type"><?php echo e($mag['issue']); ?></span>
          </div>
          <div class="resource-body">
            <h5><?php echo e($mag['title']); ?></h5>
            <div class="resource-meta"><?php echo e($mag['date']); ?></div>
            <a href="/login" class="btn-1">Download PDF</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <p style="margin-top: 10px; font-size: 13px; color: #888;">
      * Magazines are available to IBPC Canada members.
      <a href="/login" style="color: var(--color-primary); font-weight: 600;">Login</a> or
      <a href="/membership-application" style="color: var(--color-primary); font-weight: 600;">apply for membership</a>.
    </p>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
