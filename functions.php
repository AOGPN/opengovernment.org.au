<?php 

// *********** Enqueue CSS

function load_css() {
	wp_enqueue_style ('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
	wp_enqueue_style ('fonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic,700italic' );
	wp_enqueue_style ('master', get_stylesheet_directory_uri() . '/css/master.css');
	wp_enqueue_style ('overrides', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'load_css');


// *********** Enqueue JS

function load_js() {
	wp_enqueue_script ('jquery');
	wp_enqueue_script ('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script ('fitvids', get_stylesheet_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), null, true);
	wp_enqueue_script ('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'load_js');


// *********** Register menu

function register_menus() {
  register_nav_menus(array(
		'main-nav' =>  __('Main Nav'),
	));
}
add_action( 'init', 'register_menus' );


// *********** Include the menu walker

require_once('inc/wp_bootstrap_navwalker.php');

// *********** Title tag

add_theme_support( 'title-tag' );

// *********** Thumbnails

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'tab-feature', 400, 200, true );
	add_image_size( 'small-thumb', 120, 120, true );
};


// *********** Register widgets for sidebar/footer

function ht_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Footer 1', 'opengov' ),
		'id' => 'footer-1-widget-area',
		'description' => __( 'Footer 1 widget area', 'opengov' ),
		'before_widget' => '<div class="widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer 2', 'opengov' ),
		'id' => 'footer-2-widget-area',
		'description' => __( 'Footer 2 widget area', 'opengov' ),
		'before_widget' => '<div class="widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer 3', 'opengov' ),
		'id' => 'footer-3-widget-area',
		'description' => __( 'Footer 3 widget area', 'opengov' ),
		'before_widget' => '<div class="widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}

add_action( 'widgets_init', 'ht_widgets_init' );


?>