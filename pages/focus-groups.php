<?php
/**
 * IBPC Canada — Focus Groups & Forums
 */
$pageTitle = 'Focus Groups & Forums — IBPC Canada';
$pageDescription = 'Explore IBPC Canada\'s specialized focus groups and industry forums driving sector-specific bilateral trade initiatives.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Focus Groups & Forums';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Focus Groups & Forums']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'IBPC Canada focus groups and forums bring members together around shared sectors, industries, and business priorities.';
include __DIR__ . '/../includes/page-tagline.php';

?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Focus Groups</h2>
    <h3 class="section-title">Focus Groups & Forums</h3>
    <p>IBPC Canada operates specialized focus groups and forums that bring together industry leaders to address sector-specific opportunities and challenges in India-Canada trade. Each group is led by experienced professionals and meets regularly to develop actionable strategies.</p>

    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The list of Focus Group & Forum conveners will be updated soon.</p>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
