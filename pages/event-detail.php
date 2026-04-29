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
$breadcrumbs = [
  ['label' => 'Events', 'url' => '/events'], 
  ['label' => $isPast ? 'Past Events' : 'Upcoming Events', 'url' => $isPast ? '/past-events' : '/upcoming-events'],
  ['label' => 'Details']
];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <!-- Main Content -->
      <div class="col-lg-8 mb-5 mb-lg-0">
        <img src="<?php echo IMG_URL; ?>/events/banner2.png" alt="Event Cover" style="width: 100%; border-radius: 8px; margin-bottom: 30px;">
        
        <h2 style="font-size: 32px; font-weight: 700; color: var(--color-primary); margin-bottom: 15px;">Canada-India Tech Summit Example</h2>
        <div style="display: flex; gap: 10px; margin-bottom: 20px;">
          <span class="badge" style="background-color: #1F3D8C; padding: 5px 10px;">Physical</span>
          <span class="badge" style="background-color: #252758; padding: 5px 10px;">Technology</span>
        </div>

        <h4 style="margin-top: 30px; font-weight: 600;">About The Event</h4>
        <p>This is a sample description of the event. Join us for an exclusive gathering of industry leaders, innovators, and policymakers as we explore the future of cross-border technology partnerships between Canada and India. This summit will feature keynote addresses, interactive panel discussions, and structured networking sessions designed to foster collaboration and investment.</p>
        <p>Topics of discussion will include Artificial Intelligence, CleanTech innovations, cybersecurity standards, and IT service expansion.</p>

        <h4 style="margin-top: 30px; font-weight: 600;">Who Should Attend?</h4>
        <ul class="styled-list">
          <li>C-Level Executives in Technology Firms</li>
          <li>Venture Capitalists and Angel Investors</li>
          <li>Government Trade Representatives</li>
          <li>Tech Startup Founders</li>
        </ul>

        <?php if ($isPast): ?>
        <div style="background-color: #f8f6f7; padding: 30px; border-radius: 8px; margin-top: 40px;">
          <h4 style="font-weight: 600; margin-bottom: 15px;">Event Recap</h4>
          <p>This event has concluded. Thank you to all who attended! The insights shared during the panels were invaluable. Members can access the full presentation slides in the Reports section.</p>
          <div class="row mt-3">
            <div class="col-6"><img src="<?php echo IMG_URL; ?>/events/banner1.png" style="width:100%; border-radius:4px;" alt="Gallery"></div>
            <div class="col-6"><img src="<?php echo IMG_URL; ?>/events/banner3.png" style="width:100%; border-radius:4px;" alt="Gallery"></div>
          </div>
        </div>
        <?php endif; ?>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <div style="background-color: #f8f6f7; padding: 30px; border-radius: 8px; border-top: 4px solid var(--color-primary);">
          <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 20px;">Event Details</h4>
          
          <ul class="list-unstyled" style="margin-bottom: 30px;">
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;">
              <span style="font-size: 20px; margin-right: 15px;">📅</span>
              <div>
                <strong>Date</strong><br>
                October 15, 2026
              </div>
            </li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;">
              <span style="font-size: 20px; margin-right: 15px;">⏰</span>
              <div>
                <strong>Time</strong><br>
                09:00 AM - 05:00 PM (EST)
              </div>
            </li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;">
              <span style="font-size: 20px; margin-right: 15px;">📍</span>
              <div>
                <strong>Location</strong><br>
                Metro Toronto Convention Centre<br>
                255 Front St W, Toronto, ON
              </div>
            </li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;">
              <span style="font-size: 20px; margin-right: 15px;">🎟️</span>
              <div>
                <strong>Tickets</strong><br>
                Members: Free<br>
                Non-Members: $150 CAD
              </div>
            </li>
          </ul>

          <?php if (!$isPast): ?>
          <a href="#" class="btn-1" style="display: block; text-align: center; width: 100%;">Register Now</a>
          <p style="text-align: center; font-size: 13px; margin-top: 15px; color: #666;">Registration requires an IBPC Canada account. Members must log in to access free tickets.</p>
          <?php else: ?>
          <button class="btn-1" style="display: block; text-align: center; width: 100%; background-color: #666; cursor: not-allowed;" disabled>Event Concluded</button>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
