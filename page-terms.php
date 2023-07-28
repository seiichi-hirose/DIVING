<?php get_header(); ?>

<section class="terms">

<div class="terms__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">Terms of Service</h1>
    </div>
</div>
<div class="terms__article lower-article">
    <div class="terms__inner inner">
    <?php get_template_part('breadcrumb'); ?>
        <?php the_content(); ?>

    </div>
</div>
</section>

<?php get_footer(); ?>