<?php
/**
 * IBPC Canada — Upcoming Events
 */
$pageTitle = 'Upcoming Events — IBPC Canada';
$pageDescription = 'Register for upcoming events, seminars, and networking sessions hosted by IBPC Canada.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Upcoming Events';
$pageHeaderIcon  = 'calendar';
$breadcrumbs = [['label' => 'Events', 'url' => '/events'], ['label' => 'Upcoming Events']];
include __DIR__ . '/../includes/page-header.php';

// Mock Upcoming Events Data
$upcomingEvents = [
  [
    'id' => 1,
    'title' => 'Canada-India Tech Summit 2026',
    'type' => 'Physical',
    'type_color' => '#1F3D8C', // Primary red
    'date' => 'October 15, 2026',
    'time' => '09:00 AM - 05:00 PM',
    'location' => 'Metro Toronto Convention Centre',
    'image' => IMG_URL . '/events/banner1.png', // Reusing placeholder
    'slug' => 'tech-summit-2026'
  ],
  [
    'id' => 2,
    'title' => 'Healthcare Investment Forum',
    'type' => 'Virtual',
    'type_color' => '#252758', // Secondary navy
    'date' => 'November 05, 2026',
    'time' => '10:00 AM - 12:00 PM',
    'location' => 'Online (Zoom)',
    'image' => IMG_URL . '/events/banner2.png',
    'slug' => 'healthcare-forum'
  ],
  [
    'id' => 3,
    'title' => 'Annual Gala Dinner & Awards',
    'type' => 'Physical',
    'type_color' => '#1F3D8C',
    'date' => 'December 10, 2026',
    'time' => '06:30 PM - 11:00 PM',
    'location' => 'Fairmont Royal York, Toronto',
    'image' => IMG_URL . '/events/banner3.png',
    'slug' => 'annual-gala-2026'
  ]
];
?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>Upcoming IBPC Canada events will be added soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
