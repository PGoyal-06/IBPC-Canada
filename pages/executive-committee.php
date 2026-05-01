<?php
/**
 * IBPC Canada — Executive Committee
 */
$pageTitle = 'Executive Committee — IBPC Canada';
$pageDescription = 'Meet the Executive Committee of IBPC Canada responsible for day-to-day operations and strategic execution.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Executive Committee';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Executive Committee']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'The Executive Committee supports day-to-day leadership, execution, and coordination across IBPC Canada initiatives.';
include __DIR__ . '/../includes/page-tagline.php';

?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Leadership</h2>
    <h3 class="section-title">Executive Committee</h3>
    <p>The Executive Committee drives IBPC Canada's operational strategy, program execution, and stakeholder engagement. These dedicated professionals ensure our initiatives deliver maximum value to members.</p>

    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The list of Executive Committee members will be updated soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
