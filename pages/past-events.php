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

<section class="page-content sec-events">
  <div class="container">
    <div class="row align-items-end mb-4">
      <div class="col-md-8">
        <h2 class="section-label">Archive</h2>
        <h3 class="section-title">Past Events</h3>
        <p>Browse our archive of past events. Read recaps, view photo galleries, and catch up on the insights shared by our speakers.</p>
      </div>
      <div class="col-md-4 text-md-end">
        <div class="d-flex gap-2 justify-content-md-end flex-wrap mb-3">
          <input type="text" id="past-search" class="form-control" style="max-width: 180px;" placeholder="Search events…">
          <select id="past-year" class="form-select" style="max-width: 130px;">
            <option value="">All Years</option>
            <option value="2026">2026</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
          </select>
          <button id="past-search-btn" class="btn-1" style="padding: 9px 18px; font-size: 14px; white-space: nowrap;">Search</button>
        </div>
      </div>
    </div>

    <div class="row">
      <?php foreach ($pastEvents as $event): ?>
      <div class="col-lg-4 col-md-6 mb-4 past-event-item" data-year="<?php echo date('Y', strtotime($event['date'])); ?>">
        <div class="event-card">
          <div class="img-contr" style="opacity: 0.85;">
            <a href="/event-detail?slug=<?php echo $event['slug']; ?>">
              <img src="<?php echo $event['image']; ?>" alt="<?php echo e($event['title']); ?>">
            </a>
          </div>
          <div class="card-body">
            <div class="section-name">
              <span class="badge-type" style="background-color: #666;">
                Completed
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
                <span><?php echo e($event['date']); ?></span>
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
              <a href="/event-detail?slug=<?php echo $event['slug']; ?>" class="btn-1" style="padding: 10px 20px; font-size: 14px; background: transparent; color: var(--color-primary); border: 1px solid var(--color-primary);">View Recap</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
