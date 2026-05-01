<?php
/**
 * IBPC Canada — Diamond Members
 */
$pageTitle = 'Diamond Members — IBPC Canada';
$pageDescription = 'Meet the Diamond Members of IBPC Canada — our premier tier of corporate sponsors and industry leaders driving India-Canada trade.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Diamond Members';
$pageHeaderIcon  = 'users';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/membership-categories'], ['label' => 'Diamond Members']];
include __DIR__ . '/../includes/page-header.php';

?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Premium Membership</h2>
    <h3 class="section-title">Diamond Members</h3>
    <p>Diamond Members represent IBPC Canada's most prestigious membership tier. These organizations are industry leaders who champion India-Canada bilateral trade at the highest level and receive maximum visibility across all IBPC Canada platforms and events.</p>

    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The list of Diamond Members will be updated soon.</p>
    </div>

    <div style="text-align: center; margin-top: 30px;">
      <p style="color: #666; margin-bottom: 15px;">Interested in Diamond Membership?</p>
      <a href="/membership-application" class="btn-1">Apply for Diamond Membership</a>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
