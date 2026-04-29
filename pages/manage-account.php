<?php
/**
 * IBPC Canada — Manage Account
 * Requires login. Redirects to /login if not authenticated.
 */
$pageTitle = 'Manage Account — IBPC Canada';
$pageDescription = 'Manage your IBPC Canada member profile, update your contact details, and manage your membership.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Manage Account';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/be-a-member'], ['label' => 'Manage Account']];
include __DIR__ . '/../includes/page-header.php';

$loggedIn = isLoggedIn();
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Members Area</h2>
    <h3 class="section-title">Manage Account</h3>

    <?php if (!$loggedIn): ?>
    <div style="text-align: center; padding: 50px 20px; background: var(--color-bg-light); border-radius: var(--border-radius-card);">
      <div style="font-size: 56px; margin-bottom: 15px;">🔒</div>
      <h4 style="font-size: 20px; font-weight: 700; text-transform: none; margin-bottom: 10px;">Please Sign In</h4>
      <p style="max-width: 480px; margin: 0 auto 25px; color: #666;">You must be logged in to manage your IBPC Canada account.</p>
      <a href="/login" class="btn-1">Member Login</a>
    </div>

    <?php else: ?>
    <div class="row">
      <div class="col-lg-8">

        <div style="background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 30px; margin-bottom: 25px;">
          <h4 style="font-size: 17px; font-weight: 700; text-transform: none; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #eee;">Personal Information</h4>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" value="<?php echo e($_SESSION['member_name'] ?? 'Member Name'); ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" value="<?php echo e($_SESSION['member_email'] ?? ''); ?>" readonly style="background: #f9f9f9; cursor: not-allowed;">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="tel">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Company</label>
                  <input type="text">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Bio / About</label>
              <textarea rows="4"></textarea>
            </div>
            <button type="submit" class="btn-1">Save Changes</button>
          </form>
        </div>

        <div style="background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 30px;">
          <h4 style="font-size: 17px; font-weight: 700; text-transform: none; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #eee;">Change Password</h4>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Current Password</label>
                  <input type="password">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>New Password</label>
                  <input type="password">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Confirm New Password</label>
                  <input type="password">
                </div>
              </div>
            </div>
            <button type="submit" class="btn-1">Update Password</button>
          </form>
        </div>

      </div>

      <div class="col-lg-4">
        <div style="background: var(--color-bg-light); border-radius: var(--border-radius-card); padding: 25px; text-align: center;">
          <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; margin: 0 auto 15px; border: 3px solid var(--color-primary);">
            <img src="https://ui-avatars.com/api/?name=Member&size=100&background=1F3D8C&color=fff" alt="Profile Photo" style="width: 100%;">
          </div>
          <h5 style="font-size: 16px; text-transform: none; margin-bottom: 5px;"><?php echo e($_SESSION['member_name'] ?? 'Member Name'); ?></h5>
          <p style="font-size: 13px; color: var(--color-primary); font-weight: 600; margin-bottom: 5px;">General Member</p>
          <p style="font-size: 12px; color: #888; margin-bottom: 20px;">Member since 2025</p>
          <a href="/renew-membership" style="color: var(--color-primary); font-size: 13px; font-weight: 600;">Renew Membership →</a>
        </div>
      </div>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
