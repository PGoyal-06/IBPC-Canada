<?php
/**
 * IBPC Canada — Corporate Members
 */
$pageTitle = 'Corporate Members — IBPC Canada';
$pageDescription = 'Meet the Corporate Members of IBPC Canada — companies and SMEs driving India-Canada trade and investment.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Corporate Members';
$pageHeaderIcon  = 'users';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/membership-categories'], ['label' => 'Corporate Members']];
include __DIR__ . '/../includes/page-header.php';

?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Corporate Membership</h2>
    <h3 class="section-title">Corporate Members</h3>
    <p>IBPC Canada's Corporate Members are companies and enterprises that are active contributors to India-Canada trade. They benefit from networking events, business matchmaking services, trade facilitation, and access to IBPC Canada's extensive professional network.</p>

    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The list of Corporate Members will be updated soon.</p>
    </div>

    <div style="text-align: center; margin-top: 30px;">
      <p style="color: #666; margin-bottom: 15px;">Interested in Corporate Membership?</p>
      <a href="/membership-application" class="btn-1">Apply for Corporate Membership</a>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
