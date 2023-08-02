<?php get_header(); ?>

<section class="page-about">

<div class="page-about__lower-fv lower-fv">
    <div class="lower-fv__center">
        <h1 class="lower-fv__title">About</h1>
    </div>
</div>
<div class="page-about__article lower-article">
    <div class="page-about__inner inner">
    <?php get_template_part('breadcrumb'); ?>
        <div class="page-about__wrapper">
            <div class="page-about__figure u-desktop">
                <div class="page-about__image2"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_about_02-pc.jpg" alt="アバウトイメージ２"></div>
                <div class="page-about__image1"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_about_01-pc.jpg" alt="アバウトイメージ１"></div>
            </div>
            <div class="page-about__center">
                <h2 class="page-about__title">Dive into<br>the Ocean</h2>
                <div class="page-about__right">
                    <p class="page-about__copy">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
            </div>
        </div>

        <div class="page-about__gallery gallery">
          <div id="gallery__modal-window"></div>
            <div class="gallery__title section-title">
                <p class="section-title__main">Gallery</p>
                <h2 class="section-title__sub">フォト</h2>
            </div>
            <div class="gallery__containers">
              <div class="gallery__container-upper">
                <div class="gallery__image gallery__image--1 js-gallery__image"><img src="<?php the_field('gallery-1'); ?>" alt="ギャラリーイメージ１"></div>
                <div class="gallery__image gallery__image--2 js-gallery__image"><img src="<?php the_field('gallery-2'); ?>" alt="ギャラリーイメージ２"></div>
                <div class="gallery__image gallery__image--3 js-gallery__image"><img src="<?php the_field('gallery-3'); ?>" alt="ギャラリーイメージ３"></div>
              </div>
              <div class="gallery__container-lower">
                <div class="gallery__image gallery__image--4 js-gallery__image"><img src="<?php the_field('gallery-4'); ?>" alt="ギャラリーイメージ４"></div>
                <div class="gallery__image gallery__image--5 js-gallery__image"><img src="<?php the_field('gallery-5'); ?>" alt="ギャラリーイメージ５"></div>
                <div class="gallery__image gallery__image--6 js-gallery__image"><img src="<?php the_field('gallery-6'); ?>" alt="ギャラリーイメージ６"></div>
              </div>
            </div>
            <!-- <div class="gallery__boxes">
                <div class="gallery__box">
                    <div class="gallery__one-piece"><figure class="gallery__image js-gallery__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/information_fv-sp.jpg" alt=""></figure></div>
                    <div class="gallery__two-pieces">
                        <figure class="gallery__image js-gallery__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_02-sp.jpg" alt=""></figure>
                        <figure class="gallery__image js-gallery__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about-img-04.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="gallery__box">
                    <div class="gallery__two-pieces">
                        <figure class="gallery__image js-gallery__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about_img-05.jpg" alt=""></figure>
                        <figure class="gallery__image js-gallery__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/top_campaign_01-sp.jpg" alt=""></figure>
                    </div>
                    <div class="gallery__one-piece"><figure class="gallery__image js-gallery__image"><img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about_img-06.jpg" alt=""></figure></div>
                </div>
            </div> -->
        </div>

    </div>
</div>
</section>


<?php get_footer(); ?>