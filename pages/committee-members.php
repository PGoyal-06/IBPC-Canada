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

$committee_boards = [
  'Emeritus Mentoring Committee',
  'Steering Committee',
  'Membership Review Committee',
  'Audit Committee',
  'Events Committee',
  'Communications Committee'
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Teams</h2>
    <h3 class="section-title">Committee Boards</h3>
    <p>Our dedicated committee members volunteer their time and expertise across various working groups, ensuring IBPC Canada's programs and initiatives are executed with excellence.</p>

    <div class="row mt-5">
      <?php foreach ($committee_boards as $boardName): ?>
      <div class="col-md-6 mb-4">
        <div class="card" style="border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); overflow: hidden;">
          <img src="https://placehold.co/600x300/1F3D8C/FFFFFF?text=<?php echo urlencode($boardName); ?>" alt="<?php echo e($boardName); ?>" style="width: 100%; height: auto; display: block;">
          <div style="padding: 20px; text-align: center;">
            <h4 style="margin: 0; font-size: 18px; font-weight: 700; color: var(--color-primary);"><?php echo e($boardName); ?></h4>
            <p style="margin-top: 10px; font-size: 14px; color: #666;">View committee board details and members.</p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
