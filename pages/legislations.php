<?php
/**
 * IBPC Canada — Legislations
 */
$pageTitle = 'Legislations — IBPC Canada';
$pageDescription = 'Browse key Canadian and Indian trade legislations, regulations, and policy documents relevant to India-Canada bilateral trade.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Legislations';
$pageHeaderIcon  = 'file';
$breadcrumbs = [['label' => 'Reports & Legislations'], ['label' => 'Legislations']];
include __DIR__ . '/../includes/page-header.php';

$legislations = [
    ['title' => 'Canada-India Foreign Investment Promotion and Protection Agreement (FIPA)', 'date' => '2024', 'category' => 'Investment'],
    ['title' => 'CECA Draft Framework — Goods, Services & Investment Chapters',              'date' => '2024', 'category' => 'Trade Agreement'],
    ['title' => 'Immigration and Refugee Protection Act — Business Immigration Pathways',    'date' => '2023', 'category' => 'Immigration'],
    ['title' => 'Canadian Anti-Spam Legislation (CASL) — Business Compliance Guide',        'date' => '2023', 'category' => 'Compliance'],
    ['title' => 'Competition Act Amendments — Impact on Indo-Canadian M&A Transactions',    'date' => '2023', 'category' => 'Corporate Law'],
    ['title' => 'Income Tax Act — Tax Treaties: India-Canada Double Taxation Agreement',    'date' => '2022', 'category' => 'Tax'],
    ['title' => 'Export and Import Permits Act — Key Provisions for India Trade',           'date' => '2022', 'category' => 'Trade Law'],
    ['title' => 'Special Economic Measures Act — Current Canada-India Implications',        'date' => '2022', 'category' => 'Trade Policy'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Regulatory</h2>
    <h3 class="section-title">Legislations</h3>
    <p>A curated collection of Canadian and Indian legislative documents relevant to bilateral trade, investment, and business operations. IBPC Canada provides these resources to help members stay informed of the regulatory landscape.</p>

    <div class="resource-search-bar mt-4">
      <input type="text" placeholder="Search legislations by name…">
      <button class="btn-1 btn-search">Search</button>
    </div>

    <div class="row">
      <?php foreach ($legislations as $leg): ?>
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 resource-card-col">
        <div class="resource-card">
          <div class="resource-thumb">
            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="11" y2="17"/></svg>
            <span class="resource-type"><?php echo e($leg['category']); ?></span>
          </div>
          <div class="resource-body">
            <h5><?php echo e($leg['title']); ?></h5>
            <div class="resource-meta"><?php echo e($leg['date']); ?></div>
            <a href="/login" class="btn-1">View Document</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <p style="margin-top: 10px; font-size: 13px; color: #888;">
      * Full documents are available to IBPC Canada members.
      <a href="/login" style="color: var(--color-primary); font-weight: 600;">Login</a> or
      <a href="/membership-application" style="color: var(--color-primary); font-weight: 600;">apply for membership</a>.
    </p>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
