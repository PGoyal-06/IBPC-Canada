<?php
/**
 * IBPC Canada — Payment Success
 */
$pageTitle = 'Payment Successful — IBPC Canada';
$isHomepage = false;

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../includes/functions.php';

requireLogin();

include __DIR__ . '/../../includes/header.php';

// In a production app, we might verify the session_id with Stripe here
// to immediately update the local status if the webhook hasn't fired yet.

$pageHeaderTitle = 'Registration Successful';
$pageHeaderIcon  = 'check-circle';
$breadcrumbs = [['label' => 'Success']];
include __DIR__ . '/../../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <div style="background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 50px 40px; margin-bottom: 30px;">
          <div style="width: 80px; height: 80px; background: #e8f5e9; color: #2e7d32; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 40px;">
            <i class="fas fa-check"></i>
          </div>
          
          <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 15px;">Thank You!</h3>
          <p style="font-size: 16px; color: #666; margin-bottom: 25px;">Your payment has been successfully processed. Your membership application is now under review by the IBPC Canada team.</p>
          
          <div style="background: #f9f9f9; border-radius: 8px; padding: 20px; text-align: left; margin-bottom: 30px;">
            <h4 style="font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #999; margin-bottom: 12px;">What Happens Next?</h4>
            <ul style="padding-left: 20px; margin: 0; color: #555; font-size: 14px; line-height: 1.6;">
              <li style="margin-bottom: 8px;">Our team will verify your details and supporting documents.</li>
              <li style="margin-bottom: 8px;">You will receive an email confirmation once your membership is activated.</li>
              <li>You can now access your Member Portal, though some features will be restricted until approval.</li>
            </ul>
          </div>
          
          <a href="/member-portal" class="btn-1" style="display: inline-block; padding: 14px 40px;">Go to My Portal</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
