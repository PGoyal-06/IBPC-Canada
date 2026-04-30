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

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>IBPC Canada legislations and regulatory resources will be added soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
