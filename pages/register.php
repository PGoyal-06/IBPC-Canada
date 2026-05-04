<?php
/**
 * IBPC Canada — Member Registration
 */
$pageTitle = 'Create Your Account — IBPC Canada';
$pageDescription = 'Join IBPC Canada. Create your account to start your membership application.';
$isHomepage = false;

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

if (isLoggedIn()) {
    $status = $_SESSION['member_status'] ?? '';
    if ($status === 'registered_pending_payment') {
        redirect('/member-register');
    } else {
        redirect('/member-portal');
    }
}

include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Member Registration';
$pageHeaderIcon  = 'user-plus';
$breadcrumbs = [['label' => 'Create Account']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-7 mx-auto">

        <div id="registerStatus" style="display: none; border-radius: var(--border-radius-card); padding: 14px 18px; margin-bottom: 20px; font-size: 14px;"></div>

        <div style="background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 40px; margin-bottom: 30px;">
          <h2 class="section-label">Step 1 of 2</h2>
          <h3 class="section-title" style="font-size: 28px;">Create Account</h3>
          <p style="font-size: 14px; color: #666; margin-bottom: 25px;">Enter your basic details to get started with your membership.</p>

          <form id="registerForm" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group" style="margin-bottom: 20px;">
                  <label for="reg_first_name" style="font-size: 14px; font-weight: 600; display: block; margin-bottom: 5px;">First Name *</label>
                  <input type="text" id="reg_first_name" name="first_name" required
                    style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 15px; font-family: var(--font-family); outline: none;">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group" style="margin-bottom: 20px;">
                  <label for="reg_last_name" style="font-size: 14px; font-weight: 600; display: block; margin-bottom: 5px;">Last Name *</label>
                  <input type="text" id="reg_last_name" name="last_name" required
                    style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 15px; font-family: var(--font-family); outline: none;">
                </div>
              </div>
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
              <label for="reg_email" style="font-size: 14px; font-weight: 600; display: block; margin-bottom: 5px;">Email Address *</label>
              <input type="email" id="reg_email" name="email" required
                style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 15px; font-family: var(--font-family); outline: none;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
              <label for="reg_password" style="font-size: 14px; font-weight: 600; display: block; margin-bottom: 5px;">Password *</label>
              <input type="password" id="reg_password" name="password" required
                style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 15px; font-family: var(--font-family); outline: none;">
            </div>

            <div class="form-group" style="margin-bottom: 24px;">
              <label for="reg_password_confirm" style="font-size: 14px; font-weight: 600; display: block; margin-bottom: 5px;">Confirm Password *</label>
              <input type="password" id="reg_password_confirm" name="password_confirm" required
                style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 15px; font-family: var(--font-family); outline: none;">
            </div>

            <button type="submit" class="btn-1" style="width: 100%; text-align: center;">Continue to Membership Selection</button>
          </form>
        </div>

        <div style="text-align: center; font-size: 14px; color: #666;">
          Already have an account?
          <a href="/login" style="color: var(--color-primary); font-weight: 600;">Sign In</a>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
document.getElementById('registerForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const statusDiv = document.getElementById('registerStatus');
  const submitBtn = this.querySelector('button[type="submit"]');
  const formData = new FormData(this);
  
  // Basic validation
  if (formData.get('password') !== formData.get('password_confirm')) {
    statusDiv.style.display = 'block';
    statusDiv.style.background = '#fff3cd';
    statusDiv.style.border = '1px solid #ffc107';
    statusDiv.style.color = '#856404';
    statusDiv.innerText = 'Passwords do not match.';
    return;
  }
  
  submitBtn.disabled = true;
  submitBtn.innerText = 'Creating account...';
  
  fetch('/api/register.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.location.href = '/member-register';
    } else {
      statusDiv.style.display = 'block';
      statusDiv.style.background = '#f8d7da';
      statusDiv.style.border = '1px solid #f5c6cb';
      statusDiv.style.color = '#721c24';
      statusDiv.innerText = data.message || 'An error occurred. Please try again.';
      submitBtn.disabled = false;
      submitBtn.innerText = 'Continue to Membership Selection';
    }
  })
  .catch(error => {
    console.error('Error:', error);
    statusDiv.style.display = 'block';
    statusDiv.style.background = '#f8d7da';
    statusDiv.style.border = '1px solid #f5c6cb';
    statusDiv.style.color = '#721c24';
    statusDiv.innerText = 'A network error occurred. Please try again.';
    submitBtn.disabled = false;
    submitBtn.innerText = 'Continue to Membership Selection';
  });
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
