<?php
/**
 * IBPC Canada — Payment Cancelled
 */
$pageTitle = 'Payment Cancelled — IBPC Canada';
$isHomepage = false;

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../includes/functions.php';

requireLogin();

include __DIR__ . '/../../includes/header.php';

$pageHeaderTitle = 'Payment Cancelled';
$pageHeaderIcon  = 'times-circle';
$breadcrumbs = [['label' => 'Cancelled']];
include __DIR__ . '/../../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <div style="background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 50px 40px; margin-bottom: 30px;">
          <div style="width: 80px; height: 80px; background: #fff3e0; color: #ef6c00; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 40px;">
            <i class="fas fa-exclamation-triangle"></i>
          </div>
          
          <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 15px;">Payment Not Completed</h3>
          <p style="font-size: 16px; color: #666; margin-bottom: 30px;">It looks like you cancelled the payment process or something went wrong. No charges were made to your card.</p>
          
          <div style="display: flex; gap: 15px; justify-content: center;">
            <a href="/member-register" class="btn-1">Try Again</a>
            <a href="/member-portal" class="btn-outline" style="border: 1px solid #ddd; padding: 12px 25px; border-radius: 4px; color: #666; text-decoration: none;">Go to Portal</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
