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
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/be-a-member'], ['label' => 'Corporate Members']];
include __DIR__ . '/../includes/page-header.php';

$members = [
    ['name' => 'Bose Financial Advisory',    'rep' => 'Sunita Bose',     'sector' => 'Finance & Investment',  'initials' => 'BF'],
    ['name' => 'Singh Capital Partners',     'rep' => 'Vikram Singh',    'sector' => 'Private Equity',        'initials' => 'SC'],
    ['name' => 'Gupta Real Estate Group',    'rep' => 'Sanjay Gupta',    'sector' => 'Real Estate',           'initials' => 'GR'],
    ['name' => 'Verma Tech Solutions',       'rep' => 'Rahul Verma',     'sector' => 'Software Development',  'initials' => 'VT'],
    ['name' => 'Reddy Pharma Canada',        'rep' => 'Dr. Aruna Reddy', 'sector' => 'Pharmaceuticals',       'initials' => 'RP'],
    ['name' => 'Kumar Logistics Ltd.',       'rep' => 'Ramesh Kumar',    'sector' => 'Supply Chain',          'initials' => 'KL'],
    ['name' => 'Malhotra Education Hub',     'rep' => 'Seema Malhotra',  'sector' => 'Education & Training',  'initials' => 'ME'],
    ['name' => 'Jain Construction Inc.',     'rep' => 'Ashok Jain',      'sector' => 'Construction',          'initials' => 'JC'],
    ['name' => 'Choudhary Foods Canada',     'rep' => 'Ritu Choudhary',  'sector' => 'Food & Beverage',       'initials' => 'CF'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Corporate Membership</h2>
    <h3 class="section-title">Corporate Members</h3>
    <p>IBPC Canada's Corporate Members are companies and enterprises that are active contributors to India-Canada trade. They benefit from networking events, business matchmaking services, trade facilitation, and access to IBPC Canada's extensive professional network.</p>

    <div class="row" style="margin-top: 30px;">
      <?php foreach ($members as $m): ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="person-card">
          <div class="person-photo">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($m['initials']); ?>&size=150&background=1F3D8C&color=fff&font-size=0.4" alt="<?php echo e($m['name']); ?>">
          </div>
          <h5 class="person-name"><?php echo e($m['name']); ?></h5>
          <p class="person-role"><?php echo e($m['rep']); ?></p>
          <p class="person-company"><?php echo e($m['sector']); ?></p>
          <p style="margin-top: 8px;"><span style="background: var(--color-bg-light); color: var(--color-primary); font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 3px; text-transform: uppercase;">🏢 Corporate</span></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 30px;">
      <p style="color: #666; margin-bottom: 15px;">Interested in Corporate Membership?</p>
      <a href="/membership-application" class="btn-1">Apply for Corporate Membership</a>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
