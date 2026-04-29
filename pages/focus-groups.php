<?php
/**
 * IBPC Canada — Focus Groups & Forums
 */
$pageTitle = 'Focus Groups & Forums — IBPC Canada';
$pageDescription = 'Explore IBPC Canada\'s specialized focus groups and industry forums driving sector-specific bilateral trade initiatives.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Focus Groups & Forums';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Focus Groups & Forums']];
include __DIR__ . '/../includes/page-header.php';

$groups = [
  ['name' => 'Technology & IT Services',     'desc' => 'Connecting Canada\'s tech sector with India\'s IT powerhouses. Focus areas include software development, AI/ML, cybersecurity, and digital transformation partnerships.', 'icon' => '💻'],
  ['name' => 'Healthcare & Pharmaceuticals', 'desc' => 'Facilitating collaboration in healthcare delivery, pharmaceutical R&D, biotech, and medical device manufacturing between India and Canada.', 'icon' => '🏥'],
  ['name' => 'Clean Energy & Sustainability', 'desc' => 'Promoting joint ventures in renewable energy, green technology, ESG compliance, and sustainable infrastructure development.', 'icon' => '🌿'],
  ['name' => 'Financial Services & Fintech',  'desc' => 'Bridging India and Canada\'s financial ecosystems through banking partnerships, fintech innovation, and cross-border investment facilitation.', 'icon' => '📊'],
  ['name' => 'Education & Skill Development', 'desc' => 'Supporting partnerships between Canadian and Indian educational institutions, skill certification programs, and student exchange initiatives.', 'icon' => '🎓'],
  ['name' => 'Real Estate & Infrastructure',  'desc' => 'Enabling cross-border investment in commercial real estate, smart cities, and large-scale infrastructure projects.', 'icon' => '🏗️'],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Sectors</h2>
    <h3 class="section-title">Focus Groups &amp; Forums</h3>
    <p>IBPC Canada operates specialized focus groups that bring together industry leaders to address sector-specific opportunities and challenges in India-Canada trade. Each group is led by experienced professionals and meets regularly to develop actionable strategies.</p>

    <div class="row" style="margin-top: 30px;">
      <?php foreach ($groups as $group): ?>
      <div class="col-lg-4 col-md-6">
        <div class="person-card" style="text-align: left; padding: 30px;">
          <div style="font-size: 36px; margin-bottom: 12px;"><?php echo $group['icon']; ?></div>
          <h5 class="person-name" style="font-size: 18px;"><?php echo e($group['name']); ?></h5>
          <p class="person-bio" style="margin-top: 8px;"><?php echo e($group['desc']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
