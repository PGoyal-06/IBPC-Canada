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
    <h1><?php echo e($pageHeaderTitle); ?></h1>
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
