<?php get_header(); ?>

<section class="not-found common-not-found">

<div class="not-found__inner inner">

<?php get_template_part('template/breadcrumb'); ?>

    <div class="not-found__content">
        <h1 class="not-found__title">404</h1>
        <p class="not-found__text">
            申し訳ありません。<br>お探しのページが見つかりません。
        </p>
        <div class="not-found__button">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="link-button link-button--not-found">
                <span class="link-button__text link-button__text--not-found">Page TOP</span><span class="link-button__arrow link-button__arrow--not-found"></span>
            </a>
        </div>
    </div>


</div>
</section>


<?php get_footer(); ?>