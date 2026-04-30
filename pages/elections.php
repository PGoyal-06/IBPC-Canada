<?php
/**
 * IBPC Canada — Elections Landing
 */
$pageTitle = 'Elections — IBPC Canada';
$pageDescription = 'Information about IBPC Canada elections, results, nominees, and voter guidelines for the governing board and executive committee.';
$isHomepage = false;
include __DIR__ . '/../includes/header.php';

$pageHeaderTitle = 'Elections';
$pageHeaderIcon  = 'info';
$breadcrumbs = [['label' => 'Elections']];
include __DIR__ . '/../includes/page-header.php';
?>

<section class="page-content">
  <div class="container">
    <h2 class="section-label">Governance</h2>
    <h3 class="section-title">IBPC Canada Elections</h3>
    <p>IBPC Canada holds periodic elections for positions on the Governing Board and Executive Committee. Our election process is transparent, member-driven, and conducted in accordance with our Constitution and Articles of Association.</p>

    <div class="row" style="margin-top: 30px;">

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card">
          <div style="font-size: 40px; margin-bottom: 15px;">🗳️</div>
          <h4 style="font-size: 18px; font-weight: 700; margin-bottom: 10px; text-transform: none;">Election Results</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">View the official results of past elections including balloted and final results.</p>
          <a href="/election-results" class="btn-1" style="font-size: 13px; min-width: 0; padding: 0 20px;">View Results</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card">
          <div style="font-size: 40px; margin-bottom: 15px;">📢</div>
          <h4 style="font-size: 18px; font-weight: 700; margin-bottom: 10px; text-transform: none;">Election Notice</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">Read the official announcement and schedule for the current or upcoming election cycle.</p>
          <a href="/election-notice" class="btn-1" style="font-size: 13px; min-width: 0; padding: 0 20px;">View Notice</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card">
          <div style="font-size: 40px; margin-bottom: 15px;">🏅</div>
          <h4 style="font-size: 18px; font-weight: 700; margin-bottom: 10px; text-transform: none;">Nominees</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">Meet the candidates who have been nominated for positions on the Governing Board.</p>
          <a href="/nominees" class="btn-1" style="font-size: 13px; min-width: 0; padding: 0 20px;">View Nominees</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card">
          <div style="font-size: 40px; margin-bottom: 15px;">💬</div>
          <h4 style="font-size: 18px; font-weight: 700; margin-bottom: 10px; text-transform: none;">Candidate Corner</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">Learn about each candidate's vision, experience, and platform for IBPC Canada's future.</p>
          <a href="/candidate-corner" class="btn-1" style="font-size: 13px; min-width: 0; padding: 0 20px;">Meet Candidates</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="person-card">
          <div style="font-size: 40px; margin-bottom: 15px;">📋</div>
          <h4 style="font-size: 18px; font-weight: 700; margin-bottom: 10px; text-transform: none;">Voter Guidelines</h4>
          <p style="font-size: 13px; color: #666; margin-bottom: 20px;">Understand your eligibility, voting rights, and the step-by-step process to cast your vote.</p>
          <a href="/voter-guidelines" class="btn-1" style="font-size: 13px; min-width: 0; padding: 0 20px;">Read Guidelines</a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
