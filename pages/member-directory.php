<?php
/**
 * IBPC Canada — Member Directory
 * Requires login. Redirects to /login if not authenticated.
 */
$pageTitle = 'Member Directory — IBPC Canada';
$pageDescription = 'Search and connect with IBPC Canada members across industries and membership tiers.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Member Directory';
$pageHeaderIcon  = 'users';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/membership-categories'], ['label' => 'Member Directory']];
include __DIR__ . '/../includes/page-header.php';

$loggedIn = isLoggedIn();
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Network</h2>
    <h3 class="section-title">Member Directory</h3>

    <?php if (!$loggedIn): ?>
    <!-- Login prompt -->
    <div style="text-align: center; padding: 50px 20px; background: var(--color-bg-light); border-radius: var(--border-radius-card);">
      <div style="font-size: 56px; margin-bottom: 15px;">🔒</div>
      <h4 style="font-size: 20px; font-weight: 700; text-transform: none; margin-bottom: 10px;">Members Only</h4>
      <p style="max-width: 480px; margin: 0 auto 25px; color: #666;">The Member Directory is available exclusively to IBPC Canada members. Login to browse and connect with professionals across Canada's Indian business community.</p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="/login" class="btn-1">Member Login</a>
        <a href="/membership-application" class="btn-1" style="background: transparent; border: 2px solid var(--color-navy); color: var(--color-navy);">Apply for Membership</a>
      </div>
    </div>

    <?php else: ?>
    <!-- Directory (authenticated) -->
    <div style="display: flex; gap: 12px; margin-bottom: 25px; flex-wrap: wrap; align-items: center;">
      <input type="text" id="searchInput" placeholder="Search by name, company, or sector..."
        style="flex: 1; min-width: 250px; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 14px; font-family: var(--font-family); outline: none;">
      <select id="tierFilter" style="border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 14px; font-family: var(--font-family); background: #fff; outline: none;">
        <option value="">All Tiers</option>
        <option value="diamond">Diamond</option>
        <option value="corporate">Corporate</option>
        <option value="general">General</option>
      </select>
    </div>

    <div class="row" id="directoryGrid">
      <?php
      $placeholder = [
          ['name' => 'Rajiv Mehta',      'company' => 'Mehta Global Consulting',   'sector' => 'Consulting',   'tier' => 'diamond',   'i' => 'RM'],
          ['name' => 'Priya Sharma',     'company' => 'Sharma Wealth Management',  'sector' => 'Finance',     'tier' => 'diamond',   'i' => 'PS'],
          ['name' => 'Sunita Bose',      'company' => 'Bose Financial Advisory',   'sector' => 'Finance',     'tier' => 'corporate', 'i' => 'SB'],
          ['name' => 'Vikram Singh',     'company' => 'Singh Capital Partners',    'sector' => 'Investment',  'tier' => 'corporate', 'i' => 'VS'],
          ['name' => 'Anisha Kaur',      'company' => 'Kaur Technologies',         'sector' => 'Technology',  'tier' => 'general',   'i' => 'AK'],
          ['name' => 'Rohit Menon',      'company' => 'Menon Real Estate',         'sector' => 'Real Estate', 'tier' => 'corporate', 'i' => 'RM2'],
          ['name' => 'Kavita Saxena',    'company' => 'Saxena Healthcare',         'sector' => 'Healthcare',  'tier' => 'general',   'i' => 'KS'],
          ['name' => 'Nikhil Bhatia',    'company' => 'Bhatia Legal',              'sector' => 'Legal',       'tier' => 'general',   'i' => 'NB'],
      ];
      $tierColors = ['diamond' => '#F39200', 'corporate' => '#1F3D8C', 'general' => '#7BB833'];
      $tierLabels = ['diamond' => '💎 Diamond', 'corporate' => '🏢 Corporate', 'general' => '👤 General'];
      foreach ($placeholder as $m):
      ?>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-name="<?php echo strtolower(e($m['name'] . ' ' . $m['company'])); ?>" data-tier="<?php echo e($m['tier']); ?>">
        <div class="person-card">
          <div class="person-photo">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($m['i']); ?>&size=150&background=1F3D8C&color=fff&font-size=0.4" alt="<?php echo e($m['name']); ?>">
          </div>
          <h5 class="person-name"><?php echo e($m['name']); ?></h5>
          <p class="person-role"><?php echo e($m['company']); ?></p>
          <p class="person-company"><?php echo e($m['sector']); ?></p>
          <p style="margin-top: 8px;">
            <span style="background: <?php echo $tierColors[$m['tier']]; ?>20; color: <?php echo $tierColors[$m['tier']]; ?>; font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 3px; text-transform: uppercase;"><?php echo $tierLabels[$m['tier']]; ?></span>
          </p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <script>
    (function(){
      var $search = document.getElementById('searchInput');
      var $tier   = document.getElementById('tierFilter');
      var $cards  = document.querySelectorAll('#directoryGrid > div');
      function filter(){
        var q = $search.value.toLowerCase();
        var t = $tier.value;
        $cards.forEach(function(c){
          var match = (!q || c.dataset.name.includes(q)) && (!t || c.dataset.tier === t);
          c.style.display = match ? '' : 'none';
        });
      }
      $search.addEventListener('input', filter);
      $tier.addEventListener('change', filter);
    })();
    </script>
    <?php endif; ?>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
