<?php
/**
 * IBPC Canada — Member Portal
 */
$pageTitle = 'Member Portal — IBPC Canada';
$pageDescription = 'Your IBPC Canada member portal. Access your profile, events, and membership details.';
$isHomepage = false;

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

requireLogin();

$memberId     = $_SESSION['member_id'];
$memberName   = $_SESSION['member_name'] ?? 'Member';
$memberStatus = $_SESSION['member_status'] ?? '';

// 1. Force payment if registered but not paid
if ($memberStatus === 'registered_pending_payment') {
    redirect('/member-register');
}

include __DIR__ . '/../includes/header.php';

include __DIR__ . '/../includes/portal-shell-open.php';
?>

<?php if ($memberStatus === 'paid_pending_approval'): ?>
  <div style="background: #e3f2fd; border: 1px solid #bbdefb; border-radius: 8px; padding: 15px 20px; margin-bottom: 25px; display: flex; align-items: center; gap: 15px;">
    <i class="fas fa-clock" style="color: #1976d2; font-size: 20px;"></i>
    <div>
      <h4 style="margin: 0; font-size: 15px; color: #0d47a1; font-weight: 700;">Account Under Review</h4>
      <p style="margin: 3px 0 0; font-size: 13px; color: #1565c0;">Your payment was successful! Our team is currently reviewing your application. Full features will be enabled once approved.</p>
    </div>
  </div>
<?php elseif ($memberStatus === 'pending'): ?>
  <?php $alertType = 'pending'; include __DIR__ . '/../includes/portal-alert.php'; ?>
<?php elseif ($memberStatus === 'expired'): ?>
  <?php $alertType = 'expired'; include __DIR__ . '/../includes/portal-alert.php'; ?>
<?php endif; ?>

<h2 class="portal-heading">Welcome, <?php echo e($memberName); ?></h2>
<p class="portal-subheading">Here's an overview of your IBPC Canada membership.</p>

<div class="row">
  <div class="col-lg-8" style="margin-bottom: 24px;">
    <h3 style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: #999; margin-bottom: 14px;">Quick Links</h3>
    <div class="portal-quick-links">
      <a href="/member-portal/profile" class="portal-quick-link">
        <div class="portal-quick-link__title">My Profile</div>
        <p class="portal-quick-link__desc">View and update your contact and membership details.</p>
      </a>
      <a href="/member-portal/events" class="portal-quick-link">
        <div class="portal-quick-link__title">My Event Registrations</div>
        <p class="portal-quick-link__desc">See the events you have registered for.</p>
      </a>
      <a href="/upcoming-events" class="portal-quick-link">
        <div class="portal-quick-link__title">Browse Events</div>
        <p class="portal-quick-link__desc">Explore upcoming IBPC Canada events and activities.</p>
      </a>
      <a href="/contact" class="portal-quick-link">
        <div class="portal-quick-link__title">Contact IBPC Canada</div>
        <p class="portal-quick-link__desc">Get in touch with the IBPC Canada team.</p>
      </a>
    </div>
  </div>

  <div class="col-lg-4">
    <?php
    $cardName    = $memberName;
    $cardStatus  = $memberStatus;
    $cardLevel   = $_SESSION['member_level']   ?? null;
    $cardSince   = $_SESSION['member_since']   ?? null;
    $cardRenewal = $_SESSION['member_renewal'] ?? null;
    $cardOrg     = $_SESSION['member_org']     ?? null;
    include __DIR__ . '/../includes/member-status-card.php';
    ?>
  </div>
</div>

<?php
include __DIR__ . '/../includes/portal-shell-close.php';
include __DIR__ . '/../includes/footer.php';
?>
