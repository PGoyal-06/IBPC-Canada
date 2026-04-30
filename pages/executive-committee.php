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

$committee_groups = [
  'SECRETARY GENERAL' => [
    ['name' => 'Anil Kapoor',   'role' => 'Secretary General',      'company' => 'KapoorTech Solutions',     'initials' => 'AK']
  ],
  'TREASURER' => [
    ['name' => 'Sunita Reddy',  'role' => 'Treasurer',              'company' => 'Reddy Financial Group',    'initials' => 'SR']
  ],
  'EXECUTIVE MEMBER' => [
    ['name' => 'Vikash Agarwal','role' => 'Executive Member',       'company' => 'Agarwal Consulting',       'initials' => 'VA'],
    ['name' => 'Deepa Nair',    'role' => 'Executive Member',       'company' => 'Nair Tech Partners',       'initials' => 'DN']
  ],
  'BOARD MEMBER' => [
    ['name' => 'Karan Malhotra','role' => 'Board Member',           'company' => 'Malhotra Enterprises',     'initials' => 'KM'],
    ['name' => 'Ritu Chauhan',  'role' => 'Board Member',           'company' => 'Chauhan Advisory',         'initials' => 'RC']
  ]
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Leadership</h2>
    <h3 class="section-title">Executive Committee</h3>
    <p>The Executive Committee drives IBPC Canada's operational strategy, program execution, and stakeholder engagement. These dedicated professionals ensure our initiatives deliver maximum value to members.</p>

    <?php foreach ($committee_groups as $group_name => $members): ?>
    <h4 style="font-weight: 700; font-style: italic; margin-top: 40px; margin-bottom: 20px; font-size: 18px; color: var(--color-primary);"><?php echo $group_name; ?></h4>
    <div class="row">
      <?php foreach ($members as $person): ?>
      <div class="col-lg-4 col-md-6">
        <div class="person-card">
          <div class="person-photo">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($person['initials']); ?>&size=150&background=1a1e60&color=fff&font-size=0.4" alt="<?php echo e($person['name']); ?>">
          </div>
          <h5 class="person-name"><?php echo e($person['name']); ?></h5>
          <p class="person-role"><?php echo e($person['role']); ?></p>
          <p class="person-company"><?php echo e($person['company']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
