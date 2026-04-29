<?php
/**
 * IBPC Canada — Magazines
 */
$pageTitle = 'Magazines — IBPC Canada';
$pageDescription = 'Browse and download IBPC Canada\'s quarterly magazine covering trade, business, and professional community news.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Magazines';
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

    <div class="row" style="margin-top: 30px;">
      <?php foreach ($magazines as $mag): ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card" style="border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); overflow: hidden;">
          <div style="height: 200px; background: linear-gradient(160deg, var(--color-primary) 0%, var(--color-accent) 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; padding: 20px; text-align: center;">
            <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.7; margin-bottom: 8px;"><?php echo e($mag['issue']); ?></div>
            <div style="font-size: 16px; font-weight: 700; line-height: 1.3;"><?php echo e($mag['title']); ?></div>
          </div>
          <div style="padding: 16px; display: flex; align-items: center; justify-content: space-between;">
            <span style="font-size: 12px; color: #888;"><?php echo e($mag['date']); ?></span>
            <a href="/login" style="color: var(--color-primary); font-size: 12px; font-weight: 600;">Download PDF →</a>
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
