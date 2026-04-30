<?php
/**
 * IBPC Canada — Reusable Page Header Banner + Breadcrumb
 *
 * Set before including:
 *   $pageHeaderTitle  — the H1 text
 *   $breadcrumbs      — array of ['label'=>..., 'url'=>...] (last item has no url)
 *   $pageHeaderImage  — optional background image path (defaults to banner1)
 */
if (!isset($pageHeaderTitle)) $pageHeaderTitle = 'Page';
if (!isset($pageHeaderImage)) $pageHeaderImage = '/bannerimg/banner1.png';
if (!isset($breadcrumbs))     $breadcrumbs = [];
?>

<!-- Page Header Banner -->
<section class="page-header" style="background-image: url('<?php echo $pageHeaderImage; ?>');">
  <div class="overlay"></div>
  <div class="container">
    <h1>
      <?php if (!empty($pageHeaderIcon)): ?>
        <span class="hero-icon">
          <?php if ($pageHeaderIcon === 'info'): ?>
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
          <?php elseif ($pageHeaderIcon === 'calendar'): ?>
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <?php elseif ($pageHeaderIcon === 'users'): ?>
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          <?php elseif ($pageHeaderIcon === 'megaphone'): ?>
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>
          <?php elseif ($pageHeaderIcon === 'file'): ?>
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          <?php endif; ?>
        </span>
      <?php endif; ?>
      <?php echo e($pageHeaderTitle); ?>
    </h1>
  </div>
</section>

<!-- Breadcrumb -->
<?php if (!empty($breadcrumbs)): ?>
<div class="breadcrumb-bar">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="/">Home</a></li>
      <?php foreach ($breadcrumbs as $i => $crumb): ?>
        <?php if (isset($crumb['url'])): ?>
          <li><a href="<?php echo $crumb['url']; ?>"><?php echo e($crumb['label']); ?></a></li>
        <?php else: ?>
          <li class="active"><?php echo e($crumb['label']); ?></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
<?php endif; ?>
