<?php get_header(); ?>

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
            <article class="post-blog__left">
            <div>
                <h1 class="post-blog__date"><?php echo get_the_date('Y年n月'); ?></h1> 
            </div>
                <div class="post-blog__cards blog-cards blog-cards--post">
                <?php if(have_posts()): ?>

                <?php while(have_posts()): the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                        <div class="blog-card__figure">
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail('medium', array('class' => 'blog-card__image') ); ?>
                            <?php } else { ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し" class="blog-card__image">
                            <?php } ?>
                        </div>
                        <div class="blog-card__body">
                        <time class="blog-card__time" datetime="<?php the_time('c')?>"><?php the_time('Y.m.d')?></time>
                        <h3 class="blog-card__title"><?php the_title(); ?></h3>
                        <p class="blog-card__copy"><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事が見つかりませんでした</p>

                <?php endif; ?>

                </div>
                <nav class="post-blog__pagination list-pagination">
                    <?php wp_pagenavi(); ?>
                </nav>
            </article>

<?php get_sidebar(); ?>

</div>

</div>
</div>
</section>

<?php get_footer(); ?>