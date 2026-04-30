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

<section class="page-content" id="fees">
  <div class="container">
    <h2 class="section-label">Membership</h2>
    <h3 class="section-title">Membership Categories</h3>
    <p>IBPC Canada offers three membership tiers designed to meet the needs of individuals, growing businesses, and established enterprises. All tiers share the same core mission: accelerating India-Canada trade and building lasting professional relationships.</p>

    <!-- Comparison Table -->
    <div id="benefits" style="overflow-x: auto; margin-top: 30px;">
      <table style="width: 100%; border-collapse: collapse; font-size: 14px; min-width: 600px;">
        <thead>
          <tr>
            <th style="padding: 15px; text-align: left; background: var(--color-bg-light); border-bottom: 2px solid #ddd; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Benefit</th>
            <th style="padding: 15px; text-align: center; background: #fff3e0; border-bottom: 2px solid #F39200; color: #F39200; font-weight: 700;">💎 Diamond</th>
            <th style="padding: 15px; text-align: center; background: #e8eaf6; border-bottom: 2px solid var(--color-primary); color: var(--color-primary); font-weight: 700;">🏢 Corporate</th>
            <th style="padding: 15px; text-align: center; background: var(--color-bg-light); border-bottom: 2px solid #666; font-weight: 700;">👤 General</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $rows = [
              ['Member Directory Listing',                   'Featured',  'Standard',  'Standard'],
              ['Annual Events Access',                       '✔ All',     '✔ All',     '✔ Networking'],
              ['Trade Mission Participation',                '✔ Priority','✔ Standard','—'],
              ['Speaking Opportunities at Events',           '✔ Priority','✔ Standard','—'],
              ['Logo on IBPC Canada Materials',              '✔',         '—',         '—'],
              ['Business Matchmaking Services',              '✔',         '✔',         '—'],
              ['Access to Reports & Publications',           '✔',         '✔',         '✔'],
              ['Newsletter Subscription',                    '✔',         '✔',         '✔'],
              ['Member-Only Online Portal',                  '✔',         '✔',         '✔'],
              ['Dedicated Relationship Manager',             '✔',         '—',         '—'],
              ['Annual Gala & Awards Dinner Tickets',        '4 included','2 included','1 included'],
              ['Advertising in IBPC Canada Magazine',        '✔ Full Page','✔ Half Page','—'],
              ['Exhibition Space at Trade Events',           '✔ Premium', '✔ Standard','—'],
              ['Investment Introductions',                   '✔',         '✔',         '—'],
          ];
          foreach ($rows as $i => $row):
          ?>
          <tr style="border-bottom: 1px solid #eee; background: <?php echo ($i % 2 === 0) ? '#fff' : '#fafafa'; ?>;">
            <td style="padding: 12px 15px; font-weight: 600;"><?php echo e($row[0]); ?></td>
            <td style="padding: 12px 15px; text-align: center; color: #F39200;"><?php echo e($row[1]); ?></td>
            <td style="padding: 12px 15px; text-align: center; color: var(--color-primary);"><?php echo e($row[2]); ?></td>
            <td style="padding: 12px 15px; text-align: center; color: #555;"><?php echo e($row[3]); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div style="text-align: center; margin-top: 35px;">
      <a href="/membership-application" class="btn-1">Apply for Membership</a>
    </div>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
