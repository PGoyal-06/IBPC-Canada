<?php
/**
 * IBPC Canada — AGM Minutes
 */
$pageTitle = 'AGM Minutes — IBPC Canada';
$pageDescription = 'Access Annual General Meeting minutes from IBPC Canada, organized by year.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'AGM Minutes';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'AGM Minutes']];
include __DIR__ . '/../includes/page-header.php';

$docIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>';

$minutes = [
  ['year' => '2025', 'date' => 'December 15, 2025', 'title' => 'Annual General Meeting 2025'],
  ['year' => '2024', 'date' => 'December 12, 2024', 'title' => 'Annual General Meeting 2024'],
  ['year' => '2023', 'date' => 'December 10, 2023', 'title' => 'Annual General Meeting 2023'],
  ['year' => '2022', 'date' => 'December 8, 2022',  'title' => 'Annual General Meeting 2022'],
  ['year' => '2021', 'date' => 'December 14, 2021', 'title' => 'Annual General Meeting 2021 (Virtual)'],
];
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <h2 class="section-label">Records</h2>
        <h3 class="section-title">AGM Minutes</h3>
        <p>Minutes from IBPC Canada's Annual General Meetings are made available to members for transparency and reference. Select a year below to download the corresponding document.</p>

        <div style="margin-top: 30px;">
          <?php foreach ($minutes as $m): ?>
          <div class="doc-list-item">
            <div class="doc-icon"><?php echo $docIcon; ?></div>
            <div class="doc-info">
              <div class="doc-title"><?php echo e($m['title']); ?></div>
              <div class="doc-meta">PDF Document • <?php echo e($m['date']); ?></div>
            </div>
            <div class="doc-action"><a href="#">Download</a></div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
