<?php
/**
 * IBPC Canada — Renew Membership
 */
$pageTitle = 'Renew Membership — IBPC Canada';
$pageDescription = 'Renew your IBPC Canada membership to continue enjoying all member benefits and stay connected to the India-Canada business network.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Renew Membership';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/be-a-member'], ['label' => 'Renew Membership']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">

        <h2 class="section-label">Stay Connected</h2>
        <h3 class="section-title">Renew Your Membership</h3>
        <p>Renewing your IBPC Canada membership ensures uninterrupted access to member events, the member directory, trade resources, and our growing Canada-India business network.</p>

        <div style="background: var(--color-bg-light); border-radius: var(--border-radius-card); padding: 20px; margin-bottom: 25px; font-size: 14px;">
          <strong>Renewal Reminder:</strong> Memberships expire annually. Renewing at least 30 days before expiry ensures seamless access. Contact us if your membership has already lapsed.
        </div>

        <form id="renewalForm" method="POST" novalidate style="background: var(--color-white); border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); padding: 30px;">
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
                <label for="membership_id">Membership ID</label>
                <input type="text" id="membership_id" name="membership_id" placeholder="e.g. IBPC-2025-0042">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Renewal Tier *</label>
                <select name="tier" required style="width: 100%; border: 1px solid #ddd; border-radius: 3px; padding: 10px 14px; font-size: 14px; font-family: var(--font-family); background: #fff; outline: none;">
                  <option value="">Select tier</option>
                  <option value="diamond">💎 Diamond</option>
                  <option value="corporate">🏢 Corporate</option>
                  <option value="general">👤 General</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Notes (optional)</label>
            <textarea id="message" name="message" rows="3" placeholder="Any changes to your details or special requests..."></textarea>
          </div>
          <button type="submit" class="btn-1">Submit Renewal Request</button>
          <p style="font-size: 12px; color: #888; margin-top: 12px;">Our team will contact you with payment instructions within 1 business day.</p>
        </form>

      </div>

      <div class="col-lg-4 offset-lg-1">
        <div style="position: sticky; top: 110px;">
          <h4 style="font-size: 17px; text-transform: none; font-weight: 700; margin-bottom: 15px;">Why Renew?</h4>
          <ul style="list-style: none; padding: 0; font-size: 14px; line-height: 2;">
            <li>✔ Continued access to IBPC Canada events</li>
            <li>✔ Stay listed in the Member Directory</li>
            <li>✔ Receive the quarterly Business Review magazine</li>
            <li>✔ Access trade reports &amp; legislations</li>
            <li>✔ Exclusive business matchmaking services</li>
            <li>✔ Networking with 200+ member companies</li>
          </ul>
          <p style="font-size: 13px; margin-top: 20px; color: #666;">
            Questions? Contact us at <a href="mailto:<?php echo OFFICE_EMAIL; ?>" style="color: var(--color-primary);"><?php echo OFFICE_EMAIL; ?></a>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
