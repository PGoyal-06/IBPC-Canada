<?php
/**
 * IBPC Canada — Global Header Include
 * Usage: include this at the top of every page.
 * Set $pageTitle, $pageDescription, $isHomepage before including.
 */
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/functions.php';

if (!isset($pageTitle))       $pageTitle = SITE_NAME;
if (!isset($pageDescription)) $pageDescription = 'India Business & Professional Council — Connecting Indian professionals and businesses in Canada.';
if (!isset($isHomepage))      $isHomepage = false;

$navbarClass = $isHomepage ? 'nav-bar transparent' : 'nav-bar active';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo e($pageTitle); ?></title>
  <meta name="description" content="<?php echo e($pageDescription); ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo e($pageTitle); ?>">
  <meta property="og:description" content="<?php echo e($pageDescription); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo IMG_URL; ?>/global/favicon.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo CSS_URL; ?>/style.css">

  <!-- Google Analytics -->
  <?php if (GA_MEASUREMENT_ID !== 'G-XXXXXXXXXX'): ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GA_MEASUREMENT_ID; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo GA_MEASUREMENT_ID; ?>');
  </script>
  <?php endif; ?>
</head>
<body>

<!-- ── NAVBAR ── -->
<nav class="<?php echo $navbarClass; ?>" id="mainNavbar">
  <div class="container">
    <a href="/" class="logo">
      <img src="<?php echo IMG_URL; ?>/global/logo-color.png" alt="<?php echo SITE_NAME; ?>" class="logo-white">
      <img src="<?php echo IMG_URL; ?>/global/logo-color.png" alt="<?php echo SITE_NAME; ?>" class="logo-color">
    </a>

    <ul class="nav-links" id="navLinks">
      <!-- About Us -->
      <li>
        <a href="/about-us">About Us</a>
        <div class="nav-dropdown">
          <a href="/about-us">About Us</a>
          <a href="/patrons">Patrons</a>
          <a href="/former-patrons">Former Patrons</a>
          <a href="/governing-board">Governing Board</a>
          <a href="/executive-committee">Executive Committee</a>
          <a href="/focus-groups">Focus Groups &amp; Forums</a>
          <a href="/committee-members">Committee Members</a>
          <a href="/sponsorship">Sponsorship</a>
          <a href="/constitution">Constitution &amp; Articles</a>
          <a href="/agm-minutes">AGM Minutes</a>
        </div>
      </li>

      <!-- Elections -->
      <li>
        <a href="/elections">Elections</a>
        <div class="nav-dropdown">
          <a href="/election-results">Election Results</a>
          <a href="/election-notice">Election Notice</a>
          <a href="/nominees">Nominees</a>
          <a href="/candidate-corner">Candidate Corner</a>
          <a href="/voter-guidelines">Voter Guidelines</a>
        </div>
      </li>

      <!-- Events -->
      <li>
        <a href="/events">Events</a>
        <div class="nav-dropdown">
          <a href="/upcoming-events">Upcoming Events</a>
          <a href="/past-events">Past Events</a>
          <a href="/events-recap">Events Recap</a>
        </div>
      </li>

      <!-- Be a Member -->
      <li>
        <a href="/be-a-member">Be a Member</a>
        <div class="nav-dropdown">
          <a href="/diamond-members">Diamond Members</a>
          <a href="/corporate-members">Corporate Members</a>
          <a href="/membership-categories">Membership Categories</a>
          <a href="/membership-application">Membership Application</a>
          <a href="/member-directory">Member Directory</a>
          <a href="/manage-account">Manage Account</a>
          <a href="/renew-membership">Renew Membership</a>
        </div>
      </li>

      <!-- News & Media -->
      <li>
        <a href="/news">News &amp; Media</a>
        <div class="nav-dropdown">
          <a href="/news">News &amp; Media</a>
          <a href="/blog">Blog</a>
        </div>
      </li>

      <!-- Reports & Legislations -->
      <li>
        <a href="/reports">Reports &amp; Legislations</a>
        <div class="nav-dropdown">
          <a href="/reports">Reports</a>
          <a href="/legislations">Legislations</a>
          <a href="/magazines">Magazines</a>
        </div>
      </li>

      <!-- Contact Us -->
      <li><a href="/contact">Contact Us</a></li>
    </ul>

    <div class="nav-right">
      <a href="/login" class="btn-1 btn-member-login">Member Login</a>
      <button class="search-toggle" aria-label="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      </button>
      <button class="open-nav-bar" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<!-- ── SEARCH OVERLAY ── -->
<div class="search-overlay" id="searchOverlay">
  <button class="close-search" aria-label="Close search">&times;</button>
  <div class="search-box">
    <form action="/search" method="GET">
      <input type="text" name="q" placeholder="Search IBPC Canada..." autocomplete="off">
    </form>
  </div>
</div>

<!-- Spacer for fixed navbar (inner pages only) -->
<?php if (!$isHomepage): ?>
<div style="height: var(--navbar-height);"></div>
<?php endif; ?>
