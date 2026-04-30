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

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>IBPC Canada blog posts and thought leadership articles will be added soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
