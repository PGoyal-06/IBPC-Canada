<?php
/**
 * IBPC Canada — Membership Application
 */
$pageTitle = 'Membership Application — IBPC Canada';
$pageDescription = 'Apply to join IBPC Canada. Complete the membership application form to connect with Canada\'s leading India-focused business network.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Membership Application';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/be-a-member'], ['label' => 'Membership Application']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="sec-contact section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <h2 class="section-label">Join IBPC Canada</h2>
        <h3 class="section-title">Membership Application</h3>
        <p style="margin-bottom: 30px;">Fill out the form below and our membership team will contact you within 2 business days to discuss the best tier for your needs and guide you through the onboarding process.</p>

        <form id="membershipForm" method="POST" action="/api/membership.php" novalidate>

          <h4 style="font-size: 16px; text-transform: none; font-weight: 700; margin-bottom: 15px; padding-bottom: 8px; border-bottom: 2px solid var(--color-bg-light);">Personal Information</h4>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="full_name">Full Name *</label>
                <input type="text" id="full_name" name="full_name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="city">City / Province *</label>
                <input type="text" id="city" name="city" placeholder="e.g. Toronto, ON" required>
              </div>
            </div>
          </div>

          <h4 style="font-size: 16px; text-transform: none; font-weight: 700; margin: 25px 0 15px; padding-bottom: 8px; border-bottom: 2px solid var(--color-bg-light);">Professional Details</h4>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="company">Company / Organisation *</label>
                <input type="text" id="company" name="company" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="designation">Designation / Title *</label>
                <input type="text" id="designation" name="designation" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="industry">Industry / Sector *</label>
                <select id="industry" name="industry" required style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 14px; font-family: var(--font-family); background: #fff; color: var(--color-body); outline: none;">
                  <option value="">Select an industry</option>
                  <option value="Technology & IT">Technology &amp; IT</option>
                  <option value="Finance & Banking">Finance &amp; Banking</option>
                  <option value="Healthcare & Pharma">Healthcare &amp; Pharma</option>
                  <option value="Real Estate">Real Estate</option>
                  <option value="Clean Energy">Clean Energy</option>
                  <option value="Education">Education</option>
                  <option value="Legal Services">Legal Services</option>
                  <option value="Manufacturing">Manufacturing</option>
                  <option value="Food & Beverage">Food &amp; Beverage</option>
                  <option value="Logistics & Supply Chain">Logistics &amp; Supply Chain</option>
                  <option value="Government / Public Sector">Government / Public Sector</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="website">Company Website</label>
                <input type="url" id="website" name="website" placeholder="https://">
              </div>
            </div>
          </div>

          <h4 style="font-size: 16px; text-transform: none; font-weight: 700; margin: 25px 0 15px; padding-bottom: 8px; border-bottom: 2px solid var(--color-bg-light);">Membership Preference</h4>
          <div class="form-group">
            <label>Preferred Membership Tier *</label>
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 8px;">
              <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; font-weight: 400; font-size: 14px;">
                <input type="radio" name="membership_tier" value="diamond" required> 💎 Diamond
              </label>
              <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; font-weight: 400; font-size: 14px;">
                <input type="radio" name="membership_tier" value="corporate"> 🏢 Corporate
              </label>
              <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; font-weight: 400; font-size: 14px;">
                <input type="radio" name="membership_tier" value="general"> 👤 General
              </label>
            </div>
            <p style="font-size: 12px; color: #888; margin-top: 6px;">
              Not sure? <a href="/membership-categories" style="color: var(--color-primary);">Compare categories</a>.
            </p>
          </div>

          <div class="form-group">
            <label for="message">Tell Us About Yourself</label>
            <textarea id="message" name="message" rows="4" placeholder="Brief background, business goals, and how you hope to benefit from IBPC Canada membership..."></textarea>
          </div>

          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div>
          </div>

          <button type="submit" class="btn-1">Submit Application</button>

        </form>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
