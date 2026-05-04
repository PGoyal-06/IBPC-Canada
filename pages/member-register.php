<?php
/**
 * IBPC Canada — Membership Selection
 */
$pageTitle = 'Select Membership — IBPC Canada';
$isHomepage = false;

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

requireLogin();

include __DIR__ . '/../includes/header.php';

$memberStatus = $_SESSION['member_status'] ?? '';

// If they already paid, send them to portal
if ($memberStatus !== 'registered_pending_payment') {
    redirect('/member-portal');
}

$membershipTiers = include __DIR__ . '/../config/membership.php';

$pageHeaderTitle = 'Membership Selection';
$pageHeaderIcon  = 'award';
$breadcrumbs = [['label' => 'Select Membership']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div style="text-align: center; margin-bottom: 50px;">
          <h2 class="section-label">Step 2 of 2</h2>
          <h3 class="section-title">Choose Your Membership Tier</h3>
          <p style="max-width: 600px; margin: 0 auto; color: #666;">Select the membership that best fits your professional or business needs. You will be redirected to our secure Stripe payment gateway.</p>
        </div>

        <div class="row">
          <?php foreach ($membershipTiers as $tierId => $tier): ?>
          <div class="col-lg-3 col-md-6" style="margin-bottom: 30px;">
            <div class="membership-card" style="height: 100%; display: flex; flex-direction: column; background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 30px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
              <h4 style="font-size: 18px; font-weight: 700; color: var(--color-primary); margin-bottom: 10px;"><?php echo e($tier['label']); ?></h4>
              <div style="margin-bottom: 20px;">
                <span style="font-size: 32px; font-weight: 700; color: var(--color-text-main);">$<?php echo number_format($tier['amount_cents'] / 100, 2); ?></span>
                <span style="font-size: 14px; color: #999;">/ year</span>
              </div>
              <p style="font-size: 14px; color: #666; margin-bottom: 25px; flex-grow: 1;"><?php echo e($tier['description']); ?></p>
              
              <form action="/api/stripe/create-checkout-session.php" method="POST">
                <input type="hidden" name="tier" value="<?php echo e($tierId); ?>">
                <button type="submit" class="btn-1" style="width: 100%; text-align: center; padding: 12px 0;">Select <?php echo e($tierId === 'corporate' ? 'Plan' : 'Tier'); ?></button>
              </form>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <div style="text-align: center; margin-top: 40px; font-size: 13px; color: #999;">
          <p><i class="fas fa-lock"></i> Secure 256-bit SSL Encrypted Payment via Stripe</p>
          <p>By proceeding, you agree to the IBPC Canada membership terms and conditions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.membership-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  border-color: var(--color-primary) !important;
}
</style>

<?php include __DIR__ . '/../includes/footer.php'; ?>
