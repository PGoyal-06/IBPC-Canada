<?php
/**
 * IBPC Canada — Portal Alert
 *
 * Set before including:
 *   $alertType — 'pending' | 'expired' | 'incomplete-profile' | 'no-events'
 */
if ($alertType === 'pending'): ?>
<div class="portal-alert portal-alert--pending" role="alert">
  <strong>Pending review:</strong> Your membership is pending review. We will notify you once it has been approved.
</div>
<?php elseif ($alertType === 'expired'): ?>
<div class="portal-alert portal-alert--expired" role="alert">
  <strong>Membership expired:</strong> Your membership appears to be expired. Please <a href="/contact">contact IBPC Canada</a> or <a href="/renew-membership">renew</a> to restore full access.
</div>
<?php elseif ($alertType === 'incomplete-profile'): ?>
<div class="portal-alert portal-alert--info" role="alert">
  Complete your profile so IBPC Canada has the correct contact and business details.
</div>
<?php elseif ($alertType === 'no-events'): ?>
<div class="portal-alert portal-alert--info" role="alert">
  You have no upcoming event registrations. <a href="/upcoming-events">Browse events</a> to get started.
</div>
<?php endif; ?>
