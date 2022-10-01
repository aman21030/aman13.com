<?php
function theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	register_nav_menus( array(
		'global' => 'グローバルナビゲーション'
	) );
	theme_remove();
}
function theme_remove() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	add_filter( 'emoji_svg_url', '__return_false' );
	remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles',     'print_emoji_styles' );
	remove_action( 'admin_print_styles',  'print_emoji_styles' );
}
add_action( 'after_setup_theme', 'theme_setup' );


function theme_scripts() {
	$version = wp_get_theme()->get( 'Version' );
	theme_styles( $version );
	// Comment Reply.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), $version, true );
}
function theme_styles( $version ) {
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/reset.css', array(), $version );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'theme-reset' ), $version );
	// WordPress Dash Icon.
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_widgets_init() {
	register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'メインで使うサイドバー',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

function theme_search_mark( $str ) {
	if ( is_search() ) {
		$search_query = trim( get_search_query() );
		$search_query = mb_convert_kana( $search_query, 'as', 'UTF-8' );

		if ( !empty( $search_query ) ) {
			$str = str_replace( $search_query, '<mark>' . $search_query . '</mark>', $str );
		}
	}
	return $str;
}
add_action( 'the_title', 'theme_search_mark' );
add_action( 'the_excerpt', 'theme_search_mark' );

//ショートコードの作り方
// function theme_short_code( $args ) {
// 	var_dump($args);
// 	$html = '(´・ω・｀)'.$args['kind'];
// 	return $html;
// }
// add_shortcode('kao', 'theme_short_code');