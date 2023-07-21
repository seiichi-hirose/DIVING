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
            <a href="" class="blog-right__blog-item blog-item">
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
        <div class="blog-right__voice-item">
            <figure class="blog-right__voice-img"><img src="./assets/images/common/voice_img-05.jpg" alt="ボイスイメージ１"></figure>
            <span class="blog-right__voice-name">30代(カップル)</span>
            <p class="blog-right__voice-title">ここにタイトルが入ります。ここにタイトル</p>
            <div class="blog-right__button-layout">
                <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="link-button">
                    <span class="link-button__text">View more</span><span class="link-button__arrow"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="blog-right__box">
        <h2 class="blog-right__title">キャンペーン</h2>
        <div class="blog-right__campaign-items">
            <a href="" class="blog-right__campaign-item campaign-card">
                <div class="campaign-card__figure"><img src="./assets/images/common/top_campaign_02-sp.jpg" alt="キャンペーンイメージ２" class="campaign-card__image"></div>
                <div class="campaign-card__body-top">
                    <div class="campaign-card__category">ファンダイビング</div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                </div>
                <div class="campaign-card__body-under">
                    <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__footer">
                    <p class="campaign-card__old-price">¥20,000</p>
                    <p class="campaign-card__new-price">¥16,000</p>
                    </div>
                </div>
            </a>
            <a href="" class="blog-right__campaign-item campaign-card">
                <div class="campaign-card__figure"><img src="./assets/images/common/top_campaign_02-sp.jpg" alt="キャンペーンイメージ２" class="campaign-card__image"></div>
                <div class="campaign-card__body-top">
                    <div class="campaign-card__category">ファンダイビング</div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                </div>
                <div class="campaign-card__body-under">
                    <p class="campaign-card__copy">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__footer">
                    <p class="campaign-card__old-price">¥20,000</p>
                    <p class="campaign-card__new-price">¥16,000</p>
                    </div>
                </div>
            </a>
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
            <dl class="blog-right__archive-item">
                <dt class="blog-right__archive-year js-blog-right__archive-year"><a>2023</a></dt>
                <dd class="blog-right__archive-months">
                    <a href="">3月</a>
                    <a href="">2月</a>
                    <a href="">1月</a>
                </dd>
            </dl>
            <dl class="blog-right__archive-item">
                <dt class="blog-right__archive-year js-blog-right__archive-year"><a>2022</a></dt>
                <dd class="blog-right__archive-months">
                    <a href="">3月</a>
                    <a href="">2月</a>
                    <a href="">1月</a>
                </dd>
            </dl>
        </div>
    </div>
</aside>