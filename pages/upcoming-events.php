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

<section class="page-content sec-events">
  <div class="container">
    <div class="row align-items-end mb-4">
      <div class="col-md-8">
        <h2 class="section-label">Join Us</h2>
        <h3 class="section-title">Upcoming Events</h3>
        <p>Register for our upcoming seminars, networking sessions, and flagship summits to connect with industry leaders.</p>
      </div>
      <div class="col-md-4 text-md-end">
        <div class="d-flex gap-2 justify-content-md-end flex-wrap mb-3">
          <input type="text" id="upcoming-search" class="form-control" style="max-width: 180px;" placeholder="Search events…">
          <select id="upcoming-type" class="form-select" style="max-width: 150px;">
            <option value="">All Types</option>
            <option value="physical">Physical</option>
            <option value="virtual">Virtual</option>
          </select>
          <button id="upcoming-search-btn" class="btn-1" style="padding: 9px 18px; font-size: 14px; white-space: nowrap;">Search</button>
        </div>
      </div>
    </div>

    <div class="row">
      <?php foreach ($upcomingEvents as $event): ?>
      <div class="col-lg-4 col-md-6 mb-4 upcoming-event-item" data-type="<?php echo strtolower(e($event['type'])); ?>">
        <div class="event-card">
          <div class="img-contr">
            <a href="/event-detail?slug=<?php echo $event['slug']; ?>">
              <img src="<?php echo $event['image']; ?>" alt="<?php echo e($event['title']); ?>">
            </a>
          </div>
          <div class="card-body">
            <div class="section-name">
              <span class="badge-type" style="background-color: <?php echo $event['type_color']; ?>;">
                <?php echo e($event['type']); ?>
              </span>
            </div>
            <div class="desc-text">
              <h4><a href="/event-detail?slug=<?php echo $event['slug']; ?>"><?php echo e($event['title']); ?></a></h4>
            </div>
            <ul class="category-info list-unstyled">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span><?php echo e($event['date']); ?> | <?php echo e($event['time']); ?></span>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span><?php echo e($event['location']); ?></span>
              </li>
            </ul>
            <div style="margin-top: 20px;">
              <a href="/event-detail?slug=<?php echo $event['slug']; ?>" class="btn-1" style="padding: 10px 20px; font-size: 14px;">Register Now</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
