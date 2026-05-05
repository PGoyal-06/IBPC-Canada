<?php
/**
 * IBPC Canada — Reset Password Page
 */
$pageTitle = 'Reset Password — IBPC Canada';
$pageDescription = 'Set a new password for your IBPC Canada account.';
$isHomepage = false;

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/db.php';

$token = $_GET['token'] ?? '';
$isValid = false;

if ($token) {
    $tokenHash = hash('sha256', $token);
    
    $stmt = $pdo->prepare("SELECT id FROM password_resets WHERE token_hash = ? AND used_at IS NULL AND expires_at > NOW() LIMIT 1");
    $stmt->execute([$tokenHash]);
    if ($stmt->fetch()) {
        $isValid = true;
    }
}

include __DIR__ . '/../includes/header.php';
?>

<section class="login-section" style="padding: 100px 0; background: #f9f9f9; min-height: 80vh; display: flex; align-items: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="login-card" style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
          <div class="login-header" style="text-align: center; margin-bottom: 30px;">
            <h2 style="color: #1F3D8C; font-weight: 700; margin-bottom: 10px;">Reset Password</h2>
          </div>

          <?php if (!$isValid): ?>
            <div class="alert alert-danger" style="background: #fee2e2; border: 1px solid #fecaca; color: #991b1b; padding: 15px; border-radius: 4px; margin-bottom: 20px; font-size: 14px; text-align: center;">
              This reset link is invalid or has expired. Please <a href="/forgot-password" style="color: #991b1b; font-weight: 700; text-decoration: underline;">request a new one</a>.
            </div>
          <?php else: ?>
            <p style="color: #666; font-size: 14px; text-align: center; margin-bottom: 25px;">Please enter your new password below.</p>
            
            <form action="/api/reset-password" method="POST" id="resetPasswordForm">
              <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
              
              <div class="form-group" style="margin-bottom: 20px;">
                <label for="new_password" style="display: block; font-size: 13px; font-weight: 600; color: #333; margin-bottom: 8px;">New Password</label>
                <input type="password" name="new_password" id="new_password" required minlength="8" placeholder="Minimum 8 characters" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
              </div>

              <div class="form-group" style="margin-bottom: 25px;">
                <label for="confirm_password" style="display: block; font-size: 13px; font-weight: 600; color: #333; margin-bottom: 8px;">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required minlength="8" placeholder="Repeat your new password" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
              </div>

              <button type="submit" class="btn-1" style="width: 100%; padding: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Reset Password</button>
            </form>
          <?php endif; ?>

          <div class="login-footer" style="text-align: center; margin-top: 25px; pt-15; border-top: 1px solid #eee; padding-top: 20px;">
            <p style="color: #666; font-size: 14px;">Back to <a href="/login" style="color: #1F3D8C; font-weight: 600; text-decoration: none;">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
