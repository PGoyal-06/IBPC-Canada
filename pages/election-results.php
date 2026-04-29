<?php
/**
 * IBPC Canada — Election Results
 */
$pageTitle = 'Election Results — IBPC Canada';
$pageDescription = 'Official IBPC Canada election results including balloted and final results for governing board positions.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Election Results';
$breadcrumbs = [['label' => 'Elections', 'url' => '/elections'], ['label' => 'Election Results']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <h2 class="section-label">Governance</h2>
        <h3 class="section-title">Election Results</h3>

        <!-- 2025 Election -->
        <div style="margin-bottom: 40px;">
          <h2 style="font-size: 22px; margin-bottom: 5px; text-transform: none; border-left: 4px solid var(--color-primary); padding-left: 12px;">Governing Board Election — 2025</h2>
          <p style="font-size: 13px; color: #888; margin-bottom: 20px;">Final results as declared by the Election Committee on November 15, 2025.</p>

          <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
            <thead>
              <tr style="background: var(--color-primary); color: white;">
                <th style="padding: 10px 15px; text-align: left;">Position</th>
                <th style="padding: 10px 15px; text-align: left;">Elected Member</th>
                <th style="padding: 10px 15px; text-align: center;">Votes</th>
                <th style="padding: 10px 15px; text-align: center;">Result</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $results = [
                  ['President',          'Rajiv Mehta',       '142', 'Elected'],
                  ['Vice President',     'Priya Sharma',      '138', 'Elected'],
                  ['Secretary General',  'Anil Kapoor',       '135', 'Elected'],
                  ['Treasurer',          'Sunita Bose',       '130', 'Elected'],
                  ['Board Member',       'Kiran Patel',       '128', 'Elected'],
                  ['Board Member',       'Mehul Desai',       '121', 'Elected'],
                  ['Board Member',       'Nisha Iyer',        '115', 'Elected'],
              ];
              foreach ($results as $i => $r):
              ?>
              <tr style="background: <?php echo ($i % 2 === 0) ? '#fff' : '#f9f9f9'; ?>; border-bottom: 1px solid #eee;">
                <td style="padding: 10px 15px; font-weight: 600;"><?php echo e($r[0]); ?></td>
                <td style="padding: 10px 15px;"><?php echo e($r[1]); ?></td>
                <td style="padding: 10px 15px; text-align: center;"><?php echo e($r[2]); ?></td>
                <td style="padding: 10px 15px; text-align: center;">
                  <span style="background: #e8f5e9; color: #2e7d32; font-size: 11px; font-weight: 600; padding: 3px 8px; border-radius: 3px;"><?php echo e($r[3]); ?></span>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <p style="font-size: 13px; color: #888; border-top: 1px solid #eee; padding-top: 20px;">
          Election results are certified by the IBPC Canada Election Committee. For queries, contact
          <a href="mailto:<?php echo OFFICE_EMAIL; ?>" style="color: var(--color-primary);"><?php echo OFFICE_EMAIL; ?></a>.
        </p>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
