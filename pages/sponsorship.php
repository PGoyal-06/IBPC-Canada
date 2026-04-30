<?php
/**
 * IBPC Canada — Sponsorship
 */
$pageTitle = 'Sponsorship — IBPC Canada';
$pageDescription = 'Explore sponsorship opportunities with IBPC Canada and gain visibility among top India-Canada business professionals.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Sponsorship';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us', 'url' => '/about-us'], ['label' => 'Sponsorship']];
include __DIR__ . '/../includes/page-header.php';

$pageTagline = 'Sponsorship opportunities help partners connect with the IBPC Canada network and support high-impact business programming.';
include __DIR__ . '/../includes/page-tagline.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 text-center">
        <h3 class="section-title">SPONSORSHIP</h3>
        <p style="font-size: 16px; margin-bottom: 50px;">IBPC Canada is grateful to its generous sponsors for their continued support and welcomes new sponsors.</p>

        <!-- Sponsor Board Composition -->
        <div style="background: #fdfdfd; border: 1px solid #eaeaea; border-radius: 8px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
          
          <h4 style="text-transform: uppercase; letter-spacing: 2px; color: var(--color-primary); font-size: 14px; margin-bottom: 25px;">Platinum Sponsors</h4>
          <div class="row justify-content-center mb-5">
            <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="col-md-3 col-6 mb-3">
              <div style="padding: 15px; border: 1px solid #eee; border-radius: 4px; background: #fff; height: 100%; display: flex; align-items: center; justify-content: center;">
                <img src="https://placehold.co/200x100/ffffff/555555?text=Sponsor+Logo" alt="Sponsor Logo" style="max-width: 100%; opacity: 0.8;">
              </div>
            </div>
            <?php endfor; ?>
          </div>

          <h4 style="text-transform: uppercase; letter-spacing: 2px; color: var(--color-primary); font-size: 14px; margin-bottom: 25px;">Gold Sponsors</h4>
          <div class="row justify-content-center mb-5">
            <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="col-md-2 col-4 mb-3">
              <div style="padding: 10px; border: 1px solid #eee; border-radius: 4px; background: #fff; height: 100%; display: flex; align-items: center; justify-content: center;">
                <img src="https://placehold.co/150x80/ffffff/777777?text=Sponsor+Logo" alt="Sponsor Logo" style="max-width: 100%; opacity: 0.8;">
              </div>
            </div>
            <?php endfor; ?>
          </div>

          <h4 style="text-transform: uppercase; letter-spacing: 2px; color: var(--color-primary); font-size: 14px; margin-bottom: 25px;">Silver Sponsors</h4>
          <div class="row justify-content-center">
            <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="col-md-2 col-4 mb-3">
              <div style="padding: 8px; border: 1px solid #eee; border-radius: 4px; background: #fff; height: 100%; display: flex; align-items: center; justify-content: center;">
                <img src="https://placehold.co/120x60/ffffff/999999?text=Sponsor+Logo" alt="Sponsor Logo" style="max-width: 100%; opacity: 0.8;">
              </div>
            </div>
            <?php endfor; ?>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
