<aside class="post-blog__right blog-right">
    <div class="blog-right__box">
        <h2 class="blog-right__title">人気記事</h2>

        <?php
        $arg   = array(
            'post_type' => 'post', //投稿タイプを指定
            'posts_per_page' => 3, // 表示する件数
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order'=>'DESC',
            'post__not_in' => array($post->ID) //現在のページを除外
        );
        $the_view_query = new WP_Query( $arg );
        if ($the_view_query->have_posts()):
        while($the_view_query->have_posts()): $the_view_query->the_post();
      ?>

        <div class="blog-right__blog-items">
            <a href="<?php the_permalink(); ?>" class="blog-right__blog-item blog-item">
                <figure class="blog-item__img">
                    <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail('thumbnail' ); ?>
                    <?php } else { ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="ブログイメージ３" class="blog-card__image">
                    <?php } ?>
                </figure>
                <div class="blog-item__content">
                    <time class="blog-item__time" datetime="<?php the_time('c')?>"><?php the_time('Y.m.d')?></time>
                    <p class="blog-item__title"><?php echo wp_trim_words( get_the_title(), 14, '…' ); ?></p>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="blog-right__box">
        <h2 class="blog-right__title">口コミ</h2>
        <?php
        $args = [
        'post_type' => 'voice',
        'posts_per_page' => 1
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="blog-right__voice-item">
            <figure class="blog-right__voice-img">
                <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php } else { ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し">
                <?php } ?>
            </figure>
            <?php
            $age =  get_field('voice-age');
            $relation = get_field('voice-relation');
            ?>
            <span class="blog-right__voice-name"><?php if($age): ?><?php echo $age ?>代<?php endif; ?>(<?php echo $relation ?>)</span>
            <p class="blog-right__voice-title"><?php echo wp_trim_words( get_the_title(), 22, '…' ); ?></p>
        </div>
        <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>記事が見つかりませんでした</p>
        <?php endif; ?>
        <div class="blog-right__button-layout">
            <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="link-button">
                <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
            </a>
        </div>
    </div>

    <div class="blog-right__box">
        <h2 class="blog-right__title">キャンペーン</h2>
        <?php
        $args = [
        'post_type' => 'campaign',
        'posts_per_page' => 2
        ];
        $the_query = new WP_Query($args);
        ?>
        <div class="blog-right__campaign-items">
            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
            $old_price =  get_field('old-price');
            $new_price = get_field('new-price');
            ?>
             <?php  if($new_price && $old_price): ?>
            <div href="" class="blog-right__campaign-item campaign-card">
                <div class="campaign-card__figure">
                    <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php } else { ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し">
                    <?php } ?>
                </div>
                <div class="campaign-card__body-top">
                    <div class="campaign-card__category">
                        <?php
                        $terms = get_the_terms($post->ID, 'campaign_category');
                        foreach ($terms as $term) {
                        echo $term->name;
                        }
                        ?>
                    </div>
                    <h3 class="campaign-card__title"><?php echo wp_trim_words( get_the_title(), 15, '…' ); ?></h3>
                </div>
                <div class="campaign-card__body-under">
                    <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__footer">
                    <p class="campaign-card__old-price campaign-card__old-price--side">¥<?php echo $old_price ?></p>
                    <p class="campaign-card__new-price campaign-card__new-price--side">¥<?php echo $new_price ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>情報が見つかりませんでした</p>
            <?php endif; ?>
        </div>
        <div class="blog-right__button-layout">
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="link-button">
                <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
            </a>
        </div>
    </div>
    <div class="blog-right__box">
        <h2 class="blog-right__title">アーカイブ</h2>
        <div class="blog-right__archive-items">

            <?php
            $year_prev = null;
            $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                                YEAR( post_date ) AS year,
                                                COUNT( id ) as post_count FROM $wpdb->posts
                                                WHERE post_status = 'publish' and post_date <= now( )
                                                and post_type = 'post'
                                                GROUP BY month , year
                                                ORDER BY post_date DESC");
            foreach($months as $month) :
            $year_current = $month->year;
            if ($year_current != $year_prev){
            if ($year_prev != null){?>
                        </ul></div>
                    <?php } ?>
            <div class="blog-right__archive-item"><div class="blog-right__archive-year js-blog-right__archive-year"><?php echo $month->year; ?></div>
            <ul class="blog-right__archive-months">
                <?php } ?>
                <li>
                    <a href="<?php bloginfo('url') ?>/date/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
                        <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月
                        (<?php echo $month->post_count; ?>)
                    </a>
                </li>
                <?php $year_prev = $year_current;
                endforeach; ?>
            </ul></div>

        </div>
    </div>
</aside>