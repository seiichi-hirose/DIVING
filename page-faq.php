<?php get_header(); ?>

<section class="faq">

<div class="faq__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">FAQ</h1>
    </div>
</div>
<div class="faq__article lower-article">
    <div class="faq__inner inner">
    <?php get_template_part('breadcrumb'); ?>

    <?php
    $question1 = get_field('question_1');
    $question2 = get_field('question_2');
    $question3 = get_field('question_3');
    $question4 = get_field('question_4');
    $question5 = get_field('question_5');
    $question6 = get_field('question_6');
    $question7 = get_field('question_7');
    ?>
        <div class="faq__wrapper">
            <?php if($question1): ?>
            <dl class="faq__box">
                <dt class="faq__question js-faq__question"><a><?php echo $question1 ?></a></dt>
                <dd class="faq__answer"><?php the_field('answer_1'); ?></dd>
            </dl>
            <?php endif; ?>
            <?php if($question2): ?>
            <dl class="faq__box">
                <dt class="faq__question js-faq__question"><a><?php echo $question2 ?></a></dt>
                <dd class="faq__answer"><?php the_field('answer_2'); ?></dd>
            </dl>
            <?php endif; ?>
            <?php if($question3): ?>
            <dl class="faq__box">
                <dt class="faq__question js-faq__question"><a><?php echo $question3 ?></a></dt>
                <dd class="faq__answer"><?php the_field('answer_3'); ?></dd>
            </dl>
            <?php endif; ?>
            <?php if($question4): ?>
            <dl class="faq__box">
                <dt class="faq__question js-faq__question"><a><?php echo $question4 ?></a></dt>
                <dd class="faq__answer"><?php the_field('answer_4'); ?></dd>
            </dl>
            <?php endif; ?>
            <?php if($question5): ?>
            <dl class="faq__box">
                <dt class="faq__question js-faq__question"><a><?php echo $question5 ?></a></dt>
                <dd class="faq__answer"><?php the_field('answer_5'); ?></dd>
            </dl>
            <?php endif; ?>
            <?php if($question6): ?>
            <dl class="faq__box">
                <dt class="faq__question js-faq__question"><a><?php echo $question6 ?></a></dt>
                <dd class="faq__answer"><?php the_field('answer_6'); ?></dd>
            </dl>
            <?php endif; ?>
            <?php if($question7): ?>
            <dl class="faq__box">
                <dt class="faq__question js-faq__question"><a><?php echo $question7 ?></a></dt>
                <dd class="faq__answer"><?php the_field('answer_7'); ?></dd>
            </dl>
            <?php endif; ?>
    </div>
</div>
</div>
</section>

<?php get_footer(); ?>