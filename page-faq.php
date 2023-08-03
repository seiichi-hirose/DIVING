<?php get_header(); ?>

<section class="faq">

<div class="faq__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">FAQ</h1>
    </div>
</div>
<div class="faq__article lower-article">
    <div class="faq__inner inner">
    <?php get_template_part('template/breadcrumb'); ?>

        <div class="faq__wrapper">
        <?php
        $repetitive_faq = SCF::get('repetitive-faq');
        foreach ($repetitive_faq as $fields ) {
        ?>

            <dl class="faq__box">
                <dt class="faq__question js-faq__question"><a><?php echo esc_html( $fields['question'] ); ?></a></dt>
                <dd class="faq__answer"><?php echo esc_html( $fields['answer'] ); ?></dd>
            </dl>

        <?php } ?>
        </div>
</div>
</div>
</section>

<?php get_footer(); ?>