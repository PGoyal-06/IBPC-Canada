<?php
/**
 * IBPC Canada — Committee Members
 */
$pageTitle = 'Committee Members — IBPC Canada';
$pageDescription = 'View the committee members supporting IBPC Canada\'s initiatives across various working groups.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Committee Members';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Committee Members']];
include __DIR__ . '/../includes/page-header.php';

$members = [
  ['name' => 'Sanjay Verma',    'role' => 'Membership Committee',  'initials' => 'SV'],
  ['name' => 'Anisha Kaur',     'role' => 'Events Committee',      'initials' => 'AK'],
  ['name' => 'Rohit Menon',     'role' => 'Finance Committee',     'initials' => 'RM'],
  ['name' => 'Kavita Saxena',   'role' => 'Communications Committee', 'initials' => 'KS'],
  ['name' => 'Nikhil Bhatia',   'role' => 'Trade & Policy Committee', 'initials' => 'NB'],
  ['name' => 'Shreya Pillai',   'role' => 'Youth & Startups Committee','initials' => 'SP'],
  ['name' => 'Varun Choudhary', 'role' => 'Sponsorship Committee',    'initials' => 'VC'],
  ['name' => 'Divya Tiwari',    'role' => 'Legal & Compliance',       'initials' => 'DT'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Teams</h2>
    <h3 class="section-title">Committee Members</h3>
    <p>Our dedicated committee members volunteer their time and expertise across various working groups, ensuring IBPC Canada's programs and initiatives are executed with excellence.</p>

    <div class="row">
      <?php foreach ($members as $person): ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="person-card">
          <div class="person-photo">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($person['initials']); ?>&size=150&background=ea8825&color=fff&font-size=0.4" alt="<?php echo e($person['name']); ?>">
          </div>
          <h5 class="person-name"><?php echo e($person['name']); ?></h5>
          <p class="person-role"><?php echo e($person['role']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
