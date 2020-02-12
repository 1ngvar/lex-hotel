<?php
define( 'LEX_THEME_VERSION', '1.0.0' );

$theme_folder = get_template_directory_uri();

define('THEME_URL', get_template_directory_uri());

add_theme_support( 'menus' );

function lex_enqueue_styles() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	$dependencies = array('bootstrap');
	wp_enqueue_style( 'lex-style', get_stylesheet_uri(), $dependencies );
}
add_action( 'wp_enqueue_scripts', 'lex_enqueue_styles' );

function lex_enqueue_scripts() {
	$dependencies = array('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '3.4.1', true );
	wp_enqueue_script( 'popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', $dependencies, LEX_THEME_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'lex_enqueue_scripts' );


function lex_wp_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'lex_wp_setup' );


//Setting the <li> class to nav-link, as Bootstrap needs it
function add_menu_link_class($atts, $item, $args)
{
	$atts['class'] = 'nav-link';
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);


// Widgetizing sample – not hooked to anything yet
function lex_widgets_init() {

	register_sidebar( array(
		'name'          => 'Header - booking form',
		'id'            => 'header_booking_form',
		'before_widget' => '<div class="header_booking_form">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'lex_widgets_init' );


// Adding theme support for featured images
function bootstrapstarter_wp_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

