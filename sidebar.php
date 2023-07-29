<aside class="post-blog__right blog-right">
    <div class="blog-right__box">
        <h2 class="blog-right__title">人気記事</h2>

        <?php
        $arg   = array(
            'posts_per_page' => 3, // 表示する件数
            'orderby' => 'rand', //ランダムに投稿を取得
            'post_type' => 'post', //投稿タイプを指定
            'post__not_in' => array($post->ID) //現在のページを除外
        );
        $posts = get_posts( $arg );
        if ( $posts ): ?>
            <?php
            foreach ( $posts as $post ) :
                setup_postdata( $post ); ?>
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
                    <p class="blog-item__title"><?php the_title(); ?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
            <?php
            endif;
            wp_reset_postdata();
            ?>
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
                    <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し" class="voice-card__image">
                <?php } ?>
            </figure>
            <span class="blog-right__voice-name"><?php the_field('voice-age'); ?>代(<?php the_field('voice-relation'); ?>)</span>
            <p class="blog-right__voice-title"><?php the_title(); ?></p>
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
            <div href="" class="blog-right__campaign-item campaign-card">
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
                        $terms = get_the_terms($post->ID, 'campaign_category');
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
                    <p class="campaign-card__old-price campaign-card__old-price--side">¥<?php the_field('old-price'); ?></p>
                    <p class="campaign-card__new-price campaign-card__new-price--side">¥<?php the_field('new-price'); ?></p>
                    </div>
                </div>
            </div>
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