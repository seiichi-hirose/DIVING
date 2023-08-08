<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
	wp_enqueue_style( 'google-fonts-noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" rel="stylesheet" rel="stylesheet"', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'google-fonts-gotu', '//fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet"', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'google-fonts-lato', '//fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet"', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'swiper-css', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.0.0', 'all' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array( 'swiper-css' ), '1.0.1', 'all' );


	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.js', array(), '1.0.1', true );
	wp_enqueue_script( 'swiper-js', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array( 'jquery' ), '9.0.0', true, true );
	wp_enqueue_script( 'inview-js', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array( 'jquery' ), '1.0.1', true, true );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.1', true, true );

}
add_action('wp_enqueue_scripts', 'my_script_init');


/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );

//アイキャッチ画像を有効化
function setup_post_thumnails(){
	add_theme_support('post-thumbnails', ['blog', 'campaign','voice']);
	}
	add_action('after_setup_theme', 'setup_post_thumnails');


// voiceページで投稿数を6にする
function twpp_change_posts_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	if ( $query->is_post_type_archive('voice') ) { // 「is_archive」ではなく「is_post_type_archive」を使用
		$query->set( 'posts_per_page', 6 );
	}
}
add_action( 'pre_get_posts', 'twpp_change_posts_per_page' );

// campaignページで投稿数を4にする
function camp_change_posts_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	if ( $query->is_post_type_archive('campaign') ) { // 「is_archive」ではなく「is_post_type_archive」を使用
		$query->set( 'posts_per_page', 4 );
	}
}
add_action( 'pre_get_posts', 'camp_change_posts_per_page' );


// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action( 'wp_footer', 'add_origin_thanks_page' );
 function add_origin_thanks_page() {
 $thanks = home_url('/thanks/');
   echo <<< EOC
     <script>
       var thanksPage = {
         154: '{$thanks}',
       };
     document.addEventListener( 'wpcf7mailsent', function( event ) {
       location = thanksPage[event.detail.contactFormId];
     }, false );
     </script>
   EOC;
 }

 //特定の固定ページのエディタを表示にする
add_filter('use_block_editor_for_post', function($use_block_editor, $post){
    if($post->post_type === 'page'){
        if(!in_array($post->post_name, ['privacypolicy', 'terms-of-service'])){ // ページスラッグが該当しないならコンテンツエディターを非表示
            remove_post_type_support('page', 'editor');
            return false;
        }
    }
    return $use_block_editor;
}, 10, 2);



//「投稿」の名称変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


//人気記事表示PV取得
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ""){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count . ' Views';
}

//人気記事表示PV表示
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ""){
        $count = 0;
    }
    $count++;
    update_post_meta($postID, $count_key, $count);
}

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);