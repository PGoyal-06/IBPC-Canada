<?php
/**
 * IBPC Canada — Homepage
 * Sections per PRD §3.1: Hero, About, Stats, Events, Member, Stats2, CTA, Testimonials, Contact, Map, Footer
 */
$pageTitle = 'IBPC Canada — India Business & Professional Council';
$pageDescription = 'IBPC Canada connects Indian business professionals in Canada, facilitating India-Canada bilateral trade and economic partnerships.';
$isHomepage = true;
include __DIR__ . '/includes/header.php';
?>

<!-- ============================================================
     SECTION 1: HERO CAROUSEL
     ============================================================ -->
<section class="sec-hero" id="heroCarousel">
  <div class="hero-carousel owl-carousel owl-theme">

    <div class="slide" style="background-image: url('/bannerimg/banner1.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner">
              <h1>India-Canada Business Networking Reception</h1>
              <p>March 15, 2026 — Toronto, ON</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url('/bannerimg/banner2.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner">
              <h2>India-Canada Trade Summit 2026</h2>
              <p>January 28, 2026 — Vancouver, BC</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url('/bannerimg/banner3.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner">
              <h2>Annual IBPC Canada Gala Dinner</h2>
              <p>November 10, 2025 — Toronto, ON</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     SECTION 2: ABOUT IBPC CANADA (Dark Red Band)
     ============================================================ -->
<section class="sec-about" id="aboutSection">
  <div class="container">
    <p>The India Business &amp; Professional Council (IBPC) Canada is a premier member-based business association
      representing Indian businessmen and professionals across Canada. We serve as a trusted facilitator for
      India-Canada bilateral trade and economic relationships.</p>

    <p>Established to strengthen the growing economic partnership between India and Canada, IBPC Canada provides a
      dynamic platform for networking, business matchmaking, trade facilitation, and knowledge exchange. Our members
      include industry leaders, entrepreneurs, executives, and professionals spanning diverse sectors.</p>

    <p>Through strategic initiatives, high-impact events, and thought leadership, IBPC Canada actively promotes
      cross-border investment, innovation, and collaboration — contributing to the prosperity of both nations and the
      Indian diaspora in Canada.</p>

    <div class="cta-links">
      <a href="/about-us">Learn More About IBPC Canada</a>
      <span class="divider">|</span>
      <a href="/membership-application">Become a Member</a>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 3: TRADE STATISTICS (Animated Counters)
     ============================================================ -->
<section class="sec-stats" id="tradeStats">
  <div class="container">
    <div class="row">

      <div class="col-lg col-md-4 col-sm-6 col-12">
        <div class="stat-item">
          <div class="stat-label">India-Canada<br>Bilateral Trade</div>
          <div class="stat-number" aria-label="$12 Billion plus CAD annually">$<span class="counter">12</span>B+</div>
          <div class="stat-unit">CAD Annually</div>
        </div>
      </div>

      <div class="col-lg col-md-4 col-sm-6 col-12">
        <div class="stat-item">
          <div class="stat-label">CECA<br>Projected Growth</div>
          <div class="stat-number" aria-label="50 percent trade increase"><span class="counter">50</span>%</div>
          <div class="stat-unit">Trade Increase</div>
        </div>
      </div>

      <div class="col-lg col-md-4 col-sm-6 col-12">
        <div class="stat-item">
          <div class="stat-label">Indian Diaspora<br>in Canada</div>
          <div class="stat-number" aria-label="1.8 Million plus professionals and families"><span
              class="counter">1.8</span>M+</div>
          <div class="stat-unit">Professionals &amp; Families</div>
        </div>
      </div>

      <div class="col-lg col-md-4 col-sm-6 col-12">
        <div class="stat-item">
          <div class="stat-label">Canada's Export<br>Rank to India</div>
          <div class="stat-number" aria-label="Number 12 trading partner">#<span class="counter">12</span></div>
          <div class="stat-unit">Trading Partner</div>
        </div>
      </div>

      <div class="col-lg col-md-4 col-sm-6 col-12">
        <div class="stat-item">
          <div class="stat-label">Tariff Reductions<br>Under CECA</div>
          <div class="stat-number" aria-label="90 percent on key goods"><span class="counter">90</span>%</div>
          <div class="stat-unit">On Key Goods</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 4: PAST EVENTS
     ============================================================ -->
<section class="sec-events section-padding" id="pastEvents">
  <div class="container">

    <h2 class="section-label">Events</h2>
    <h3 class="section-title">Past Events</h3>

    <div class="row">

      <!-- Event Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="event-card">
          <div class="img-contr">
            <a href="#"><img src="<?php echo IMG_URL; ?>/home/event1.png" alt="Business Innovation Forum"></a>
          </div>
          <div class="card-body">
            <div class="lead-section">
              <h4 class="section-name">
                <span class="badge-type">PHYSICAL</span>
                Feb 20, 2026 — 6:00 PM EST
              </h4>
              <p class="desc-text"><a href="#">India-Canada Business Innovation Forum 2026</a></p>
            </div>
            <ul class="category-info">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <rect x="3" y="4" width="18" height="18" rx="2" />
                  <line x1="16" y1="2" x2="16" y2="6" />
                  <line x1="8" y1="2" x2="8" y2="6" />
                  <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
                February 20, 2026
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                Metro Toronto Convention Centre
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Event Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="event-card">
          <div class="img-contr">
            <a href="#"><img src="<?php echo IMG_URL; ?>/home/event2.png" alt="Virtual Business Webinar"></a>
          </div>
          <div class="card-body">
            <div class="lead-section">
              <h4 class="section-name">
                <span class="badge-type">VIRTUAL</span>
                Jan 15, 2026 — 2:00 PM EST
              </h4>
              <p class="desc-text"><a href="#">Webinar: Expanding Your Business to India</a></p>
            </div>
            <ul class="category-info">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <rect x="3" y="4" width="18" height="18" rx="2" />
                  <line x1="16" y1="2" x2="16" y2="6" />
                  <line x1="8" y1="2" x2="8" y2="6" />
                  <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
                January 15, 2026
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                Online (Zoom)
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Event Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="event-card">
          <div class="img-contr">
            <a href="#"><img src="/bannerimg/banner3.png" alt="Annual Gala Dinner"></a>
          </div>
          <div class="card-body">
            <div class="lead-section">
              <h4 class="section-name">
                <span class="badge-type">PHYSICAL</span>
                Nov 10, 2025 — 7:00 PM EST
              </h4>
              <p class="desc-text"><a href="#">IBPC Canada Annual Gala Dinner 2025</a></p>
            </div>
            <ul class="category-info">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <rect x="3" y="4" width="18" height="18" rx="2" />
                  <line x1="16" y1="2" x2="16" y2="6" />
                  <line x1="8" y1="2" x2="8" y2="6" />
                  <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
                November 10, 2025
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                Fairmont Royal York, Toronto
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 5: BE A MEMBER
     ============================================================ -->
<section class="sec-be-member" id="beAMember">
  <div class="container">
    <h2 class="section-label">Membership</h2>
    <h3 class="section-title">Be a Member</h3>
    <p>Join IBPC Canada's growing community of business leaders, entrepreneurs, and professionals driving India-Canada
      bilateral trade. As a member, you gain access to exclusive networking events, trade delegations, business
      matchmaking, and industry insights that open doors to new markets and partnerships.</p>
    <div class="member-photo">
      <img src="<?php echo IMG_URL; ?>/home/members-group.png" alt="IBPC Canada Members">
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 6: SECONDARY STAT COUNTER
     ============================================================ -->
<section class="sec-stats alt-bg" id="statsSingle">
  <div class="container text-center">
    <div class="stat-item">
      <div class="stat-number" aria-label="4 plus annual events and trade missions"><span class="counter">4</span>+
      </div>
      <div class="stat-unit" style="font-size:18px; margin-top:10px;">Annual Events &amp; Trade Missions</div>
    </div>
    <p style="max-width:700px; margin:15px auto 0;">IBPC Canada organizes flagship conferences, networking galas, trade
      missions, and webinars each year — connecting professionals and fostering cross-border business opportunities
      between India and Canada.</p>
  </div>
</section>

<!-- ============================================================
     SECTION 7: CTA BANNER (Join Network)
     ============================================================ -->
<section class="sec-cta-banner" id="ctaBanner"
  style="background-image: url('<?php echo IMG_URL; ?>/home/cta-banner-bg.png');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-6">
        <h3>Become a Part of<br>IBPC Canada's Growing Network</h3>
        <a href="/membership-application" class="btn-1">Become a Member</a>
      </div>
      <div class="col-lg-2 col-md-12 text-center my-3">
        <div class="cta-logo">
          <img src="<?php echo IMG_URL; ?>/global/logo-color.png" alt="IBPC Canada">
        </div>
      </div>
      <div class="col-lg-5 col-md-6 text-end">
        <!-- Flags / imagery area — can add flag PNGs here -->
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 8: LEADERSHIP SPEAKS (Testimonials)
     ============================================================ -->
<section class="sec-testimonials section-padding" id="leadershipSpeaks">
  <div class="container">
    <h2 class="section-label">Voices</h2>
    <h3 class="section-title">Leadership Speaks</h3>

    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="testimonial-carousel owl-carousel owl-theme">

          <div class="testimonial-item">
            <div class="img-contr">
              <img src="https://ui-avatars.com/api/?name=Rajiv+Mehta&size=150&background=1F3D8C&color=fff"
                alt="Rajiv Mehta">
            </div>
            <p class="quote">"IBPC Canada has been instrumental in bridging the gap between Indian and Canadian
              businesses. The networking opportunities and trade facilitation services are unparalleled."</p>
            <p class="name">Rajiv Mehta</p>
            <p class="role">Chairman, IBPC Canada</p>
          </div>

          <div class="testimonial-item">
            <div class="img-contr">
              <img src="https://ui-avatars.com/api/?name=Priya+Sharma&size=150&background=1F3D8C&color=fff"
                alt="Priya Sharma">
            </div>
            <p class="quote">"As a member, I've gained invaluable connections that have directly contributed to our
              company's expansion into the Indian market. IBPC Canada is a must-join for any serious business
              professional."</p>
            <p class="name">Priya Sharma</p>
            <p class="role">Vice President, IBPC Canada</p>
          </div>

          <div class="testimonial-item">
            <div class="img-contr">
              <img src="https://ui-avatars.com/api/?name=Anil+Kapoor&size=150&background=1F3D8C&color=fff"
                alt="Anil Kapoor">
            </div>
            <p class="quote">"The India-Canada trade corridor is one of the most promising in the world. IBPC Canada
              stands at the forefront, creating pathways for meaningful business collaboration."</p>
            <p class="name">Anil Kapoor</p>
            <p class="role">Secretary General, IBPC Canada</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 9: GET IN TOUCH + CONTACT INFO
     ============================================================ -->
<section class="sec-contact section-padding" id="contactSection">
  <div class="container">
    <div class="row">

      <!-- Left: Contact Form -->
      <div class="col-lg-7 col-md-6">
        <h2 class="section-label">Reach Out</h2>
        <h3 class="section-title">Get In Touch</h3>

        <form id="contactForm" method="POST" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="full_name">Full Name *</label>
                <input type="text" id="full_name" name="full_name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="company">Company *</label>
                <input type="text" id="company" name="company" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="phone">Phone *</label>
                <input type="tel" id="phone" name="phone" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5"></textarea>
          </div>

          <!-- reCAPTCHA v3 Hidden Token -->
          <input type="hidden" name="recaptcha_token" id="recaptcha_token">

          <button type="submit" class="btn-1">Submit</button>
        </form>
      </div>

      <!-- Right: Contact Info -->
      <div class="col-lg-4 offset-lg-1 col-md-6">
        <h2 class="section-label">Info</h2>
        <h3 class="section-title">Contact Us</h3>

        <!-- Staff Contact -->
        <div class="contact-staff">
          <div class="staff-photo">
            <img src="<?php echo IMG_URL; ?>/contact/contact.jpg"
              alt="IBPC Office">
          </div>
          <div class="staff-info">
            <div class="staff-name">IBPC Canada Office</div>
            <div class="staff-role">General Inquiries</div>
            <div class="staff-email"><a href="mailto:<?php echo OFFICE_EMAIL; ?>"><?php echo OFFICE_EMAIL; ?></a></div>
          </div>
        </div>

        <div class="contact-detail">
          <strong>Postal Address</strong>
          <?php echo OFFICE_ADDRESS; ?>
        </div>

        <div class="contact-detail">
          <strong>Phone</strong>
          <a href="tel:<?php echo OFFICE_PHONE; ?>"><?php echo OFFICE_PHONE; ?></a>
        </div>

        <div class="contact-detail">
          <strong>Mobile</strong>
          <a href="tel:<?php echo OFFICE_MOBILE; ?>"><?php echo OFFICE_MOBILE; ?></a>
        </div>

        <div class="contact-detail">
          <strong>Email</strong>
          <a href="mailto:<?php echo OFFICE_EMAIL; ?>"><?php echo OFFICE_EMAIL; ?></a>
        </div>

        <div class="contact-detail">
          <strong>Office Timings</strong>
          <?php echo OFFICE_HOURS; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 10: GOOGLE MAPS EMBED
     ============================================================ -->
<section class="sec-map" id="mapSection">
  <iframe
    src="<?php echo GMAPS_EMBED_URL; ?>"
    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade" title="IBPC Canada Office Location">
  </iframe>
</section>

<!-- ============================================================
     SECTION 11: FOOTER (included globally)
     ============================================================ -->
<!-- Google reCAPTCHA v3 -->
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo RECAPTCHA_SITE_KEY; ?>"></script>
<script>var RECAPTCHA_SITE_KEY = '<?php echo RECAPTCHA_SITE_KEY; ?>';</script>

<!-- EmailJS SDK -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script>
  var EMAILJS_SERVICE_ID  = '<?php echo EMAILJS_SERVICE_ID; ?>';
  var EMAILJS_TEMPLATE_ID = '<?php echo EMAILJS_TEMPLATE_ID; ?>';
  var EMAILJS_PUBLIC_KEY   = '<?php echo EMAILJS_PUBLIC_KEY; ?>';
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>