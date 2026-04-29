<?php
/**
 * IBPC Canada — Diamond Members
 */
$pageTitle = 'Diamond Members — IBPC Canada';
$pageDescription = 'Meet the Diamond Members of IBPC Canada — our premier tier of corporate sponsors and industry leaders driving India-Canada trade.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Diamond Members';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/be-a-member'], ['label' => 'Diamond Members']];
include __DIR__ . '/../includes/page-header.php';

$members = [
    ['name' => 'Mehta Global Consulting',    'rep' => 'Rajiv Mehta',     'sector' => 'Business Consulting',   'initials' => 'MG'],
    ['name' => 'Sharma Wealth Management',   'rep' => 'Priya Sharma',    'sector' => 'Financial Services',    'initials' => 'SW'],
    ['name' => 'Kapoor Law Professional',    'rep' => 'Anil Kapoor',     'sector' => 'Legal Services',        'initials' => 'KL'],
    ['name' => 'Patel Technology Inc.',      'rep' => 'Kiran Patel',     'sector' => 'Information Technology','initials' => 'PT'],
    ['name' => 'Desai Clean Energy',         'rep' => 'Mehul Desai',     'sector' => 'Clean Energy',          'initials' => 'DC'],
    ['name' => 'Iyer Healthcare Group',      'rep' => 'Nisha Iyer',      'sector' => 'Healthcare',            'initials' => 'IH'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Premium Membership</h2>
    <h3 class="section-title">Diamond Members</h3>
    <p>Diamond Members represent IBPC Canada's most prestigious membership tier. These organizations are industry leaders who champion India-Canada bilateral trade at the highest level and receive maximum visibility across all IBPC Canada platforms and events.</p>

    <div class="row" style="margin-top: 30px;">
      <?php foreach ($members as $m): ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card featured" style="border-color: #F39200;">
          <div class="person-photo" style="border-color: #F39200;">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($m['initials']); ?>&size=150&background=F39200&color=fff&font-size=0.35" alt="<?php echo e($m['name']); ?>">
          </div>
          <h5 class="person-name"><?php echo e($m['name']); ?></h5>
          <p class="person-role"><?php echo e($m['rep']); ?></p>
          <p class="person-company"><?php echo e($m['sector']); ?></p>
          <p style="margin-top: 10px;"><span style="background: #fff3e0; color: #F39200; font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 3px; text-transform: uppercase;">💎 Diamond</span></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 30px;">
      <p style="color: #666; margin-bottom: 15px;">Interested in Diamond Membership?</p>
      <a href="/membership-application" class="btn-1">Apply for Diamond Membership</a>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
