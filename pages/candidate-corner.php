<?php
/**
 * IBPC Canada — Candidate Corner
 */
$pageTitle = 'Candidate Corner — IBPC Canada';
$pageDescription = 'Learn about each IBPC Canada election candidate, their vision, background, and platform for the 2026 Governing Board election.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Candidate Corner';
$breadcrumbs = [['label' => 'Elections', 'url' => '/elections'], ['label' => 'Candidate Corner']];
include __DIR__ . '/../includes/page-header.php';

$candidates = [
    [
        'name'     => 'Rajiv Mehta',
        'position' => 'Nominee for President',
        'company'  => 'Mehta Global Consulting',
        'initials' => 'RM',
        'bio'      => 'Rajiv brings over 20 years of experience in cross-border business strategy and trade facilitation. As a founding member of IBPC Canada, he has been instrumental in establishing key partnerships with Canadian chambers of commerce and Indian trade bodies. His vision is to double IBPC Canada\'s membership and triple its event impact over the next two years.',
    ],
    [
        'name'     => 'Priya Sharma',
        'position' => 'Nominee for Vice President',
        'company'  => 'Sharma Wealth Management',
        'initials' => 'PS',
        'bio'      => 'Priya is a seasoned financial advisor with deep expertise in cross-border investment structuring between India and Canada. She has led IBPC Canada\'s membership committee for three years and believes in a member-first governance model that delivers measurable value to every tier of membership.',
    ],
    [
        'name'     => 'Anil Kapoor',
        'position' => 'Nominee for Secretary General',
        'company'  => 'Kapoor Law Professional Corp',
        'initials' => 'AK',
        'bio'      => 'Anil is a corporate lawyer specialising in Canada-India M&A and trade compliance. He has advised numerous IBPC Canada members on market entry, regulatory compliance, and investment structuring. His platform focuses on strengthening IBPC Canada\'s governance framework and publication of annual trade policy reports.',
    ],
];
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">2026 Election</h2>
    <h3 class="section-title">Candidate Corner</h3>
    <p>Get to know the candidates standing for election to the IBPC Canada Governing Board. Review their profiles, experience, and vision before casting your vote.</p>

    <div style="margin-top: 30px;">
      <?php foreach ($candidates as $c): ?>
      <div style="display: flex; gap: 25px; padding: 30px; border: 1px solid var(--color-card-border); border-radius: var(--border-radius-card); margin-bottom: 20px; background: var(--color-white);">
        <div style="flex-shrink: 0;">
          <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; border: 3px solid var(--color-primary);">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($c['initials']); ?>&size=100&background=1F3D8C&color=fff&font-size=0.4" alt="<?php echo e($c['name']); ?>" style="width: 100%; height: 100%;">
          </div>
        </div>
        <div style="flex: 1;">
          <h4 style="font-size: 18px; font-weight: 700; text-transform: none; margin-bottom: 2px;"><?php echo e($c['name']); ?></h4>
          <p style="font-size: 13px; color: var(--color-primary); font-weight: 600; margin-bottom: 2px;"><?php echo e($c['position']); ?></p>
          <p style="font-size: 12px; color: #888; margin-bottom: 12px;"><?php echo e($c['company']); ?></p>
          <p style="font-size: 14px; line-height: 1.7; color: #444;"><?php echo e($c['bio']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <p style="font-size: 14px; color: #666; margin-top: 10px;">
      See the full list of nominees at <a href="/nominees" style="color: var(--color-primary); font-weight: 600;">Nominees</a>.
      Voting opens June 1, 2026 — see <a href="/voter-guidelines" style="color: var(--color-primary); font-weight: 600;">Voter Guidelines</a> for details.
    </p>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
