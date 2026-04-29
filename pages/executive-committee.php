<?php
/**
 * IBPC Canada — Executive Committee
 */
$pageTitle = 'Executive Committee — IBPC Canada';
$pageDescription = 'Meet the Executive Committee of IBPC Canada responsible for day-to-day operations and strategic execution.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Executive Committee';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Executive Committee']];
include __DIR__ . '/../includes/page-header.php';

$committee = [
  ['name' => 'Vikash Agarwal',   'role' => 'President',            'company' => 'Agarwal Consulting',       'initials' => 'VA'],
  ['name' => 'Deepa Nair',       'role' => 'Executive VP',          'company' => 'Nair Tech Partners',       'initials' => 'DN'],
  ['name' => 'Karan Malhotra',   'role' => 'VP – Operations',       'company' => 'Malhotra Enterprises',     'initials' => 'KM'],
  ['name' => 'Ritu Chauhan',     'role' => 'VP – Programs',         'company' => 'Chauhan Advisory',         'initials' => 'RC'],
  ['name' => 'Amit Deshmukh',    'role' => 'VP – Partnerships',     'company' => 'Deshmukh Global',          'initials' => 'AD'],
  ['name' => 'Pooja Iyer',       'role' => 'VP – Public Relations', 'company' => 'Iyer Communications',      'initials' => 'PI'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Leadership</h2>
    <h3 class="section-title">Executive Committee</h3>
    <p>The Executive Committee drives IBPC Canada's operational strategy, program execution, and stakeholder engagement. These dedicated professionals ensure our initiatives deliver maximum value to members.</p>

    <div class="row">
      <?php foreach ($committee as $person): ?>
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
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
