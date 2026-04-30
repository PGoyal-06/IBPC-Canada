<?php
/**
 * IBPC Canada — News & Media
 */
$pageTitle = 'News & Media — IBPC Canada';
$pageDescription = 'Stay informed with the latest news, press releases, and media coverage from IBPC Canada on India-Canada trade and bilateral relations.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'News & Media';
$pageHeaderIcon  = 'megaphone';
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

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>IBPC Canada news and media updates will be added soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
