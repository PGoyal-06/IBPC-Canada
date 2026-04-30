<?php
/**
 * IBPC Canada — FAQs
 */
$pageTitle = 'FAQs — IBPC Canada';
$pageDescription = 'Frequently asked questions about IBPC Canada membership, events, trade services, and the India-Canada business network.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'FAQs';
$pageHeaderIcon  = 'info';
$breadcrumbs = [['label' => 'FAQs']];
include __DIR__ . '/../includes/page-header.php';

$faqs = [
    [
        'q' => 'What is IBPC Canada?',
        'a' => 'IBPC Canada (India Business & Professional Council Canada) is a premier member-based business association representing Indian businessmen and professionals across Canada. We serve as a trusted facilitator for India-Canada bilateral trade and economic relationships.',
    ],
    [
        'q' => 'How do I become a member of IBPC Canada?',
        'a' => 'You can apply for membership by completing the Membership Application form on our website. Our membership team will review your application and contact you within 2 business days to discuss the appropriate tier and guide you through the onboarding process.',
    ],
    [
        'q' => 'What are the different membership tiers?',
        'a' => 'IBPC Canada offers three membership tiers: Diamond (premier corporate sponsors with maximum benefits), Corporate (companies and SMEs), and General (individual professionals). Each tier comes with a specific set of benefits. Visit our Membership Categories page for a full comparison.',
    ],
    [
        'q' => 'Do I need to be Indian to join IBPC Canada?',
        'a' => 'No. IBPC Canada welcomes members from all backgrounds who share an interest in strengthening India-Canada trade relations and bilateral economic partnerships. Our membership includes Canadian companies looking to enter the Indian market as well as Indian professionals and businesses in Canada.',
    ],
    [
        'q' => 'What types of events does IBPC Canada organize?',
        'a' => 'We organize a wide range of events including networking dinners, trade missions, sector-specific forums and focus groups, annual summits, gala dinners, and virtual webinars. Events take place across major Canadian cities and are open to members and invited guests.',
    ],
    [
        'q' => 'How do I access the Member Directory?',
        'a' => 'The Member Directory is available exclusively to IBPC Canada members after logging into your member account. You can search for members by name, company, industry, or membership tier.',
    ],
    [
        'q' => 'Can I download the trade reports and publications?',
        'a' => 'Yes. IBPC Canada reports, legislative documents, and the quarterly Business Review magazine are available to all members via the members\' portal after login. Some publications may be restricted to certain membership tiers.',
    ],
    [
        'q' => 'How do I renew my membership?',
        'a' => 'You can submit a renewal request through the Renew Membership page on our website, or by contacting our office directly. Memberships are annual and we recommend renewing at least 30 days before expiry to avoid any interruption in access.',
    ],
    [
        'q' => 'How can my company sponsor an IBPC Canada event?',
        'a' => 'We welcome corporate sponsors who want to increase their visibility within the India-Canada business community. Please visit the Sponsorship page or contact us directly for sponsorship packages and opportunities.',
    ],
    [
        'q' => 'How do I contact IBPC Canada?',
        'a' => 'You can reach us via the Contact Us page, by email at ' . OFFICE_EMAIL . ', or by phone at ' . OFFICE_PHONE . '. Our office is open Monday to Friday, 9:00 AM – 5:00 PM EST.',
    ],
];
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <h2 class="section-label">Help</h2>
        <h3 class="section-title">Frequently Asked Questions</h3>

        <div id="faqAccordion" style="margin-top: 20px;">
          <?php foreach ($faqs as $i => $faq): ?>
          <div style="border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); margin-bottom: 10px; overflow: hidden;">
            <button onclick="toggleFaq(<?php echo $i; ?>)" style="width: 100%; text-align: left; padding: 16px 20px; background: var(--color-white); border: none; cursor: pointer; font-family: var(--font-family); font-size: 15px; font-weight: 600; color: var(--color-body); display: flex; justify-content: space-between; align-items: center;" aria-expanded="false">
              <span><?php echo e($faq['q']); ?></span>
              <span id="faq-icon-<?php echo $i; ?>" style="font-size: 20px; line-height: 1; transition: transform 0.3s ease; flex-shrink: 0; margin-left: 10px;">+</span>
            </button>
            <div id="faq-body-<?php echo $i; ?>" style="display: none; padding: 0 20px 16px; font-size: 14px; line-height: 1.7; color: #555; border-top: 1px solid #f0f0f0;">
              <div style="padding-top: 14px;"><?php echo e($faq['a']); ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <p style="margin-top: 30px; font-size: 14px; text-align: center; color: #666;">
          Still have questions?
          <a href="/contact" style="color: var(--color-primary); font-weight: 600;">Contact Us</a>
        </p>

      </div>
    </div>
  </div>
</section>

<script>
function toggleFaq(i) {
  var body = document.getElementById('faq-body-' + i);
  var icon = document.getElementById('faq-icon-' + i);
  var open = body.style.display !== 'none';
  body.style.display = open ? 'none' : 'block';
  icon.textContent = open ? '+' : '−';
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
