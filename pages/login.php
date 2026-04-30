<?php
/**
 * IBPC Canada — Member Login
 */
$pageTitle = 'Member Login — IBPC Canada';
$pageDescription = 'Login to your IBPC Canada member account to access the member directory, manage your profile, and more.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Member Login';
$pageHeaderIcon  = 'users';
$breadcrumbs = [['label' => 'Member Login']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-7 mx-auto">

        <div style="background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 40px; margin-bottom: 30px;">
          <h2 class="section-label">Members Area</h2>
          <h3 class="section-title" style="font-size: 28px;">Sign In</h3>

          <form id="loginForm" method="POST" action="/api/login.php" novalidate>
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="login_email" style="font-size: 14px; font-weight: 600; display: block; margin-bottom: 5px;">Email Address *</label>
              <input type="email" id="login_email" name="email" required
                style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 15px; font-family: var(--font-family); outline: none; transition: border-color 0.3s ease;">
            </div>

            <div class="form-group" style="margin-bottom: 24px;">
              <label for="login_password" style="font-size: 14px; font-weight: 600; display: block; margin-bottom: 5px;">Password *</label>
              <input type="password" id="login_password" name="password" required
                style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 15px; font-family: var(--font-family); outline: none; transition: border-color 0.3s ease;">
            </div>

            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; font-size: 13px;">
              <label style="display: flex; align-items: center; gap: 8px; font-weight: 400; cursor: pointer;">
                <input type="checkbox" name="remember_me"> Remember me
              </label>
              <a href="#" style="color: var(--color-primary);">Forgot password?</a>
            </div>

            <button type="submit" class="btn-1" style="width: 100%; text-align: center;">Sign In</button>
          </form>
        </div>

        <div style="text-align: center; font-size: 14px; color: #666;">
          Not a member yet?
          <a href="/membership-application" style="color: var(--color-primary); font-weight: 600;">Apply for Membership</a>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
