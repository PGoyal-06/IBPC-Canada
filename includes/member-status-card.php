<?php
/**
 * IBPC Canada — Member Status Card
 *
 * Set before including:
 *   $cardName    — raw member full name
 *   $cardStatus  — 'active' | 'pending' | 'expired' | 'unknown'
 *
 * Optional:
 *   $cardLevel   — membership tier/level string
 *   $cardSince   — member since date string
 *   $cardRenewal — renewal due date string
 *   $cardOrg     — organization name string
 */
$_statusLabels = ['active' => 'Active', 'pending' => 'Pending Review', 'expired' => 'Expired', 'unknown' => 'Unknown'];
$_statusLabel  = $_statusLabels[$cardStatus] ?? 'Unknown';
$_initial      = strtoupper(substr($cardName, 0, 1) ?: 'M');
?>
<div class="member-status-card">
  <div class="member-status-card__avatar"><?php echo $_initial; ?></div>
  <div class="member-status-card__name"><?php echo e($cardName); ?></div>

  <div class="member-status-card__row">
    <span class="member-status-card__label">Status</span>
    <span class="portal-status-badge portal-status-badge--<?php echo e($cardStatus); ?>"><?php echo e($_statusLabel); ?></span>
  </div>
  <?php if (!empty($cardLevel)): ?>
  <div class="member-status-card__row">
    <span class="member-status-card__label">Level</span>
    <span><?php echo e($cardLevel); ?></span>
  </div>
  <?php endif; ?>
  <?php if (!empty($cardOrg)): ?>
  <div class="member-status-card__row">
    <span class="member-status-card__label">Organization</span>
    <span><?php echo e($cardOrg); ?></span>
  </div>
  <?php endif; ?>
  <?php if (!empty($cardSince)): ?>
  <div class="member-status-card__row">
    <span class="member-status-card__label">Member since</span>
    <span><?php echo e($cardSince); ?></span>
  </div>
  <?php endif; ?>
  <?php if (!empty($cardRenewal)): ?>
  <div class="member-status-card__row">
    <span class="member-status-card__label">Renewal due</span>
    <span><?php echo e($cardRenewal); ?></span>
  </div>
  <?php endif; ?>
</div>
