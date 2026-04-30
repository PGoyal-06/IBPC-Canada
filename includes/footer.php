<!-- ============================================================
     IBPC Canada — Global Footer
     ============================================================ -->
<footer class="footer">
  <div class="bg-section" style="background-image: url('<?php echo IMG_URL; ?>/home/footerBg.jpg');">
    <div class="container">
      <div class="row">

        <!-- Col 1: Logo + Description + Social -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="footer-logo">
            <img src="<?php echo IMG_URL; ?>/global/logo-color.png" alt="<?php echo SITE_NAME; ?>">
          </div>
          <p>IBPC Canada is a member-based business association facilitating India-Canada bilateral trade and strengthening economic relationships between the two nations.</p>
          <div class="social-icons">
            <a href="https://www.facebook.com/ibpccanada" aria-label="Facebook" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
            </a>
            <a href="https://twitter.com/ibpccanada" aria-label="Twitter / X" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
            </a>
            <a href="https://www.linkedin.com/company/ibpc-canada" aria-label="LinkedIn" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
            <a href="https://www.youtube.com/@ibpccanada" aria-label="YouTube" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 11.75a29 29 0 00.46 5.33A2.78 2.78 0 003.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29 29 0 00.46-5.25 29 29 0 00-.46-5.43z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#1F3D8C"/></svg>
            </a>
          </div>
        </div>

        <!-- Col 2: Newsletter -->
        <div class="col-lg-3 col-md-6 mb-4">
          <h5>Newsletter</h5>
          <p>Stay updated with the latest IBPC Canada news and events.</p>
          <form class="newsletter-form" id="newsletterForm">
            <input type="email" name="email" placeholder="Your email address" required>
            <button type="submit">Subscribe</button>
          </form>
        </div>

        <!-- Col 3: Footer Links A -->
        <div class="col-lg-3 col-md-6 mb-4">
          <h5>Quick Links</h5>
          <div class="footer-links">
            <a href="/about-us">About Us</a>
            <a href="/upcoming-events">Events</a>
            <a href="/be-a-member">Be a Member</a>
            <a href="/renew-membership">Renew Membership</a>
            <a href="/news">News &amp; Media</a>
          </div>
        </div>

        <!-- Col 4: Footer Links B -->
        <div class="col-lg-3 col-md-6 mb-4">
          <h5>Resources</h5>
          <div class="footer-links">
            <a href="/reports">Reports &amp; Legislations</a>
            <a href="/contact">Contact Us</a>
            <a href="/faqs">FAQs</a>
            <a href="/privacy-policy">Privacy Policy</a>
          </div>
        </div>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.bg-section -->

  <!-- Copyright Bar -->
  <div class="copyright">
    <div class="container">
      <span>&copy; <?php echo date('Y'); ?> Indian Business &amp; Professional Council</span>
      <span>Powered by IBPC Canada</span>
    </div>
  </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello IBPC Canada, I would like to learn more about your membership and services.'); ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat with IBPC Canada on WhatsApp">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
</a>

<!-- ── Scripts ── -->
<script src="<?php echo JS_URL; ?>/jquery-3.7.min.js"></script>
<script src="<?php echo JS_URL; ?>/bootstrap.bundle.min.js"></script>
<script src="<?php echo JS_URL; ?>/owl.carousel.min.js"></script>
<script src="<?php echo JS_URL; ?>/jquery.waypoints.min.js"></script>
<script src="<?php echo JS_URL; ?>/jquery.counterup.min.js"></script>
<script src="<?php echo JS_URL; ?>/jquery.validate.min.js"></script>
<script src="<?php echo JS_URL; ?>/bootstrap-datepicker.min.js"></script>
<script src="<?php echo JS_URL; ?>/header.js"></script>
<script src="<?php echo JS_URL; ?>/main.js"></script>
</body>
</html>
