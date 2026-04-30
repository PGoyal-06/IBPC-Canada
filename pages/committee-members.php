<?php
/**
 * IBPC Canada — Committee Members
 */
$pageTitle = 'Committee Members — IBPC Canada';
$pageDescription = 'View the committee members supporting IBPC Canada\'s initiatives across various working groups.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Committee Members';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Committee Members']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'Committee members support specialized initiatives, member engagement, events, and organizational development.';
include __DIR__ . '/../includes/page-tagline.php';

$committees = [
  'Events Committee' => [
    ['name' => 'Anisha Kaur',     'initials' => 'AK'],
    ['name' => 'Shreya Pillai',   'initials' => 'SP'],
    ['name' => 'Varun Choudhary', 'initials' => 'VC'],
  ],
  'Membership Committee' => [
    ['name' => 'Sanjay Verma',    'initials' => 'SV'],
    ['name' => 'Divya Tiwari',    'initials' => 'DT'],
  ],
  'Trade & Policy Committee' => [
    ['name' => 'Nikhil Bhatia',   'initials' => 'NB'],
    ['name' => 'Rohit Menon',     'initials' => 'RM'],
  ],
  'Communications Committee' => [
    ['name' => 'Kavita Saxena',   'initials' => 'KS'],
  ],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Teams</h2>
    <h3 class="section-title">Committee Members</h3>
    <p>Our dedicated committee members volunteer their time and expertise across various working groups, ensuring IBPC Canada's programs and initiatives are executed with excellence.</p>

    <?php foreach ($committees as $committeeName => $members): ?>
    <div class="mb-5">
      <h4 style="color: var(--color-primary); border-bottom: 2px solid var(--color-primary); padding-bottom: 10px; margin-bottom: 30px;"><?php echo e($committeeName); ?></h4>
      <div class="row">
        <?php foreach ($members as $person): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="person-card">
            <div class="person-photo">
              <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($person['initials']); ?>&size=150&background=252758&color=fff&font-size=0.4" alt="<?php echo e($person['name']); ?>">
            </div>
            <h5 class="person-name"><?php echo e($person['name']); ?></h5>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
