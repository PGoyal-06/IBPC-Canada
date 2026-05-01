<?php
/**
 * IBPC Canada — Membership Application
 */
$pageTitle = 'Membership Application — IBPC Canada';
$pageDescription = 'Apply to join IBPC Canada. Complete the membership application form to connect with Canada\'s leading India-focused business network.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Membership Application';
$pageHeaderIcon  = 'users';
$breadcrumbs = [['label' => 'Be a Member', 'url' => '/membership-categories'], ['label' => 'Membership Application']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="sec-contact section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <h2 class="section-label">Join IBPC Canada</h2>
        <h3 class="section-title">Membership Application</h3>
        <p style="margin-bottom: 30px;">It only takes a few minutes to apply for IBPC Canada membership. Please complete the application form and upload the required supporting documents. Your application will be reviewed by the IBPC Canada team. Once approved, you will receive payment and activation instructions by email.</p>

        <style>
          .form-section-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--color-primary);
            margin: 40px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--color-bg-light);
            text-transform: none;
          }
          .form-section-title:first-of-type { margin-top: 0; }
          .radio-group, .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 8px;
          }
          .radio-group label, .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-weight: 400;
            font-size: 14px;
            margin-bottom: 0;
          }
          .form-control {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: var(--border-radius-btn);
            padding: 10px 14px;
            font-size: 14px;
            font-family: var(--font-family);
            background: #fff;
            color: var(--color-body);
            outline: none;
          }
          .form-control-file {
            font-size: 13px;
            margin-top: 5px;
          }
          .checkbox-group {
            flex-direction: column;
            gap: 10px;
          }
          .checkbox-group label {
            align-items: flex-start;
            line-height: 1.4;
          }
          .checkbox-group input {
            margin-top: 4px;
          }
          .corporate-required {
            color: var(--color-accent);
            font-weight: 700;
          }
        </style>

        <form id="membershipForm" method="POST" action="/api/membership.php" novalidate enctype="multipart/form-data">
          <input type="hidden" name="recaptcha_token" id="recaptcha_token">

          <!-- Section 1 — Membership Details -->
          <h4 class="form-section-title">1. Membership Details</h4>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="membership_type">Membership Type *</label>
                <select id="membership_type" name="membership_type" required class="form-control">
                  <option value="">Select Membership Type</option>
                  <option value="Silver">Silver</option>
                  <option value="Gold">Gold</option>
                  <option value="Platinum">Platinum</option>
                  <option value="Diamond">Diamond</option>
                  <option value="Affiliate">Affiliate</option>
                </select>
              </div>
            </div>
            <div class="col-md-6" id="affiliate_criteria_group" style="display: none;">
              <div class="form-group">
                <label for="affiliate_criteria">Affiliate Criteria *</label>
                <select id="affiliate_criteria" name="affiliate_criteria" class="form-control">
                  <option value="">Select Criteria</option>
                  <option value="Woman entrepreneur / professional">Woman entrepreneur / professional</option>
                  <option value="Member under 45 years">Member under 45 years</option>
                  <option value="Startup Founder / CXO">Startup Founder / CXO</option>
                  <option value="Other">Other, subject to review</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Membership Duration *</label>
                <div class="radio-group">
                  <label><input type="radio" name="membership_duration" value="One Year" required> One Year</label>
                  <label><input type="radio" name="membership_duration" value="Three Years"> Three Years</label>
                  <label id="lifetime_duration_label"><input type="radio" name="membership_duration" value="Lifetime"> Lifetime</label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Member Classification *</label>
                <div class="radio-group">
                  <label><input type="radio" name="member_classification" value="Individual" required checked> Individual</label>
                  <label><input type="radio" name="member_classification" value="Corporate"> Corporate</label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Is Startup? *</label>
                <div class="radio-group">
                  <label><input type="radio" name="is_startup" value="Yes" required> Yes</label>
                  <label><input type="radio" name="is_startup" value="No" checked> No</label>
                </div>
              </div>
            </div>
          </div>

          <!-- Section 2 — Applicant Information -->
          <h4 class="form-section-title">2. Applicant Information</h4>
          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label for="salutation">Salutation *</label>
                <select id="salutation" name="salutation" required class="form-control">
                  <option value="">Select</option>
                  <option value="Dr.">Dr.</option>
                  <option value="Prof.">Prof.</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mx.">Mx.</option>
                </select>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="first_name">First Name *</label>
                <input type="text" id="first_name" name="first_name" required>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="last_name">Last Name *</label>
                <input type="text" id="last_name" name="last_name" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="form-control">
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Prefer not to say">Prefer not to say</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="col-md-4" id="dob_group" style="display: none;">
              <div class="form-group">
                <label for="dob">Date of Birth *</label>
                <input type="date" id="dob" name="dob">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" id="nationality" name="nationality">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="designation">Designation *</label>
                <input type="text" id="designation" name="designation" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="linkedin_profile">LinkedIn Profile (URL)</label>
                <input type="url" id="linkedin_profile" name="linkedin_profile" placeholder="https://linkedin.com/in/...">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="profile_bio">Profile / Bio</label>
            <textarea id="profile_bio" name="profile_bio" rows="3" placeholder="Brief background for your member profile..."></textarea>
          </div>

          <!-- Section 3 — Company / Organization Details -->
          <h4 class="form-section-title">3. Company / Organization Details</h4>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="company_name">Company Name <span class="corporate-required" style="display: none;">*</span></label>
                <input type="text" id="company_name" name="company_name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="company_email">Company Email</label>
                <input type="email" id="company_email" name="company_email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="company_phone">Company Phone</label>
                <input type="tel" id="company_phone" name="company_phone">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="company_website">Website</label>
                <input type="url" id="company_website" name="company_website" placeholder="https://...">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="company_linkedin">Company LinkedIn (URL)</label>
                <input type="url" id="company_linkedin" name="company_linkedin" placeholder="https://linkedin.com/company/...">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="instagram">Instagram (URL)</label>
                <input type="url" id="instagram" name="instagram" placeholder="https://instagram.com/...">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="facebook">Facebook (URL)</label>
                <input type="url" id="facebook" name="facebook" placeholder="https://facebook.com/...">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="business_reg_number">Business Registration / Corporation Number <span class="corporate-required" style="display: none;">*</span></label>
                <input type="text" id="business_reg_number" name="business_reg_number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="gst_hst_number">GST/HST Number</label>
                <input type="text" id="gst_hst_number" name="gst_hst_number">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="business_category">Business Category *</label>
            <select id="business_category" name="business_category" required class="form-control">
              <option value="">Select Category</option>
              <option value="Advertising, PR & Marketing">Advertising, PR &amp; Marketing</option>
              <option value="Agriculture & Agri-Food">Agriculture &amp; Agri-Food</option>
              <option value="Architecture, Interiors & Design">Architecture, Interiors &amp; Design</option>
              <option value="Audit, Accounting & Tax">Audit, Accounting &amp; Tax</option>
              <option value="Automotive">Automotive</option>
              <option value="Banking & Financial Services">Banking &amp; Financial Services</option>
              <option value="Construction & Infrastructure">Construction &amp; Infrastructure</option>
              <option value="Education & Training">Education &amp; Training</option>
              <option value="Electronics & Technology">Electronics &amp; Technology</option>
              <option value="Energy, Water & Power">Energy, Water &amp; Power</option>
              <option value="Engineering Services">Engineering Services</option>
              <option value="Entertainment & Media">Entertainment &amp; Media</option>
              <option value="Environmental Services">Environmental Services</option>
              <option value="FMCG">FMCG</option>
              <option value="Food & Beverage">Food &amp; Beverage</option>
              <option value="General Trading">General Trading</option>
              <option value="Gold & Jewellery">Gold &amp; Jewellery</option>
              <option value="Government / Public Sector">Government / Public Sector</option>
              <option value="Healthcare & Wellness">Healthcare &amp; Wellness</option>
              <option value="Hospitality & Leisure">Hospitality &amp; Leisure</option>
              <option value="Insurance">Insurance</option>
              <option value="IT Services">IT Services</option>
              <option value="Legal Services">Legal Services</option>
              <option value="Logistics & Supply Chain">Logistics &amp; Supply Chain</option>
              <option value="Manufacturing">Manufacturing</option>
              <option value="Oil & Gas">Oil &amp; Gas</option>
              <option value="Pharmaceuticals">Pharmaceuticals</option>
              <option value="Philanthropy & Social Impact">Philanthropy &amp; Social Impact</option>
              <option value="Plastics & Chemicals">Plastics &amp; Chemicals</option>
              <option value="Real Estate & Facilities Management">Real Estate &amp; Facilities Management</option>
              <option value="Retail / E-Commerce">Retail / E-Commerce</option>
              <option value="Sports">Sports</option>
              <option value="Steel & Metals">Steel &amp; Metals</option>
              <option value="Telecom Services">Telecom Services</option>
              <option value="Textiles">Textiles</option>
              <option value="Travel & Tourism">Travel &amp; Tourism</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="short_company_profile">Short Company Profile <span class="corporate-required" style="display: none;">*</span></label>
            <textarea id="short_company_profile" name="short_company_profile" rows="3" placeholder="Brief description of your business..."></textarea>
          </div>

          <!-- Section 4 — Address & Contact Details -->
          <h4 class="form-section-title">4. Address & Contact Details</h4>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="street_address">Street Address *</label>
                <input type="text" id="street_address" name="street_address" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City *</label>
                <input type="text" id="city" name="city" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province / Territory *</label>
                <select id="province" name="province" required class="form-control">
                  <option value="">Select Province</option>
                  <option value="Alberta">Alberta</option>
                  <option value="British Columbia">British Columbia</option>
                  <option value="Manitoba">Manitoba</option>
                  <option value="New Brunswick">New Brunswick</option>
                  <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                  <option value="Northwest Territories">Northwest Territories</option>
                  <option value="Nova Scotia">Nova Scotia</option>
                  <option value="Nunavut">Nunavut</option>
                  <option value="Ontario">Ontario</option>
                  <option value="Prince Edward Island">Prince Edward Island</option>
                  <option value="Quebec">Quebec</option>
                  <option value="Saskatchewan">Saskatchewan</option>
                  <option value="Yukon">Yukon</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postal_code">Postal Code *</label>
                <input type="text" id="postal_code" name="postal_code" required placeholder="A1B 2C3">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country *</label>
                <input type="text" id="country" name="country" value="Canada" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="comm_email">Communication Email Address *</label>
                <input type="email" id="comm_email" name="comm_email" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="primary_phone">Primary Contact Number *</label>
                <input type="tel" id="primary_phone" name="primary_phone" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mobile_phone">Mobile Number</label>
                <input type="tel" id="mobile_phone" name="mobile_phone">
              </div>
            </div>
          </div>

          <!-- Section 5 — Focus Group Selection -->
          <h4 class="form-section-title">5. Focus Group Selection</h4>
          <div class="form-group">
            <label for="focus_group">Focus Group *</label>
            <select id="focus_group" name="focus_group" required class="form-control">
              <option value="">Select Focus Group</option>
              <option value="Professional & Business Services">Professional &amp; Business Services</option>
              <option value="Financial Services & Capital Markets">Financial Services &amp; Capital Markets</option>
              <option value="Real Assets & Built Environment">Real Assets &amp; Built Environment</option>
              <option value="Trade, Logistics & Industrial Value Chains">Trade, Logistics &amp; Industrial Value Chains</option>
              <option value="Retail, Hospitality & Tourism">Retail, Hospitality &amp; Tourism</option>
              <option value="Technology, Digital & Innovation">Technology, Digital &amp; Innovation</option>
              <option value="Healthcare, Education, Wellness & Pharma">Healthcare, Education, Wellness &amp; Pharma</option>
              <option value="Energy & Climate">Energy &amp; Climate</option>
            </select>
          </div>

          <!-- Section 6 — Documents Upload -->
          <h4 class="form-section-title">6. Documents Upload</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">Maximum file size: 5 MB per upload. Please avoid special characters in file names.</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="member_photo">Member Photo *</label>
                <input type="file" id="member_photo" name="member_photo" accept=".jpg,.jpeg,.png,.webp" required class="form-control-file">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="gov_id">Government-Issued ID *</label>
                <input type="file" id="gov_id" name="gov_id" accept=".pdf,.jpg,.jpeg,.png" required class="form-control-file">
              </div>
            </div>
          </div>
          <div class="row corporate-docs" style="display: none;">
            <div class="col-md-6">
              <div class="form-group">
                <label for="business_reg_doc">Business Registration Document *</label>
                <input type="file" id="business_reg_doc" name="business_reg_doc" accept=".pdf,.jpg,.jpeg,.png" class="form-control-file">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="company_logo">Company Logo *</label>
                <input type="file" id="company_logo" name="company_logo" accept=".jpg,.jpeg,.png,.svg,.webp" class="form-control-file">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="company_profile_doc">Company Profile / Brochure (Optional)</label>
                <input type="file" id="company_profile_doc" name="company_profile_doc" accept=".pdf" class="form-control-file">
              </div>
            </div>
          </div>

          <!-- Section 7 — Referral & Communication -->
          <h4 class="form-section-title">7. Referral & Communication</h4>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="referral_source">How did you hear about us? *</label>
                <select id="referral_source" name="referral_source" required class="form-control">
                  <option value="">Select Source</option>
                  <option value="Website">Website</option>
                  <option value="Google Search">Google Search</option>
                  <option value="Member Referral">Member Referral</option>
                  <option value="IBPC Event">IBPC Event</option>
                  <option value="News & Media">News &amp; Media</option>
                  <option value="LinkedIn">LinkedIn</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="referred_by">Referred By</label>
                <input type="text" id="referred_by" name="referred_by">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="cc_email">Enter Email ID for CC</label>
            <input type="email" id="cc_email" name="cc_email">
          </div>

          <!-- Section 8 — Consent / Declarations -->
          <h4 class="form-section-title">8. Consent / Declarations</h4>
          <div class="form-group checkbox-group">
            <label><input type="checkbox" name="privacy_consent" required> I consent to IBPC Canada collecting and using my information for membership application review, communication, and member administration purposes. *</label>
          </div>
          <div class="form-group checkbox-group">
            <label><input type="checkbox" name="accuracy_declaration" required> I confirm that the information provided in this application is accurate to the best of my knowledge. *</label>
          </div>
          <div class="form-group checkbox-group">
            <label><input type="checkbox" name="comm_consent" required> I agree to receive membership-related communications from IBPC Canada. *</label>
          </div>
          <div class="form-group checkbox-group">
            <label><input type="checkbox" name="newsletter_consent"> I would like to receive IBPC Canada newsletters and event updates.</label>
          </div>

          <p style="font-size: 13px; color: #666; margin: 30px 0 10px;">
            Your information will be used to review your membership application, communicate with you about your application, and administer your IBPC Canada membership if approved.
          </p>

          <div class="form-note" style="margin-bottom: 25px; padding: 15px; background: var(--color-bg-light); border-radius: 4px; font-size: 13px; color: #555;">
            <p style="margin-bottom: 8px;"><strong>Please note:</strong> Your membership application will be reviewed by the IBPC Canada team. A representative may contact you for additional information or registration requirements.</p>
            <p style="margin-bottom: 0;">All fields marked with * are mandatory.</p>
          </div>

          <button type="submit" class="btn-1">Submit Application</button>

        </form>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
