<?php
/**
 * IBPC Canada — About Us
 */
$pageTitle = 'About Us — IBPC Canada';
$pageDescription = 'Learn about the India Business & Professional Council Canada, our mission, vision, and commitment to India-Canada bilateral trade.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'About Us';
$pageHeaderIcon = 'info';
$breadcrumbs = [['label' => 'About Us']];
include __DIR__ . '/../includes/page-header.php';
?>

<style>
/* ── About Us — page-scoped design polish ── */

/* Centered section eyebrow (replaces section-label for centered contexts) */
.about-eyebrow {
  display: block;
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  margin-bottom: 10px;
}

/* ── 2. Counter strip ─────────────────────────────── */
.about-counter-strip {
  background: var(--color-bg-testimonial);
  padding: 60px 0;
  text-align: center;
}
.about-counter-strip .acounter-num {
  font-size: 80px;
  font-weight: 700;
  color: var(--color-primary);
  line-height: 1;
  letter-spacing: -3px;
}
.about-counter-strip .acounter-unit {
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  margin-top: 8px;
}
.about-counter-strip .acounter-desc {
  color: #555;
  font-size: 14px;
  max-width: 580px;
  margin: 16px auto 0;
  line-height: 1.75;
}

/* ── 3. Membership strip ─────────────────────────── */
.about-member-strip {
  background: var(--color-navy);
  padding: 36px 0;
  text-align: center;
  border-top: 3px solid var(--color-accent);
}
.about-member-strip p {
  color: rgba(255,255,255,0.82);
  max-width: 760px;
  margin: 0 auto 24px;
  font-size: 15px;
  line-height: 1.75;
}
.about-member-strip .member-quicklinks {
  display: inline-flex;
  gap: 0;
  border: 1px solid rgba(255,255,255,0.25);
  border-radius: var(--border-radius-btn);
  overflow: hidden;
}
.about-member-strip .member-quicklinks a {
  display: inline-block;
  color: var(--color-white);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 12px 28px;
  border-right: 1px solid rgba(255,255,255,0.25);
  transition: background 0.2s ease, color 0.2s ease;
}
.about-member-strip .member-quicklinks a:last-child { border-right: none; }
.about-member-strip .member-quicklinks a:hover {
  background: var(--color-accent);
  color: var(--color-white);
}

/* ── 4. Pillars section ──────────────────────────── */
.about-pillars {
  background: var(--color-bg-light);
  padding: 64px 0;
  text-align: center;
}
.about-pillars .pillar-lead {
  max-width: 620px;
  margin: 0 auto 48px;
  color: #555;
  font-size: 15px;
  line-height: 1.75;
}

/* ── 5+6. Vision / Mission split layout ──────────── */
.about-vm-section {
  background: var(--color-white);
  padding: 64px 0;
}
.about-vm-block {
  padding: 36px 40px;
  border-top: 4px solid var(--color-accent);
  background: var(--color-bg-light);
  border-radius: var(--border-radius-card);
  height: 100%;
}
.about-vm-block.mission-block { border-top-color: var(--color-primary); }
.about-vm-block .vm-eyebrow {
  display: block;
  font-size: 10px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  margin-bottom: 12px;
}
.about-vm-block.mission-block .vm-eyebrow { color: var(--color-primary); }
.about-vm-block h3 {
  font-size: 24px;
  margin-bottom: 14px;
  line-height: 1.2;
}
.about-vm-block p {
  font-size: 15px;
  line-height: 1.8;
  color: #444;
  margin: 0;
}

/* ── 7. Photo section ─────────────────────────────── */
.about-photo-wrap {
  position: relative;
  overflow: hidden;
  max-height: 440px;
  line-height: 0;
}
.about-photo-wrap img {
  width: 100%;
  display: block;
  max-height: 440px;
  object-fit: cover;
  object-position: center top;
}
.about-photo-wrap .photo-caption {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 48px 24px 22px;
  background: linear-gradient(to top, rgba(15,31,74,0.82) 0%, transparent 100%);
  text-align: center;
  font-size: 12px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 600;
  color: rgba(255,255,255,0.88);
  line-height: 1.4;
}

/* ── 8. Values section ────────────────────────────── */
.about-values-section {
  background: var(--color-bg-light);
  padding: 64px 0;
}
.about-values-section .section-title { margin-bottom: 40px; }

