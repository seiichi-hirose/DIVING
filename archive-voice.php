<?php get_header(); ?>

<section class="page-voice">

<div class="page-voice__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">Voice</h1>
    </div>
</div>
<div class="page-voice__article lower-article">
    <div class="page-voice__inner inner">
    <?php get_template_part('template/breadcrumb'); ?>
        <div class="page-voice__wrapper">
            <nav class="page-voice__categories categories">
                <ul class="categories__items">
                    <li class="categories__item categories__item--active"><a href="<?php echo esc_url(home_url('/voice/')); ?>">ALL</a></li>
                    <?php
                    $args = [
                    'taxonomy' => 'voice_category'
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
            <div class="page-voice__cards voice-cards">
            <?php if(have_posts()): ?>

            <?php while(have_posts()): the_post(); ?>
                <div class="voice-cards__item voice-card">
                  <div class="voice-card__header">
                    <div class="voice-card__header-left">
                      <div class="voice-card__header-top">
                      <?php
                      $age =  get_field('voice-age');
                      $relation = get_field('voice-relation');
                      ?>
                        <p class="voice-card__name"><?php if($age): ?><?php echo $age ?>代<?php endif; ?>(<?php echo $relation ?>)</p>
                        <div class="voice-card__category">
                        <?php
                        $terms = get_the_terms($post->ID, 'voice_category');
                        foreach ($terms as $term) {
                        echo $term->name;
                        }
                        ?>
                        </div>
                      </div>
                      <h3 class="voice-card__title"><?php the_title(); ?></h3>
                    </div>
                    <div class="voice-card__figure">
                        <?php if (has_post_thumbnail()) { ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php } else { ?>
                            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し">
                        <?php } ?>
                    </div>
                  </div>
                  <div class="voice-card__body">
                    <p class="voice-card__copy"><?php the_content(); ?></p>
                  </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事が見つかりませんでした</p>

                <?php endif; ?>


              </div>
              <nav class="page-voice__pagination list-pagination">
                <?php wp_pagenavi(); ?>
              </nav>

        </div>
    </div>
</div>
</section>


<?php get_footer(); ?>