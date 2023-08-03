<?php get_header(); ?>

<?php
    // 記事のビュー数を更新(ログイン中・クローラーは除外)
    if (!is_user_logged_in() && !is_robots()) {
    setPostViews(get_the_ID());
    }
?>

<section class="post-blog">

<div class="post-blog__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">Blog</h1>
    </div>
</div>
<div class="post-blog__article lower-article">
    <div class="post-blog__inner inner">
    <?php get_template_part('breadcrumb'); ?>
        <div class="post-blog__wrapper">
            <div class="post-blog__left">
            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>


                <time class="post-blog__time" datetime="<?php the_time('c')?>"><?php the_date('Y.m.d'); ?></time>
                <h2 class="post-blog__title"><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail()): ?>
                    <figure class="post-blog__img">
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                <?php endif; ?>
                <div class="post-blog__content">
                    <?php the_content(); ?>
                </div>
                <!-- <p class="post-blog__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                <figure class="post-blog__img"><img src="./assets/images/common/about_img-05.jpg" alt="ブログ詳細イメージ"></figure>
                <p class="post-blog__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                <nav class="post-blog__list-box">
                    <ul class="post-blog__lists">
                        <li class="post-blog__list"><a href="">リスト１</a></li>
                        <li class="post-blog__list"><a href="">リスト２</a></li>
                        <li class="post-blog__list"><a href="">リスト３</a></li>
                    </ul>
                </nav>
                <p class="post-blog__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p> -->

            <?php endwhile; ?>
            <?php else: ?>
                <p>記事が見つかりませんでした</p>
            <?php endif; ?>

                <nav class="post-blog__pagination post-blog__pagination--single list-pagination">
                    <ul class="list-pagination__items">
                        <?php if (get_previous_post()):?>
                        <li class="list-pagination__item list-pagination__prev list-pagination__item--prev">
                        <?php previous_post_link('%link', '＜',false); ?>
                        </li>
                        <?php endif; ?>
                        <?php if (get_next_post()):?>
                        <li class="list-pagination__item list-pagination__next list-pagination__item--next">
                        <?php next_post_link('%link', '＞',false); ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>

            </div>


<?php get_sidebar(); ?>

</div>

</div>
</div>
</section>

<?php get_footer(); ?>