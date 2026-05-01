<?php
/**
 * IBPC Canada — Committee Members
 */
$pageTitle = 'Committee Members — IBPC Canada';
$pageDescription = 'View the committee members supporting IBPC Canada\'s initiatives across various working groups.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Committee Members';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Committee Members']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'Committee members support specialized initiatives, member engagement, events, and organizational development.';
include __DIR__ . '/../includes/page-tagline.php';

?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Teams</h2>
    <h3 class="section-title">Committee Boards</h3>
    <p>Our dedicated committee members volunteer their time and expertise across various working groups, ensuring IBPC Canada's programs and initiatives are executed with excellence.</p>

    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The list of Committee Boards will be updated soon.</p>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
