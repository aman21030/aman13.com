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
}
function theme_styles( $version ) {
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/reset.css', array(), $version );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'theme-reset' ), $version );
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