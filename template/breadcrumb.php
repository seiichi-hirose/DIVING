<?php if(is_404()): ?>
<div class="breadcrumb breadcrumb--white">
<?php else: ?>
<div class="breadcrumb">
<?php endif; ?>
    <?php if (function_exists('bcn_display')) { ?>
        <div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display(); ?>
        </div>
    <?php } ?>
</div>