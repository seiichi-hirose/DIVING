<?php get_header(); ?>

<section class="page-campaign">

<div class="page-campaign__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">Campaign</h1>
    </div>
</div>
<div class="page-campaign__article lower-article">
    <div class="page-campaign__inner inner">
    <?php get_template_part('breadcrumb'); ?>
        <div class="page-campaign__wrapper">
            <nav class="page-campaign__categories categories">
                <ul class="categories__items">
                    <li class="categories__item categories__item--active"><a href="<?php echo esc_url(home_url('/campaign/')); ?>">ALL</a></li>
                    <?php
                    $args = [
                    'taxonomy' => 'campaign-category'
                    ];
                    $terms = get_terms($args);
                    foreach ($terms as $term) {
                    echo '<li class="categories__item"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                    }
                    ?>
                    <!-- <li class="categories__item"><a href="">ライセンス講習</a></li>
                    <li class="categories__item"><a href="">ファンダイビング</a></li>
                    <li class="categories__item"><a href="">体験ダイビング</a></li> -->
                </ul>
            </nav>
            <div class="page-campaign__cards campaign-cards">
            <?php if(have_posts()): ?>

            <?php while(have_posts()): the_post(); ?>
                <div class="campaign-cards__item campaign-card">
                    <div class="campaign-card__figure">
                        <?php if (has_post_thumbnail()) { ?>
                            <?php the_post_thumbnail('large', array('class' => 'campaign-card__image') ); ?>
                        <?php } else { ?>
                            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し" class="campaign-card__image">
                        <?php } ?>
                    </div>
                    <div class="campaign-card__body-top">
                      <div class="campaign-card__category">
                        <?php
                        $terms = get_the_terms($post->ID, 'campaign-category');
                        foreach ($terms as $term) {
                        echo $term->name;
                        }
                        ?>
                    </div>
                      <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                    </div>
                    <div class="campaign-card__body-under">
                      <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__footer">
                        <p class="campaign-card__old-price">¥<?php the_field('old-price'); ?></p>
                        <p class="campaign-card__new-price">¥<?php the_field('new-price'); ?></p>
                      </div>
                      <p class="campaign-card__text u-desktop">
                        <?php the_content(); ?>
                      </p>
                    </div>
                    <div class="campaign-card__bottom u-desktop">
                        <span class="campaign-card__time">2023/6/1-9/30</span>
                        <span class="campaign-card__remark">ご予約・お問い合わせはコチラ</span>
                        <div class="campaign-card__button-layout">
                            <a href="contact.html" class="link-button">
                              <span class="link-button__text">Contact us</span><span class="link-button__arrow"></span>
                            </a>
                        </div>
                       </div>
                  </div>
                  <?php endwhile; ?>
                <?php else: ?>
                    <p>情報が見つかりませんでした</p>

                <?php endif; ?>


            </div>

            <nav class="page-campaign__pagination list-pagination">
                <?php wp_pagenavi(); ?>
            </nav>
        </div>
    </div>
</div>
</section>


<?php get_footer(); ?>