<?php
/**
 * IBPC Canada — Constitution & Articles of Association
 */
$pageTitle = 'Constitution & Articles of Association — IBPC Canada';
$pageDescription = 'Access the official Constitution and Articles of Association governing IBPC Canada.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Constitution & Articles';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Constitution & Articles']];
include __DIR__ . '/../includes/page-header.php';

// SVG icon for document
$docIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <h2 class="section-label">Governance</h2>
        <h3 class="section-title">Constitution &amp; Articles of Association</h3>
        <p>The Constitution and Articles of Association define the governance framework, objectives, membership structure, and operating procedures of IBPC Canada. These documents are available for download below.</p>

        <div style="margin-top: 30px;">
          <div class="doc-list-item">
            <div class="doc-icon"><?php echo $docIcon; ?></div>
            <div class="doc-info">
              <div class="doc-title">IBPC Canada Constitution</div>
              <div class="doc-meta">PDF Document • Last updated: January 2026</div>
            </div>
            <div class="doc-action"><a href="#">Download</a></div>
          </div>

          <div class="doc-list-item">
            <div class="doc-icon"><?php echo $docIcon; ?></div>
            <div class="doc-info">
              <div class="doc-title">Articles of Association</div>
              <div class="doc-meta">PDF Document • Last updated: January 2026</div>
            </div>
            <div class="doc-action"><a href="#">Download</a></div>
          </div>

          <div class="doc-list-item">
            <div class="doc-icon"><?php echo $docIcon; ?></div>
            <div class="doc-info">
              <div class="doc-title">Code of Conduct for Members</div>
              <div class="doc-meta">PDF Document • Last updated: March 2025</div>
            </div>
            <div class="doc-action"><a href="#">Download</a></div>
          </div>

          <div class="doc-list-item">
            <div class="doc-icon"><?php echo $docIcon; ?></div>
            <div class="doc-info">
              <div class="doc-title">Election By-Laws</div>
              <div class="doc-meta">PDF Document • Last updated: September 2025</div>
            </div>
            <div class="doc-action"><a href="#">Download</a></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
