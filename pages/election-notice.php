<?php
/**
 * IBPC Canada — Election Notice
 */
$pageTitle = 'Election Notice — IBPC Canada';
$pageDescription = 'Official IBPC Canada election notice announcing the schedule, eligibility criteria, and nomination process for the upcoming election.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Election Notice';
$breadcrumbs = [['label' => 'Elections', 'url' => '/elections'], ['label' => 'Election Notice']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <h2 class="section-label">Governance</h2>
        <h3 class="section-title">Election Notice</h3>

        <div style="background: #fff8e1; border-left: 4px solid var(--color-accent); padding: 15px 20px; border-radius: 0 4px 4px 0; margin-bottom: 30px;">
          <strong style="color: var(--color-accent);">Notice to All IBPC Canada Members</strong><br>
          <span style="font-size: 14px;">The IBPC Canada Election Committee hereby announces the election for Governing Board positions for the term 2026–2028.</span>
        </div>

        <h2 style="font-size: 20px; text-transform: none; margin-bottom: 15px;">Election Schedule</h2>
        <table style="width: 100%; border-collapse: collapse; font-size: 14px; margin-bottom: 30px;">
          <thead>
            <tr style="background: var(--color-bg-light);">
              <th style="padding: 10px 15px; text-align: left; font-weight: 600;">Milestone</th>
              <th style="padding: 10px 15px; text-align: left; font-weight: 600;">Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $schedule = [
                ['Nomination window opens',    'May 1, 2026'],
                ['Nomination window closes',   'May 20, 2026'],
                ['Nominee list published',     'May 25, 2026'],
                ['Voting period opens',        'June 1, 2026'],
                ['Voting period closes',       'June 15, 2026'],
                ['Results declared',           'June 20, 2026'],
                ['New board takes office',     'July 1, 2026'],
            ];
            foreach ($schedule as $i => $s):
            ?>
            <tr style="border-bottom: 1px solid #eee; background: <?php echo ($i % 2 === 0) ? '#fff' : '#fafafa'; ?>;">
              <td style="padding: 10px 15px;"><?php echo e($s[0]); ?></td>
              <td style="padding: 10px 15px; font-weight: 600; color: var(--color-primary);"><?php echo e($s[1]); ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <h2 style="font-size: 20px; text-transform: none; margin-bottom: 15px;">Positions Open for Election</h2>
        <ul class="styled-list" style="margin-bottom: 30px;">
          <li>President (1 position)</li>
          <li>Vice President (1 position)</li>
          <li>Secretary General (1 position)</li>
          <li>Treasurer (1 position)</li>
          <li>Board Members (4 positions)</li>
        </ul>

        <h2 style="font-size: 20px; text-transform: none; margin-bottom: 15px;">Eligibility Criteria</h2>
        <ul class="styled-list" style="margin-bottom: 30px;">
          <li>Must be a current IBPC Canada member in good standing for at least 12 months</li>
          <li>Membership dues must be fully paid up</li>
          <li>Must not be disqualified under the Constitution &amp; Articles of Association</li>
          <li>Written consent of the nominee must accompany the nomination form</li>
        </ul>

        <p style="font-size: 14px;">
          To submit a nomination or for further information, contact the Election Committee at
          <a href="mailto:<?php echo OFFICE_EMAIL; ?>" style="color: var(--color-primary);"><?php echo OFFICE_EMAIL; ?></a>.
        </p>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
