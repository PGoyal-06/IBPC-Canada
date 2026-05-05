<?php
/**
 * IBPC Canada — Forgot Password Page
 */
$pageTitle = 'Forgot Password — IBPC Canada';
$pageDescription = 'Reset your IBPC Canada account password.';
$isHomepage = false;

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// If user is already logged in, redirect to portal
if (isLoggedIn()) {
    redirect('/member-portal');
}

include __DIR__ . '/../includes/header.php';
?>

<section class="login-section" style="padding: 100px 0; background: #f9f9f9; min-height: 80vh; display: flex; align-items: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="login-card" style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
          <div class="login-header" style="text-align: center; margin-bottom: 30px;">
            <h2 style="color: #1F3D8C; font-weight: 700; margin-bottom: 10px;">Forgot Password</h2>
            <p style="color: #666; font-size: 14px;">Enter your email address and we’ll send you a password reset link if an account exists.</p>
          </div>

          <?php if (isset($_GET['sent'])): ?>
            <div class="alert alert-success" style="background: #e8f5e9; border: 1px solid #c8e6c9; color: #2e7d32; padding: 15px; border-radius: 4px; margin-bottom: 20px; font-size: 14px;">
              If an account exists for that email, a password reset link has been sent.
            </div>
          <?php endif; ?>

          <form action="/api/forgot-password" method="POST" id="forgotPasswordForm">
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="email" style="display: block; font-size: 13px; font-weight: 600; color: #333; margin-bottom: 8px;">Email Address</label>
              <input type="email" name="email" id="email" required placeholder="name@example.com" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
            </div>

            <button type="submit" class="btn-1" style="width: 100%; padding: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Send Reset Link</button>
          </form>

          <div class="login-footer" style="text-align: center; margin-top: 25px; pt-15; border-top: 1px solid #eee; padding-top: 20px;">
            <p style="color: #666; font-size: 14px;">Remembered your password? <a href="/login" style="color: #1F3D8C; font-weight: 600; text-decoration: none;">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
