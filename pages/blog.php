<?php
/**
 * IBPC Canada — Blog
 */
$pageTitle = 'Blog — IBPC Canada';
$pageDescription = 'Read expert insights, thought leadership, and business perspectives from IBPC Canada members and leadership on India-Canada trade.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Blog';
$pageHeaderIcon  = 'megaphone';
$breadcrumbs = [['label' => 'News & Media', 'url' => '/news'], ['label' => 'Blog']];
include __DIR__ . '/../includes/page-header.php';

$posts = [
    [
        'title'  => 'Five Sectors Driving India-Canada Trade in 2026',
        'author' => 'Rajiv Mehta',
        'date'   => '2026-04-10',
        'excerpt'=> 'Technology services, clean energy, pharmaceuticals, education, and financial services are the five pillars reshaping India-Canada economic ties this decade.',
        'tag'    => 'Trade Insights',
    ],
    [
        'title'  => 'How to Navigate Canadian Immigration for Indian Business Professionals',
        'author' => 'Priya Sharma',
        'date'   => '2026-03-18',
        'excerpt'=> 'A practical guide for Indian entrepreneurs and executives looking to establish a presence in Canada, covering work permits, start-up visas, and permanent residency pathways.',
        'tag'    => 'Business Guide',
    ],
    [
        'title'  => 'Understanding CECA: A Plain-English Guide for Business Owners',
        'author' => 'Anil Kapoor',
        'date'   => '2026-02-25',
        'excerpt'=> 'The proposed Comprehensive Economic Cooperation Agreement between India and Canada could reshape tariff structures, services trade, and investment flows. Here is what you need to know.',
        'tag'    => 'Policy',
    ],
    [
        'title'  => 'Building Your Brand in Canada: Lessons from the Indian Diaspora',
        'author' => 'Sunita Bose',
        'date'   => '2026-02-01',
        'excerpt'=> 'Members of IBPC Canada share their stories of building successful businesses in Canada while leveraging their India connections to create unique market advantages.',
        'tag'    => 'Member Stories',
    ],
    [
        'title'  => 'The Role of Technology in Modern Trade Facilitation',
        'author' => 'Kiran Patel',
        'date'   => '2026-01-15',
        'excerpt'=> 'From blockchain-based supply chains to AI-driven market matching, digital tools are transforming how India and Canada do business with each other.',
        'tag'    => 'Technology',
    ],
    [
        'title'  => 'Clean Energy: The Next Frontier for India-Canada Partnerships',
        'author' => 'Mehul Desai',
        'date'   => '2025-12-20',
        'excerpt'=> 'As both nations commit to net-zero targets, collaboration in solar, hydrogen, and carbon capture creates massive bilateral investment opportunities.',
        'tag'    => 'Clean Energy',
    ],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Thought Leadership</h2>
    <h3 class="section-title">Our Blog</h3>

    <div class="row">
      <?php foreach ($posts as $post): ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card" style="border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); overflow: hidden; height: 100%; display: flex; flex-direction: column;">
          <div style="height: 180px; background: linear-gradient(135deg, #2d5a27 0%, var(--color-accent-green) 100%); display: flex; align-items: center; justify-content: center;">
            <span style="color: rgba(255,255,255,0.3); font-size: 48px;">✍️</span>
          </div>
          <div style="padding: 20px; flex: 1; display: flex; flex-direction: column;">
            <div style="margin-bottom: 10px;">
              <span style="background: var(--color-bg-light); color: var(--color-primary); font-size: 11px; font-weight: 600; text-transform: uppercase; padding: 3px 8px; border-radius: 3px;"><?php echo e($post['tag']); ?></span>
            </div>
            <h5 style="font-size: 15px; font-weight: 700; text-transform: none; margin-bottom: 8px; line-height: 1.4;"><?php echo e($post['title']); ?></h5>
            <p style="font-size: 12px; color: #999; margin-bottom: 8px;">By <?php echo e($post['author']); ?> &nbsp;·&nbsp; <?php echo formatDate($post['date']); ?></p>
            <p style="font-size: 13px; color: #666; flex: 1; line-height: 1.6;"><?php echo e($post['excerpt']); ?></p>
            <a href="#" style="color: var(--color-primary); font-size: 13px; font-weight: 600; margin-top: 12px;">Read More →</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
