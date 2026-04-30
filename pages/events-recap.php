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

<section class="page-content">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-label">Gallery</h2>
      <h3 class="section-title">Events Recap</h3>
      <p>Relive the best moments from our flagship events, summits, and galas.</p>
    </div>

    <?php foreach ($recaps as $year => $events): ?>
    <div class="mb-5">
      <h4 style="color: var(--color-primary); border-bottom: 2px solid var(--color-primary); padding-bottom: 10px; margin-bottom: 30px;"><?php echo $year; ?> Highlights</h4>
      <div class="row">
        <?php foreach ($events as $event): ?>
        <div class="col-md-4 mb-4">
          <div style="position: relative; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <img src="<?php echo $event['image']; ?>" alt="<?php echo e($event['title']); ?>" style="width: 100%; height: 250px; object-fit: cover; display: block; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: white;">
              <h5 style="margin: 0; font-size: 16px;"><?php echo e($event['title']); ?></h5>
              <a href="/event-detail?slug=<?php echo $event['slug']; ?>" style="color: #fff; font-size: 13px; text-decoration: underline; margin-top: 5px; display: inline-block;">View Full Recap</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