/* ── What We Do checklist grid ────────────────────── */
.about-whatwedo {
  background: var(--color-white);
  padding: 64px 0;
}
.whatwedo-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
  margin-top: 36px;
}
.whatwedo-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  padding: 18px 20px;
  background: var(--color-bg-light);
  border-radius: var(--border-radius-card);
  border-left: 3px solid var(--color-accent);
}
.whatwedo-item .wd-icon {
  width: 34px;
  height: 34px;
  flex-shrink: 0;
  background: var(--color-primary);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.whatwedo-item .wd-icon svg {
  width: 15px;
  height: 15px;
  stroke: var(--color-white);
  fill: none;
  stroke-width: 2.5;
  stroke-linecap: round;
  stroke-linejoin: round;
}
.whatwedo-item .wd-text {
  font-size: 14px;
  line-height: 1.65;
  color: #333;
  font-weight: 500;
  padding-top: 6px;
}

/* ── Responsive ─────────────────────────────────────── */
@media (max-width: 991px) {
  .about-vm-block { padding: 28px 28px; }
}
@media (max-width: 767px) {
  .about-counter-strip .acounter-num { font-size: 64px; }
  .about-vm-block { margin-bottom: 20px; }
  .whatwedo-grid { grid-template-columns: 1fr; }
  .about-member-strip .member-quicklinks { flex-direction: column; border-radius: 0; }
  .about-member-strip .member-quicklinks a { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.2); }
  .about-member-strip .member-quicklinks a:last-child { border-bottom: none; }
}
@media (max-width: 575px) {
  .about-counter-strip .acounter-num { font-size: 52px; }
  .about-pillars, .about-vm-section, .about-values-section, .about-whatwedo { padding: 48px 0; }
}
</style>

<!-- 1. About Intro -->
<section class="sec-about">
  <div class="container">
    <p>The India Business &amp; Professional Council (IBPC) Canada is a premier member-based business association representing Indian businessmen and professionals across Canada. We serve as a trusted facilitator for India-Canada bilateral trade and economic relationships.</p>
    <p>Established to strengthen the growing economic partnership between India and Canada, IBPC Canada provides a dynamic platform for networking, business matchmaking, trade facilitation, and knowledge exchange. Our members include industry leaders, entrepreneurs, executives, and professionals spanning diverse sectors.</p>
    <p>Through strategic initiatives, high-impact events, and thought leadership, IBPC Canada actively promotes cross-border investment, innovation, and collaboration — contributing to the prosperity of both nations and the Indian diaspora in Canada.</p>
  </div>
</section>

<!-- 2. Annual Events Counter -->
<div class="about-counter-strip">
  <div class="container">
    <div class="acounter-num" aria-label="4 plus annual events and trade missions"><span class="counter">4</span>+</div>
    <div class="acounter-unit">Annual Events &amp; Trade Missions</div>
    <p class="acounter-desc">IBPC Canada organizes flagship conferences, networking galas, trade missions, and webinars each year — connecting professionals and fostering cross-border business opportunities between India and Canada.</p>
  </div>
</div>

<!-- 3. Membership Info + TIERS | FEES | BENEFITS Quick Links -->
<div class="about-member-strip">
  <div class="container">
    <p>IBPC Canada membership opens doors to an exclusive network of Indian business leaders, trade facilitation services, and high-impact events. We offer membership tiers designed for individuals, growing businesses, and established enterprises — all united by a shared commitment to India-Canada prosperity.</p>
    <div class="member-quicklinks">
      <a href="/membership-categories">Tiers</a>
      <a href="/membership-categories#fees">Fees</a>
      <a href="/membership-categories#benefits">Benefits</a>
    </div>
  </div>
</div>

<!-- 4. Mission-Focused Section (Pillars / Timeline Replacement) -->
<section class="about-pillars">
  <div class="container">
    <span class="about-eyebrow">Our Pillars</span>
    <h3 class="section-title">What Drives Us</h3>
    <p class="pillar-lead">IBPC Canada is built on four foundational pillars that guide every initiative, partnership, and event we undertake.</p>
    <div class="row justify-content-center">
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h5>Trade Facilitation</h5>
          <p>Creating direct pathways for business between India and Canada through matchmaking, missions, and market intelligence.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h5>Community Building</h5>
          <p>Uniting Indian professionals across Canada into a cohesive, supportive, and high-impact business community.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <h5>Thought Leadership</h5>
          <p>Elevating the voice of the Indian business diaspora through events, advocacy, and policy engagement in Canada.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <h5>Bilateral Growth</h5>
          <p>Driving investment, innovation, and collaboration that benefits both nations and strengthens the India-Canada corridor.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5 + 6. Vision + Mission (combined two-column layout) -->
<section class="about-vm-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <div class="about-vm-block">
          <span class="vm-eyebrow">Vision</span>
          <h3>Our Vision</h3>
          <p>To be the most trusted and influential India-Canada business council, recognized for fostering innovation, driving cross-border investments, and building lasting professional relationships that benefit both nations.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-vm-block mission-block">
          <span class="vm-eyebrow">Mission</span>
          <h3>Our Mission</h3>
          <p>To serve as a premier platform connecting Indian business professionals in Canada with opportunities for bilateral trade, investment, and collaboration. IBPC Canada facilitates meaningful partnerships that contribute to economic growth in both India and Canada.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7. Photo Section -->
