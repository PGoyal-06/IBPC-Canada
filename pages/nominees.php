<?php
/**
 * IBPC Canada — Nominees
 */
$pageTitle = 'Nominees — IBPC Canada';
$pageDescription = 'Meet the IBPC Canada nominees for the 2026 Governing Board election.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Nominees';
$breadcrumbs = [['label' => 'Elections', 'url' => '/elections'], ['label' => 'Nominees']];
include __DIR__ . '/../includes/page-header.php';

$nominees = [
    ['name' => 'Rajiv Mehta',     'position' => 'President',        'company' => 'Mehta Global Consulting',     'initials' => 'RM'],
    ['name' => 'Priya Sharma',    'position' => 'Vice President',   'company' => 'Sharma Wealth Management',    'initials' => 'PS'],
    ['name' => 'Anil Kapoor',     'position' => 'Secretary General','company' => 'Kapoor Law Professional Corp','initials' => 'AK'],
    ['name' => 'Sunita Bose',     'position' => 'Treasurer',        'company' => 'Bose Financial Advisory',     'initials' => 'SB'],
    ['name' => 'Kiran Patel',     'position' => 'Board Member',     'company' => 'Patel Technology Inc.',       'initials' => 'KP'],
    ['name' => 'Mehul Desai',     'position' => 'Board Member',     'company' => 'Desai Clean Energy',         'initials' => 'MD'],
    ['name' => 'Nisha Iyer',      'position' => 'Board Member',     'company' => 'Iyer Healthcare Group',      'initials' => 'NI'],
    ['name' => 'Vikram Singh',    'position' => 'Board Member',     'company' => 'Singh Capital Partners',     'initials' => 'VS'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">2026 Election</h2>
    <h3 class="section-title">Nominees</h3>
    <p>The following candidates have been duly nominated for positions on the IBPC Canada Governing Board for the 2026–2028 term. Members are encouraged to review each nominee's profile before the voting period opens.</p>

    <div class="row" style="margin-top: 20px;">
      <?php foreach ($nominees as $nominee): ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="person-card">
          <div class="person-photo">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($nominee['initials']); ?>&size=150&background=1F3D8C&color=fff&font-size=0.4" alt="<?php echo e($nominee['name']); ?>">
          </div>
          <h5 class="person-name"><?php echo e($nominee['name']); ?></h5>
          <p class="person-role"><?php echo e($nominee['position']); ?></p>
          <p class="person-company"><?php echo e($nominee['company']); ?></p>
          <a href="/candidate-corner" style="color: var(--color-primary); font-size: 12px; font-weight: 600; margin-top: 8px; display: inline-block;">View Profile →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
