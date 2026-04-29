<?php
/**
 * IBPC Canada — News & Media
 */
$pageTitle = 'News & Media — IBPC Canada';
$pageDescription = 'Stay informed with the latest news, press releases, and media coverage from IBPC Canada on India-Canada trade and bilateral relations.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'News & Media';
$breadcrumbs = [['label' => 'News & Media']];
include __DIR__ . '/../includes/page-header.php';

$articles = [
    [
        'title'   => 'IBPC Canada Hosts Annual India-Canada Trade Summit 2026',
        'date'    => '2026-04-15',
        'excerpt' => 'Over 300 business leaders gathered in Toronto for IBPC Canada\'s flagship annual summit, focusing on technology, clean energy, and financial services corridors.',
        'tag'     => 'Events',
    ],
    [
        'title'   => 'India-Canada CECA Negotiations Resume: What It Means for Businesses',
        'date'    => '2026-03-22',
        'excerpt' => 'IBPC Canada welcomes the resumption of Comprehensive Economic Cooperation Agreement talks and outlines the potential benefits for member businesses.',
        'tag'     => 'Trade Policy',
    ],
    [
        'title'   => 'IBPC Canada Welcomes New Diamond Members for 2026',
        'date'    => '2026-03-10',
        'excerpt' => 'IBPC Canada is proud to announce the addition of five new Diamond Members representing the technology, real estate, and healthcare sectors.',
        'tag'     => 'Membership',
    ],
    [
        'title'   => 'IBPC Canada Delegation Visits Consulate General of India in Toronto',
        'date'    => '2026-02-28',
        'excerpt' => 'A senior delegation from IBPC Canada met with the Consul General to discuss collaborative initiatives supporting the Indian diaspora business community.',
        'tag'     => 'Diplomacy',
    ],
    [
        'title'   => 'India-Canada Bilateral Trade Crosses $12 Billion CAD Milestone',
        'date'    => '2026-02-14',
        'excerpt' => 'According to the latest trade data, India-Canada bilateral trade has surpassed $12 billion CAD annually, marking a new high in the economic partnership.',
        'tag'     => 'Trade Data',
    ],
    [
        'title'   => 'IBPC Canada Participates in Global Indian Business Awards 2025',
        'date'    => '2025-12-05',
        'excerpt' => 'IBPC Canada was recognised at the Global Indian Business Awards for its outstanding contribution to India-Canada bilateral trade facilitation.',
        'tag'     => 'Awards',
    ],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Latest Updates</h2>
    <h3 class="section-title">News &amp; Media</h3>

    <div class="row">
      <?php foreach ($articles as $article): ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card" style="border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); overflow: hidden; height: 100%; display: flex; flex-direction: column;">
          <div style="height: 180px; background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-navy) 100%); display: flex; align-items: center; justify-content: center;">
            <span style="color: rgba(255,255,255,0.3); font-size: 48px;">📰</span>
          </div>
          <div style="padding: 20px; flex: 1; display: flex; flex-direction: column;">
            <div style="margin-bottom: 10px;">
              <span style="background: var(--color-bg-light); color: var(--color-primary); font-size: 11px; font-weight: 600; text-transform: uppercase; padding: 3px 8px; border-radius: 3px;"><?php echo e($article['tag']); ?></span>
              <span style="font-size: 12px; color: #999; margin-left: 8px;"><?php echo formatDate($article['date']); ?></span>
            </div>
            <h5 style="font-size: 15px; font-weight: 700; text-transform: none; margin-bottom: 10px; line-height: 1.4;"><?php echo e($article['title']); ?></h5>
            <p style="font-size: 13px; color: #666; flex: 1; line-height: 1.6;"><?php echo e($article['excerpt']); ?></p>
            <a href="#" style="color: var(--color-primary); font-size: 13px; font-weight: 600; margin-top: 12px;">Read More →</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
