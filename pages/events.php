<?php
/**
 * IBPC Canada — Events Landing Page
 */
$pageTitle = 'Events — IBPC Canada';
$pageDescription = 'Discover upcoming events and browse our archive of past events.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Events';
$breadcrumbs = [['label' => 'Events']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2 class="section-label">Connect &amp; Grow</h2>
        <h3 class="section-title">IBPC Canada Events</h3>
        <p class="mb-5">IBPC Canada hosts numerous events throughout the year, ranging from intimate networking sessions and sector-specific focus groups to large-scale summits and gala dinners. These events provide unparalleled opportunities for learning, business matchmaking, and professional growth.</p>
        
        <div class="row mt-4">
          <div class="col-md-4 mb-4">
            <div class="person-card" style="padding: 30px 20px;">
              <div style="font-size: 40px; margin-bottom: 15px;">📅</div>
              <h4 style="font-size: 20px; margin-bottom: 15px;">Upcoming Events</h4>
              <p style="font-size: 14px; margin-bottom: 20px;">Register for our future physical and virtual events.</p>
              <a href="/upcoming-events" class="btn-1" style="font-size: 14px; padding: 10px 20px;">View Upcoming</a>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="person-card" style="padding: 30px 20px;">
              <div style="font-size: 40px; margin-bottom: 15px;">⏪</div>
              <h4 style="font-size: 20px; margin-bottom: 15px;">Past Events</h4>
              <p style="font-size: 14px; margin-bottom: 20px;">Browse the archive of our successfully completed events.</p>
              <a href="/past-events" class="btn-1" style="font-size: 14px; padding: 10px 20px;">View Archive</a>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="person-card" style="padding: 30px 20px;">
              <div style="font-size: 40px; margin-bottom: 15px;">📸</div>
              <h4 style="font-size: 20px; margin-bottom: 15px;">Events Recap</h4>
              <p style="font-size: 14px; margin-bottom: 20px;">Explore photo galleries and key takeaways from major events.</p>
              <a href="/events-recap" class="btn-1" style="font-size: 14px; padding: 10px 20px;">View Recaps</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
