<?php
/**
 * IBPC Canada — Events Recap
 */
$pageTitle = 'Events Recap & Gallery — IBPC Canada';
$pageDescription = 'View photo galleries and recaps of IBPC Canada\'s most successful past events.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Events Recap & Gallery';
$pageHeaderIcon  = 'calendar';
$breadcrumbs = [['label' => 'Events', 'url' => '/events'], ['label' => 'Events Recap']];
include __DIR__ . '/../includes/page-header.php';

// Mock Recap Data grouped by year
$recaps = [
  '2026' => [
    ['title' => 'Spring Networking Mixer', 'image' => IMG_URL . '/events/banner1.png', 'slug' => 'spring-mixer-2026'],
    ['title' => 'Real Estate Forum', 'image' => IMG_URL . '/events/banner2.png', 'slug' => 'real-estate-forum-2026'],
  ],
  '2025' => [
    ['title' => 'End of Year Gala', 'image' => IMG_URL . '/events/banner3.png', 'slug' => 'eoy-gala-2025'],
    ['title' => 'Tech Trade Summit', 'image' => IMG_URL . '/events/banner1.png', 'slug' => 'tech-summit-2025'],
    ['title' => 'Healthcare Policy Briefing', 'image' => IMG_URL . '/events/banner2.png', 'slug' => 'health-briefing-2025'],
  ]
];
?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>Event recaps and galleries will be added soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
