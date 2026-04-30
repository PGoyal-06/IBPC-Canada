<?php
/**
 * IBPC Canada — Membership Categories
 */
$pageTitle = 'Membership Categories — IBPC Canada';
$pageDescription = 'Compare IBPC Canada membership tiers — Diamond, Corporate, and General. Find the right membership level for your organization or individual goals.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Membership Categories';
$pageHeaderIcon = 'users';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/be-a-member'], ['label' => 'Membership Categories']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">

    <!-- 1. Intro Section -->
    <h2 class="section-label">Become a Member</h2>
    <h3 class="section-title">Membership Categories</h3>
    <p>IBPC Canada offers three membership tiers designed to meet the needs of individuals, growing businesses, and
      established enterprises. All tiers share the same core mission: accelerating India-Canada trade and building
      lasting professional relationships.</p>

    <!-- 2. Privileges Section -->
    <div style="margin-top: 50px;">
      <h3 class="section-title" style="font-size: 22px; text-align: center;">Members of IBPC Canada Can Enjoy the
        Following Privileges</h3>

      <div class="privileges-grid">
        <div class="privilege-item">
          <div class="priv-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
            </svg>
          </div>
          <h5>Opportunities to Serve the Business Community</h5>
        </div>
        <div class="privilege-item">
          <div class="priv-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>
          </div>
          <h5>Access to Stakeholders in Canada &amp; India</h5>
        </div>
        <div class="privilege-item">
          <div class="priv-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>
          </div>
          <h5>Exclusive Business Workshops &amp; Seminars</h5>
        </div>
        <div class="privilege-item">
          <div class="priv-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
            </svg>
          </div>
          <h5>Trade Delegation &amp; Mission Opportunities</h5>
        </div>
        <div class="privilege-item">
          <div class="priv-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m9.86-2.556a4.5 4.5 0 00-1.242-7.244l4.5-4.5a4.5 4.5 0 016.364 6.364l-1.757 1.757" />
            </svg>
          </div>
          <h5>Network, Influence &amp; Business Connections</h5>
        </div>
        <div class="privilege-item">
          <div class="priv-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
            </svg>
          </div>
          <h5>Policy Advocacy Through Focus Groups &amp; Forums</h5>
        </div>
        <div class="privilege-item">
          <div class="priv-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
            </svg>
          </div>
          <h5>Access to Business &amp; Social Events</h5>
        </div>
        <div class="privilege-item">
          <div class="priv-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>
          </div>
          <h5>Curated Interactions with Experts &amp; Thought Leaders</h5>
        </div>
      </div>
    </div>

    <!-- 3. Membership Tier Cards -->
    <div style="margin-top: 50px;">
      <h3 class="section-title" style="text-align: center;">Choose Your Membership</h3>

      <div class="tier-cards">

        <!-- Diamond -->
        <div class="tier-card tier-card--diamond">
          <div class="tier-card-header">
            <h4>💎 Diamond</h4>
            <span>Premium Enterprise Membership</span>
          </div>
          <div class="tier-card-body">
            <p>For established enterprises seeking maximum visibility, priority access, and strategic positioning within
              the India-Canada business corridor.</p>

            <h6>Key Benefits</h6>
            <ul>
              <li>Featured listing in Member Directory</li>
              <li>Access to all annual events</li>
              <li>Priority trade mission participation</li>
              <li>Priority speaking opportunities at events</li>
              <li>Logo on IBPC Canada materials</li>
              <li>Business matchmaking services</li>
              <li>Dedicated relationship manager</li>
              <li>4 Annual Gala &amp; Awards Dinner tickets</li>
              <li>Full-page advertising in IBPC Canada Magazine</li>
              <li>Premium exhibition space at trade events</li>
              <li>Investment introductions</li>
            </ul>

            <h6>Pricing</h6>
            <ul>
              <li>To be confirmed</li>
            </ul>

            <h6>Required Documents</h6>
            <ul>
              <li>Membership application details to be confirmed</li>
            </ul>
          </div>
          <div class="tier-card-footer">
            <a href="/membership-application" class="btn-1">Apply Now</a>
          </div>
        </div>

        <!-- Corporate -->
        <div class="tier-card tier-card--corporate">
          <div class="tier-card-header">
            <h4>🏢 Corporate</h4>
            <span>Business Membership</span>
          </div>
          <div class="tier-card-body">
            <p>For growing businesses looking to expand their India-Canada trade network, access matchmaking services,
              and participate in trade missions.</p>

            <h6>Key Benefits</h6>
            <ul>
              <li>Standard listing in Member Directory</li>
              <li>Access to all annual events</li>
              <li>Standard trade mission participation</li>
              <li>Standard speaking opportunities at events</li>
              <li>Business matchmaking services</li>
              <li>2 Annual Gala &amp; Awards Dinner tickets</li>
              <li>Half-page advertising in IBPC Canada Magazine</li>
              <li>Standard exhibition space at trade events</li>
              <li>Investment introductions</li>
            </ul>

            <h6>Pricing</h6>
            <ul>
              <li>To be confirmed</li>
            </ul>

            <h6>Required Documents</h6>
            <ul>
              <li>Membership application details to be confirmed</li>
            </ul>
          </div>
          <div class="tier-card-footer">
            <a href="/membership-application" class="btn-1">Apply Now</a>
          </div>
        </div>

        <!-- General -->
        <div class="tier-card tier-card--general">
          <div class="tier-card-header">
            <h4>👤 General</h4>
            <span>Individual Membership</span>
          </div>
          <div class="tier-card-body">
            <p>For professionals and individuals looking to stay connected with the India-Canada business community and
              access networking events.</p>

            <h6>Key Benefits</h6>
            <ul>
              <li>Standard listing in Member Directory</li>
              <li>Access to networking events</li>
              <li>Access to reports &amp; publications</li>
              <li>Newsletter subscription</li>
              <li>Member-only online portal</li>
              <li>1 Annual Gala &amp; Awards Dinner ticket</li>
            </ul>

            <h6>Pricing</h6>
            <ul>
              <li>To be confirmed</li>
            </ul>

            <h6>Required Documents</h6>
            <ul>
              <li>Membership application details to be confirmed</li>
            </ul>
          </div>
          <div class="tier-card-footer">
            <a href="/membership-application" class="btn-1">Apply Now</a>
          </div>
        </div>

      </div>
    </div>

    <!-- 4. Existing Member Login -->
    <div
      style="text-align: center; margin-top: 40px; padding: 25px; background: var(--color-bg-light); border-radius: var(--border-radius-card);">
      <p style="margin: 0; font-size: 15px;">If you are already a member, <a href="/login"
          style="color: var(--color-primary); font-weight: 600; text-decoration: underline;">click here to login</a>.
      </p>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>