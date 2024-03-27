<?php

// head内　emoji削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


// カスタムメニューを有効化
add_theme_support( 'menus' );
// カスタムメニューの「場所」を設定するコード
register_nav_menu( 'gnavi', 'ヘッダーのナビゲーション' );


// カテゴリーURLから「category」を削除
add_filter('user_trailingslashit', 'remcat_function');
function remcat_function($link) {
	return str_replace("/category/", "/", $link);
}
add_action('init', 'remcat_flush_rules');
function remcat_flush_rules() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}
add_filter('generate_rewrite_rules', 'remcat_rewrite');
function remcat_rewrite($wp_rewrite) {
	$new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
	$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

// 子カテゴリでも、親カテゴリテンプレートを使用
add_filter( 'category_template', 'my_category_template' );

function my_category_template( $template ) {
	$category = get_queried_object();
	if ( $category->parent != 0 &&
		( $template == "" || strpos( $template, "category.php" ) !== false ) ) {
		$templates = array();
		while ( $category->parent ) {
			$category = get_category( $category->parent );
			if ( !isset( $category->slug ) ) break;
			$templates[] = "category-{$category->slug}.php";
			$templates[] = "category-{$category->term_id}.php";
		}
		$templates[] = "category.php";
		$template = locate_template( $templates );
	}
	return $template;
}

//アイキャッチ画像を有効化
add_theme_support( 'post-thumbnails' );
add_image_size('large_thumbnail', 640, 390 ,true );
add_image_size('middle_thumbnail', 540, 330 ,true );

// 次へ　前へ　にclass付与
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="eng prev" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="eng next" href=', $output);
}


//画像パス
function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	return $content;
}
add_action('the_content', 'replaceImagePath');

?>