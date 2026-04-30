<?php
/**
 * IBPC Canada — Past Events
 */
$pageTitle = 'Past Events — IBPC Canada';
$pageDescription = 'Browse the archive of IBPC Canada\'s past events, seminars, and networking sessions.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Past Events';
$pageHeaderIcon  = 'calendar';
$breadcrumbs = [['label' => 'Events', 'url' => '/events'], ['label' => 'Past Events']];
include __DIR__ . '/../includes/page-header.php';

// Mock Past Events Data
$pastEvents = [
  [
    'id' => 101,
    'title' => 'India-Canada Business Networking Reception',
    'type' => 'Physical',
    'type_color' => '#1F3D8C',
    'date' => 'March 15, 2026',
    'time' => '05:00 PM - 08:00 PM',
    'location' => 'Toronto Board of Trade',
    'image' => IMG_URL . '/events/banner1.png',
    'slug' => 'networking-reception-mar2026'
  ],
  [
    'id' => 102,
    'title' => 'Cross-Border Real Estate Investment Seminar',
    'type' => 'Virtual',
    'type_color' => '#252758',
    'date' => 'February 20, 2026',
    'time' => '11:00 AM - 01:00 PM',
    'location' => 'Online Webinar',
    'image' => IMG_URL . '/events/banner2.png',
    'slug' => 'real-estate-webinar-feb2026'
  ],
  [
    'id' => 103,
    'title' => 'Annual Trade & Policy Briefing',
    'type' => 'Physical',
    'type_color' => '#1F3D8C',
    'date' => 'January 10, 2026',
    'time' => '09:00 AM - 12:00 PM',
    'location' => 'Ottawa Convention Centre',
    'image' => IMG_URL . '/events/banner3.png',
    'slug' => 'trade-policy-briefing-2026'
  ],
  [
    'id' => 104,
    'title' => 'End of Year Members Gala 2025',
    'type' => 'Physical',
    'type_color' => '#1F3D8C',
    'date' => 'December 12, 2025',
    'time' => '06:00 PM - 11:30 PM',
    'location' => 'Ritz-Carlton, Toronto',
    'image' => IMG_URL . '/events/banner1.png',
    'slug' => 'eoy-gala-2025'
  ],
];
?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>The archive of past IBPC Canada events will be added soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
