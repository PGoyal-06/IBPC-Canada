<?php
/**
 * IBPC Canada — Voter Guidelines
 */
$pageTitle = 'Voter Guidelines — IBPC Canada';
$pageDescription = 'IBPC Canada voter guidelines — eligibility requirements, the voting process, and how to cast your ballot in the Governing Board election.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Voter Guidelines';
$pageHeaderIcon  = 'info';
$breadcrumbs = [['label' => 'Elections', 'url' => '/elections'], ['label' => 'Voter Guidelines']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <h2 class="section-label">2026 Election</h2>
        <h3 class="section-title">Voter Guidelines</h3>

        <h2 style="font-size: 20px; text-transform: none; margin-bottom: 15px;">Who Can Vote?</h2>
        <p>All IBPC Canada members in good standing as of May 31, 2026 are eligible to vote. Eligibility conditions:</p>
        <ul class="styled-list">
          <li>Active IBPC Canada membership (Diamond, Corporate, or General)</li>
          <li>Membership dues paid in full as of the eligibility date</li>
          <li>Membership active for a minimum of 3 months prior to voting</li>
          <li>One vote per member (corporate memberships: one vote per registered representative)</li>
        </ul>

        <h2 style="font-size: 20px; text-transform: none; margin-top: 30px; margin-bottom: 15px;">How to Vote</h2>
        <ol style="padding-left: 22px; font-size: 15px; line-height: 1.8; color: var(--color-body);">
          <li style="margin-bottom: 10px;">Log in to your IBPC Canada member account at <a href="/login" style="color: var(--color-primary);">ibpccanada.com/login</a>.</li>
          <li style="margin-bottom: 10px;">Navigate to <strong>Member Area → Elections → Vote Now</strong>.</li>
          <li style="margin-bottom: 10px;">Review all candidates and their profiles in <a href="/candidate-corner" style="color: var(--color-primary);">Candidate Corner</a>.</li>
          <li style="margin-bottom: 10px;">Select your preferred candidate(s) for each open position.</li>
          <li style="margin-bottom: 10px;">Click <strong>Submit Vote</strong> to confirm. You will receive a confirmation email.</li>
        </ol>

        <h2 style="font-size: 20px; text-transform: none; margin-top: 30px; margin-bottom: 15px;">Important Rules</h2>
        <ul class="styled-list">
          <li>Each eligible member may vote only once.</li>
          <li>Votes are anonymous — the Election Committee cannot identify how any individual voted.</li>
          <li>Votes cannot be changed once submitted.</li>
          <li>Proxy voting is not permitted.</li>
          <li>Any attempt to vote fraudulently will result in disqualification and membership suspension.</li>
        </ul>

        <h2 style="font-size: 20px; text-transform: none; margin-top: 30px; margin-bottom: 15px;">Voting Dates</h2>
        <p>
          <strong>Voting Opens:</strong> June 1, 2026, 9:00 AM EST<br>
          <strong>Voting Closes:</strong> June 15, 2026, 11:59 PM EST<br>
          <strong>Results Announced:</strong> June 20, 2026
        </p>

        <p style="margin-top: 25px; font-size: 14px; color: #666;">
          Questions? Contact the Election Committee at
          <a href="mailto:<?php echo OFFICE_EMAIL; ?>" style="color: var(--color-primary);"><?php echo OFFICE_EMAIL; ?></a>.
        </p>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
