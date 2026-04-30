<?php
/**
 * IBPC Canada — Focus Groups & Forums
 */
$pageTitle = 'Focus Groups & Forums — IBPC Canada';
$pageDescription = 'Explore IBPC Canada\'s specialized focus groups and industry forums driving sector-specific bilateral trade initiatives.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Focus Groups & Forums';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Focus Groups & Forums']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'IBPC Canada focus groups and forums bring members together around shared sectors, industries, and business priorities.';
include __DIR__ . '/../includes/page-tagline.php';

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
    <h2 class="section-label">Focus Groups</h2>
    <h3 class="section-title">Focus Groups & Forums</h3>
    <p>IBPC Canada operates specialized focus groups and forums that bring together industry leaders to address sector-specific opportunities and challenges in India-Canada trade. Each group is led by experienced professionals and meets regularly to develop actionable strategies.</p>

    <h4 style="color: var(--color-primary); border-bottom: 2px solid var(--color-primary); padding-bottom: 10px; margin-top: 50px; margin-bottom: 30px;">FOCUS GROUP</h4>
    
    <div class="row">
      <?php
      $focus_groups = [
        ['name' => 'Convener Placeholder 1', 'role' => 'Technology, Digital & Innovation', 'initials' => 'CP'],
        ['name' => 'Convener Placeholder 2', 'role' => 'Healthcare, Education, Wellness & Pharma', 'initials' => 'CP'],
        ['name' => 'Convener Placeholder 3', 'role' => 'Professional & Business Services', 'initials' => 'CP'],
        ['name' => 'Convener Placeholder 4', 'role' => 'Real Assets & Built Environment', 'initials' => 'CP'],
        ['name' => 'Convener Placeholder 5', 'role' => 'Retail, Hospitality & Tourism', 'initials' => 'CP'],
        ['name' => 'Convener Placeholder 6', 'role' => 'Energy & Climate', 'initials' => 'CP'],
        ['name' => 'Convener Placeholder 7', 'role' => 'Financial Services & Capital Markets', 'initials' => 'CP'],
        ['name' => 'Convener Placeholder 8', 'role' => 'Trade, Logistics & Industrial Value Chains', 'initials' => 'CP'],
      ];
      foreach ($focus_groups as $conv):
      ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card" style="padding: 20px 15px;">
          <div class="person-photo" style="width: 90px; height: 90px; border-width: 2px; margin-bottom: 12px;">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($conv['initials']); ?>&size=150&background=1F3D8C&color=fff&font-size=0.4" alt="<?php echo e($conv['name']); ?>">
          </div>
          <h5 class="person-name" style="font-size: 15px; margin-bottom: 2px;"><?php echo e($conv['name']); ?></h5>
          <p class="person-role" style="font-size: 12px; color: #666; font-weight: 400; margin-bottom: 0; min-height: 36px; display: flex; align-items: center; justify-content: center;"><?php echo e($conv['role']); ?></p>
          <a href="#" style="color: var(--color-primary); font-size: 11px; font-weight: 700; margin-top: 10px; display: inline-block; text-transform: uppercase;">View Profile →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <h4 style="color: var(--color-primary); border-bottom: 2px solid var(--color-primary); padding-bottom: 10px; margin-top: 40px; margin-bottom: 30px;">FORUMS</h4>
    
    <div class="row">
      <?php
      $forums = [
        ['name' => 'Convener Placeholder 9', 'role' => 'CSR Forum, Corporate Social Responsibility', 'initials' => 'CP'],
      ];
      foreach ($forums as $conv):
      ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card" style="padding: 20px 15px;">
          <div class="person-photo" style="width: 90px; height: 90px; border-width: 2px; margin-bottom: 12px;">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($conv['initials']); ?>&size=150&background=1F3D8C&color=fff&font-size=0.4" alt="<?php echo e($conv['name']); ?>">
          </div>
          <h5 class="person-name" style="font-size: 15px; margin-bottom: 2px;"><?php echo e($conv['name']); ?></h5>
          <p class="person-role" style="font-size: 12px; color: #666; font-weight: 400; margin-bottom: 0; min-height: 36px; display: flex; align-items: center; justify-content: center;"><?php echo e($conv['role']); ?></p>
          <a href="#" style="color: var(--color-primary); font-size: 11px; font-weight: 700; margin-top: 10px; display: inline-block; text-transform: uppercase;">View Profile →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
