<?php
/**
 * IBPC Canada — Patrons
 */
$pageTitle = 'Patrons — IBPC Canada';
$pageDescription = 'Meet the distinguished patrons of IBPC Canada who guide our mission of strengthening India-Canada business relationships.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Patrons';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Patrons']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'IBPC Canada is guided by respected community and business leaders who support its mission to strengthen India-Canada economic ties.';
include __DIR__ . '/../includes/page-tagline.php';

// Placeholder patron data — in production this comes from the DB
$patrons = [
  ['name' => 'Dr. Vikram Rao',      'role' => 'Chief Patron',   'company' => 'Rao Global Industries',       'initials' => 'VR'],
  ['name' => 'Hon. Margaret Chen',   'role' => 'Patron',         'company' => 'Government of Ontario',        'initials' => 'MC'],
  ['name' => 'Mr. Suresh Patel',     'role' => 'Patron',         'company' => 'Patel Capital Partners',       'initials' => 'SP'],
  ['name' => 'Ms. Catherine Dubois', 'role' => 'Patron',         'company' => 'Canada-India Chamber Alliance','initials' => 'CD'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Leadership</h2>
    <h3 class="section-title">IBPC CANADA PATRONS</h3>
    <p>IBPC Canada is proud to be guided by distinguished leaders from government, industry, and the diplomatic community who share our vision of strengthening India-Canada economic relations.</p>

    <div class="row">
      <?php foreach ($patrons as $patron): ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="person-card featured">
          <div class="person-photo">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($patron['initials']); ?>&size=150&background=1F3D8C&color=fff&font-size=0.4" alt="<?php echo e($patron['name']); ?>">
          </div>
          <h5 class="person-name"><?php echo e($patron['name']); ?></h5>
          <p class="person-role"><?php echo e($patron['role']); ?></p>
          <p class="person-company"><?php echo e($patron['company']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
