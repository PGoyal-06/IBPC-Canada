<?php
/**
 * IBPC Canada — Governing Board
 */
$pageTitle = 'Governing Board — IBPC Canada';
$pageDescription = 'Meet the Governing Board members who provide strategic direction to IBPC Canada.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Governing Board';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Governing Board']];
include __DIR__ . '/../includes/page-header.php';

$board = [
  ['name' => 'Rajiv Mehta',        'role' => 'Chairman',              'company' => 'Mehta Industries Canada',  'initials' => 'RM'],
  ['name' => 'Priya Sharma',       'role' => 'Vice Chairperson',      'company' => 'Sharma Ventures Inc.',     'initials' => 'PS'],
  ['name' => 'Anil Kapoor',        'role' => 'Secretary General',      'company' => 'KapoorTech Solutions',     'initials' => 'AK'],
  ['name' => 'Sunita Reddy',       'role' => 'Treasurer',              'company' => 'Reddy Financial Group',    'initials' => 'SR'],
  ['name' => 'Arjun Singh',        'role' => 'Director – Trade',       'company' => 'Singh Exports Ltd.',       'initials' => 'AS'],
  ['name' => 'Meera Joshi',        'role' => 'Director – Membership',  'company' => 'Joshi & Associates',       'initials' => 'MJ'],
  ['name' => 'Rakesh Gupta',       'role' => 'Director – Events',      'company' => 'Gupta Group Canada',       'initials' => 'RG'],
  ['name' => 'Nisha Banerjee',     'role' => 'Director – Communications','company' => 'Banerjee Media Corp.',   'initials' => 'NB'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Governance</h2>
    <h3 class="section-title">Governing Board</h3>
    <p>The Governing Board provides strategic direction and oversight to IBPC Canada's operations, events, and member services. Our board comprises accomplished leaders from diverse industries who are committed to advancing India-Canada business ties.</p>

    <div class="row">
      <?php foreach ($board as $person): ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="person-card">
          <div class="person-photo">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($person['initials']); ?>&size=150&background=1F3D8C&color=fff&font-size=0.4" alt="<?php echo e($person['name']); ?>">
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
