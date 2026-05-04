<?php
/**
 * IBPC Canada — Portal Shell (open)
 *
 * Set before including:
 *   $memberName   — raw member display name (will be escaped here)
 *   $memberStatus — 'active' | 'pending' | 'expired' | 'unknown'
 */
$_portalPath   = currentPage();
$_statusLabels = [
    'active' => 'Active', 
    'pending' => 'Pending Approval', 
    'paid_pending_approval' => 'Paid & Pending',
    'registered_pending_payment' => 'Payment Due',
    'expired' => 'Expired', 
    'unknown' => 'Unknown'
];
$_statusLabel  = $_statusLabels[$memberStatus] ?? 'Unknown';
$_navItems     = [
    ['path' => 'member-portal',         'label' => 'Overview'],
    ['path' => 'member-portal/profile',  'label' => 'Profile'],
    ['path' => 'member-portal/events',   'label' => 'My Event Registrations'],
];
?>
<div class="portal-wrap">

  <div class="portal-header">
    <a href="/member-portal" class="portal-header__brand">IBPC Canada Member Portal</a>
    <div class="portal-header__user">
      <span class="portal-status-badge portal-status-badge--<?php echo e($memberStatus); ?>"><?php echo e($_statusLabel); ?></span>
      <span class="portal-header__name"><?php echo e($memberName); ?></span>
      <a href="/api/logout.php" class="portal-header__logout">Sign out</a>
    </div>
  </div>

  <div class="portal-body">

    <nav class="portal-nav" aria-label="Portal navigation">
      <ul>
        <?php foreach ($_navItems as $_item):
          $_active = ($_portalPath === $_item['path']); ?>
        <li>
          <a href="/<?php echo $_item['path']; ?>"
             class="portal-nav__link<?php echo $_active ? ' portal-nav__link--active' : ''; ?>"
             <?php echo $_active ? 'aria-current="page"' : ''; ?>>
            <?php if ($_item['path'] === 'member-portal'): ?>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <?php elseif ($_item['path'] === 'member-portal/profile'): ?>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <?php elseif ($_item['path'] === 'member-portal/events'): ?>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <?php endif; ?>
            <span><?php echo e($_item['label']); ?></span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <main class="portal-content">
