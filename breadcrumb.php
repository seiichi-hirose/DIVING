<div class="breadcrumb">
    <?php if (function_exists('bcn_display')) { ?>
        <div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display(); ?>
        </div>
    <?php } ?>
</div>