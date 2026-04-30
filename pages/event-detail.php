<?php
/**
 * IBPC Canada — Event Detail Template
 */

// Simple mock router for the detail page based on ?slug=
$slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';
$isPast = strpos($slug, '2025') !== false || strpos($slug, 'reception') !== false;

$pageTitle = 'Event Details — IBPC Canada';
$pageDescription = 'View details and register for this IBPC Canada event.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Event Details';
$pageHeaderIcon  = 'calendar';
$breadcrumbs = [
  ['label' => 'Events', 'url' => '/events'], 
  ['label' => $isPast ? 'Past Events' : 'Upcoming Events', 'url' => $isPast ? '/past-events' : '/upcoming-events'],
  ['label' => 'Details']
];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="coming-soon-section">
  <div class="container">
    <div class="coming-soon-card">
      <svg class="cs-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <h2>Coming Soon</h2>
      <p>Event details will be available soon.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
