<?php
/**
 * IBPC Canada — Renew Membership
 * Requires login. Redirects to /login if not authenticated.
 */
$pageTitle = 'Renew Membership — IBPC Canada';
$pageDescription = 'Renew your IBPC Canada membership to continue enjoying all member benefits and stay connected to the India-Canada business network.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Renew Membership';
$pageHeaderIcon  = 'sync-alt';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/membership-categories'], ['label' => 'Renew Membership']];
include __DIR__ . '/../includes/page-header.php';

$loggedIn = isLoggedIn();
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Members Area</h2>
    <h3 class="section-title">Renew Membership</h3>

    <?php if (!$loggedIn): ?>
    <div style="text-align: center; padding: 50px 20px; background: var(--color-bg-light); border-radius: var(--border-radius-card);">
      <div style="font-size: 56px; margin-bottom: 15px;">🔒</div>
      <h4 style="font-size: 20px; font-weight: 700; text-transform: none; margin-bottom: 10px;">Please Sign In</h4>
      <p style="max-width: 480px; margin: 0 auto 25px; color: #666;">You must be logged in to renew your IBPC Canada membership.</p>
      <a href="/login" class="btn-1">Member Login</a>
    </div>

    <?php else: ?>
    <div class="row">
      <div class="col-lg-8">

        <div style="background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 30px; margin-bottom: 25px;">
          <h4 style="font-size: 17px; font-weight: 700; text-transform: none; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #eee;">Renewal Request</h4>
          <form id="renewalForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" value="<?php echo e($_SESSION['member_name'] ?? 'Member Name'); ?>" readonly style="background: #f9f9f9;">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Current Tier</label>
                  <input type="text" value="General Member" readonly style="background: #f9f9f9;">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Renewal Tier *</label>
                  <select name="tier" required class="form-control">
                    <option value="diamond">💎 Diamond</option>
                    <option value="gold">🏢 Gold Corporate</option>
                    <option value="platinum">⭐ Platinum</option>
                    <option value="silver">🥈 Silver</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Duration *</label>
                  <select name="duration" required class="form-control">
                    <option value="1">1 Year</option>
                    <option value="3">3 Years (Save 10%)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Special Notes / Updates</label>
              <textarea rows="4" placeholder="Any changes to your contact info or company details?"></textarea>
            </div>
            <div style="background: #f0f7ff; border-radius: 8px; padding: 15px; margin-bottom: 20px; font-size: 13px; color: #004085; border: 1px solid #b8daff;">
              <i class="fas fa-info-circle"></i> Upon submission, our team will review your renewal and send an invoice for the selected tier.
            </div>
            <button type="submit" class="btn-1">Submit Renewal Request</button>
          </form>
        </div>

      </div>

      <div class="col-lg-4">
        <div style="background: var(--color-bg-light); border-radius: var(--border-radius-card); padding: 25px; text-align: center; position: sticky; top: 110px;">
          <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; margin: 0 auto 15px; border: 3px solid var(--color-primary);">
            <img src="https://ui-avatars.com/api/?name=Member&size=100&background=1F3D8C&color=fff" alt="Profile Photo" style="width: 100%;">
          </div>
          <h5 style="font-size: 16px; text-transform: none; margin-bottom: 5px;"><?php echo e($_SESSION['member_name'] ?? 'Member Name'); ?></h5>
          <p style="font-size: 13px; color: var(--color-primary); font-weight: 600; margin-bottom: 5px;">General Member</p>
          <p style="font-size: 12px; color: #888; margin-bottom: 20px;">Member since 2025</p>
          <div style="text-align: left; font-size: 13px; color: #555; background: #fff; padding: 15px; border-radius: 8px; border: 1px solid #ddd;">
            <p style="margin-bottom: 10px;"><strong>Status:</strong> <span style="color: #d9534f;">Expires Soon</span></p>
            <p style="margin-bottom: 0;"><strong>Expiry Date:</strong> Dec 31, 2025</p>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
