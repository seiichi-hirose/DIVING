<?php get_header(); ?>

<section class="page-contact">

<div class="page-contact__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">Contact</h1>
    </div>
</div>
<div class="page-contact__article lower-article">
    <div class="page-contact__inner inner">
    <?php get_template_part('breadcrumb'); ?>
    
        <div class="page-contact__wrapper">

        <div class="page-contact__error">
          <p class="page-contact__error-text">※必須項目が入力されていません。<br class="u-mobile">入力してください。</p>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="154" title="お問い合わせ"]'); ?>



        </div>

    </div>
</div>
</section>


<?php get_footer(); ?>