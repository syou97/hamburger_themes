<?php
class custom_walker_nav_menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $output .= '<ul class="c-menu__item">';
  }
  function end_lvl(&$output, $depth = 0, $args = array()) {
    $output .= '</ul>';
  }
}

function remove_menu_id( $id ){
	return $id = array();
}
add_filter('nav_menu_item_id', 'remove_menu_id', 10);
function remove_menu_class( $classes ){ 
  return $classes = array();
}
add_filter('nav_menu_css_class', 'remove_menu_class', 10, 2);
function remove_menu_aria_current( $atts, $item, $args ){
	unset ( $atts['aria-current'] );
	return $atts;
}
add_filter('nav_menu_link_attributes', 'remove_menu_aria_current', 11, 5);



function my_setup() {
	add_theme_support('post-thumbnails'); /* アイキャッチ */
  	add_theme_support( 'menus' );/* メニュー */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support( 'html5', array( /* HTML5のタグで出力 */
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'my_setup' );


function add_files() {
	// サイト共通のCSSの読み込み
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', array(), );
  wp_enqueue_style(  'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '' );
  wp_enqueue_style(  'mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '' );
  wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.5.0.min.js', '', '', true );
  wp_enqueue_script('accordion_script', get_template_directory_uri() . '/js/script.js', array(), 'null', true); 
}
add_action('wp_enqueue_scripts', 'add_files');

function is_mobile(){
	$useragents = array(
	'iPhone', // iPhone
	'iPod', // iPod touch
	'Android.*Mobile', // 1.5+ Android *** Only mobile
	'Windows.*Phone', // *** Windows Phone
	'dream', // Pre 1.5 Android
	'CUPCAKE', // 1.5+ Android
	'blackberry9500', // Storm
	'blackberry9530', // Storm
	'blackberry9520', // Storm v2
	'blackberry9550', // Storm v2
	'blackberry9800', // Torch
	'webOS', // Palm Pre Experimental
	'incognito', // Other iPhone browser
	'webmate' // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
	}
