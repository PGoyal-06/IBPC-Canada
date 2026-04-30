<?php
/**
 * IBPC Canada — Be a Member (Landing)
 */
$pageTitle = 'Be a Member — IBPC Canada';
$pageDescription = 'Join IBPC Canada and become part of a premier network connecting Indian business professionals across Canada. Explore Diamond, Corporate, and General membership options.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Be a Member';
$pageHeaderIcon  = 'users';
$breadcrumbs = [['label' => 'Be a Member']];
include __DIR__ . '/../includes/page-header.php';
?>

<!-- Intro -->
<section class="sec-about">
  <div class="container">
    <p>IBPC Canada membership opens doors to an exclusive network of Indian business leaders, trade opportunities, and high-impact events across Canada. Whether you are an entrepreneur, executive, or business professional, IBPC Canada has a membership tier tailored to your goals.</p>
    <p>Our members gain access to trade facilitation services, member-only events, the searchable member directory, and a platform to amplify their business in the India-Canada corridor.</p>
    <div class="cta-links">
      <a href="/membership-application">APPLY FOR MEMBERSHIP</a>
      <span class="divider">|</span>
      <a href="/membership-categories">VIEW MEMBERSHIP CATEGORIES</a>
    </div>
  </div>
</section>

<!-- Membership Tiers Overview -->
<section class="page-content" id="tiers">
  <div class="container">
    <h2 class="section-label">Membership</h2>
    <h3 class="section-title">Choose Your Tier</h3>

    <div class="row" style="margin-top: 10px;">

      <!-- Diamond -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card featured" style="border-color: #F39200; background: linear-gradient(135deg, #fff 70%, #fff9f0 100%);">
          <div style="font-size: 48px; margin-bottom: 15px;">💎</div>
          <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 8px; text-transform: none; color: #F39200;">Diamond Member</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">Premier membership for established industry leaders and corporate sponsors seeking maximum visibility and influence.</p>
          <ul style="text-align: left; font-size: 13px; margin-bottom: 20px; padding-left: 0; list-style: none;">
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Featured profile in member directory</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Priority speaking at events</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Exclusive trade mission access</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Logo on all IBPC Canada materials</li>
            <li style="padding: 5px 0;">✔ Dedicated relationship manager</li>
          </ul>
          <a href="/diamond-members" style="color: var(--color-primary); font-weight: 600; font-size: 13px;">View Diamond Members →</a>
        </div>
      </div>

      <!-- Corporate -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card featured">
          <div style="font-size: 48px; margin-bottom: 15px;">🏢</div>
          <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 8px; text-transform: none;">Corporate Member</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">Ideal for companies and SMEs looking to expand their India-Canada trade footprint and network with key stakeholders.</p>
          <ul style="text-align: left; font-size: 13px; margin-bottom: 20px; padding-left: 0; list-style: none;">
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Company profile in member directory</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Access to all events &amp; networking</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Business matchmaking services</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Trade reports &amp; market intelligence</li>
            <li style="padding: 5px 0;">✔ Member-only online portal</li>
          </ul>
          <a href="/corporate-members" style="color: var(--color-primary); font-weight: 600; font-size: 13px;">View Corporate Members →</a>
        </div>
      </div>

      <!-- General / Individual -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card" style="padding: 35px 25px;">
          <div style="font-size: 48px; margin-bottom: 15px;">👤</div>
          <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 8px; text-transform: none;">General Member</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">For individual professionals and entrepreneurs who want to connect with IBPC Canada's growing community.</p>
          <ul style="text-align: left; font-size: 13px; margin-bottom: 20px; padding-left: 0; list-style: none;">
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Personal profile in member directory</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Networking events access</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Access to reports &amp; resources</li>
            <li style="padding: 5px 0; border-bottom: 1px solid #f0f0f0;">✔ Newsletter &amp; updates</li>
            <li style="padding: 5px 0;">✔ Member-only online portal</li>
          </ul>
          <a href="/membership-categories" style="color: var(--color-primary); font-weight: 600; font-size: 13px;">View All Categories →</a>
        </div>
      </div>

    </div>

    <!-- CTA -->
    <div style="text-align: center; margin-top: 20px; padding: 40px; background: var(--color-bg-light); border-radius: var(--border-radius-card);">
      <h3 style="font-size: 24px; margin-bottom: 12px;">Ready to Join?</h3>
      <p style="max-width: 600px; margin: 0 auto 25px; color: #555;">Complete the membership application form and our team will get in touch within 2 business days.</p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="/membership-application" class="btn-1">Apply Now</a>
        <a href="/membership-categories" class="btn-1" style="background: transparent; border: 2px solid var(--color-navy); color: var(--color-navy);">Compare Categories</a>
      </div>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
