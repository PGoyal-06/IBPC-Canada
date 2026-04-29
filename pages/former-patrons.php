<?php
/**
 * IBPC Canada — Former Patrons
 */
$pageTitle = 'Former Patrons — IBPC Canada';
$pageDescription = 'Honoring the former patrons of IBPC Canada whose contributions laid the foundation for our organization.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Former Patrons';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Former Patrons']];
include __DIR__ . '/../includes/page-header.php';

$formerPatrons = [
  ['name' => 'Mr. Rajan Krishnamurthy', 'role' => 'Founding Patron (2018–2022)', 'company' => 'Krishna Holdings Inc.',    'initials' => 'RK'],
  ['name' => 'Hon. David Mitchell',      'role' => 'Patron (2019–2023)',          'company' => 'Trade Commission Canada',   'initials' => 'DM'],
  ['name' => 'Dr. Anita Desai',          'role' => 'Patron (2020–2024)',          'company' => 'Desai Pharmaceuticals',     'initials' => 'AD'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Legacy</h2>
    <h3 class="section-title">Former Patrons</h3>
    <p>We gratefully acknowledge the former patrons whose leadership and vision helped establish IBPC Canada as a premier bilateral business organization.</p>

    <div class="row">
      <?php foreach ($formerPatrons as $person): ?>
      <div class="col-lg-4 col-md-6">
        <div class="person-card">
          <div class="person-photo">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($person['initials']); ?>&size=150&background=252758&color=fff&font-size=0.4" alt="<?php echo e($person['name']); ?>">
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
