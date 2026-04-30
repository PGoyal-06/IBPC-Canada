<?php
/**
 * Reusable Page Tagline Component
 */
if (isset($pageTagline) && !empty($pageTagline)):
?>
<section class="page-tagline">
  <div class="container">
    <p><?php echo htmlspecialchars($pageTagline); ?></p>
  </div>
</section>
<?php endif; ?>