<div class="about-photo-wrap">
  <img src="<?php echo IMG_URL; ?>/home/members-group.png" alt="IBPC Canada Members">
  <div class="photo-caption">IBPC Canada Members &mdash; Building Bridges Between India &amp; Canada</div>
</div>

<!-- 8. Our Values (8 icon cards) -->
<section class="about-values-section">
  <div class="container text-center">
    <span class="about-eyebrow">What We Stand For</span>
    <h3 class="section-title">Our Values</h3>
    <div class="row justify-content-center mt-2">
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h5>Ethical Behaviour</h5>
          <p>We uphold the highest standards of ethics and transparency in all our dealings.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3H8a2 2 0 00-2 2v2h12V5a2 2 0 00-2-2z"/></svg>
          </div>
          <h5>Good Governance</h5>
          <p>We operate with accountability, fairness, and sound decision-making at every level.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
          </div>
          <h5>Trust</h5>
          <p>We build lasting relationships founded on reliability, honesty, and mutual respect.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <h5>Credibility</h5>
          <p>We strive for quality in every initiative, event, and member interaction.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
          </div>
          <h5>Inclusivity</h5>
          <p>We welcome professionals from all industries and backgrounds.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h5>Community Social Responsibility</h5>
          <p>We invest in the communities we serve, creating shared value beyond business.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h5>Teamwork</h5>
          <p>We believe in the power of partnerships and collective action to achieve shared goals.</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 mb-4">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
          </div>
          <h5>Sustainability</h5>
          <p>We pursue long-term impact that is socially responsible and environmentally mindful.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- What We Do -->
<section class="about-whatwedo">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 text-center">
        <span class="about-eyebrow">Our Work</span>
        <h3 class="section-title">What We Do</h3>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <div class="whatwedo-grid">
          <div class="whatwedo-item">
            <div class="wd-icon">
              <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <span class="wd-text">Organize trade missions, conferences, and networking events</span>
          </div>
          <div class="whatwedo-item">
            <div class="wd-icon">
              <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <span class="wd-text">Facilitate business matchmaking between Indian and Canadian companies</span>
          </div>
          <div class="whatwedo-item">
            <div class="wd-icon">
              <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            </div>
            <span class="wd-text">Provide market intelligence, reports, and legislative updates</span>
          </div>
          <div class="whatwedo-item">
            <div class="wd-icon">
              <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <span class="wd-text">Advocate for policies that strengthen India-Canada economic ties</span>
          </div>
          <div class="whatwedo-item">
            <div class="wd-icon">
              <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <span class="wd-text">Support the Indian diaspora professional community in Canada</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9. Leadership Speaks -->
<section class="sec-testimonials section-padding" id="leadershipSpeaks">
  <div class="container">
    <h2 class="section-label">Voices</h2>
    <h3 class="section-title">Leadership Speaks</h3>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="testimonial-carousel owl-carousel owl-theme">

          <div class="testimonial-item">
            <div class="img-contr">
              <img src="https://ui-avatars.com/api/?name=Rajiv+Mehta&size=150&background=1F3D8C&color=fff" alt="Rajiv Mehta">
            </div>
            <p class="quote">"IBPC Canada has been instrumental in bridging the gap between Indian and Canadian businesses. The networking opportunities and trade facilitation services are unparalleled."</p>
            <p class="name">Rajiv Mehta</p>
            <p class="role">Chairman, IBPC Canada</p>
          </div>

          <div class="testimonial-item">
            <div class="img-contr">
              <img src="https://ui-avatars.com/api/?name=Priya+Sharma&size=150&background=1F3D8C&color=fff" alt="Priya Sharma">
            </div>
            <p class="quote">"As a member, I've gained invaluable connections that have directly contributed to our company's expansion into the Indian market. IBPC Canada is a must-join for any serious business professional."</p>
            <p class="name">Priya Sharma</p>
            <p class="role">Vice President, IBPC Canada</p>
          </div>

          <div class="testimonial-item">
            <div class="img-contr">
              <img src="https://ui-avatars.com/api/?name=Anil+Kapoor&size=150&background=1F3D8C&color=fff" alt="Anil Kapoor">
            </div>
            <p class="quote">"The India-Canada trade corridor is one of the most promising in the world. IBPC Canada stands at the forefront, creating pathways for meaningful business collaboration."</p>
            <p class="name">Anil Kapoor</p>
            <p class="role">Secretary General, IBPC Canada</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
