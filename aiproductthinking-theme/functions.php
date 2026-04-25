<?php
/**
 * AI Product Thinking — theme functions
 *
 * @package AIProductThinking
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AIPT_THEME_VERSION', '1.0.0' );
define( 'AIPT_THEME_DIR', get_template_directory() );
define( 'AIPT_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function aipt_setup() {
	load_theme_textdomain( 'aiproductthinking', AIPT_THEME_DIR . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 40,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'aiproductthinking' ),
		'footer-navigate' => __( 'Footer — Navigate', 'aiproductthinking' ),
		'footer-connect'  => __( 'Footer — Connect', 'aiproductthinking' ),
	) );
}
add_action( 'after_setup_theme', 'aipt_setup' );

/**
 * Enqueue styles and scripts.
 */
function aipt_enqueue_assets() {
	wp_enqueue_style(
		'aipt-google-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,200;0,9..144,300;0,9..144,400;1,9..144,200;1,9..144,300&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'aipt-style',
		get_stylesheet_uri(),
		array( 'aipt-google-fonts' ),
		AIPT_THEME_VERSION
	);

	wp_enqueue_script(
		'aipt-main',
		AIPT_THEME_URI . '/assets/js/main.js',
		array(),
		AIPT_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'aipt_enqueue_assets' );

/**
 * Register theme widgets / sidebars (optional, kept minimal).
 */
function aipt_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Brand Tagline', 'aiproductthinking' ),
		'id'            => 'footer-tagline',
		'description'   => __( 'Optional widget area shown in the footer brand block.', 'aiproductthinking' ),
		'before_widget' => '<div class="footer-tagline-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'aipt_widgets_init' );

/**
 * Helper: render a button with smart targeting (page slug, anchor, or URL).
 */
function aipt_button( $label, $target, $class = 'btn btn-primary' ) {
	$href = '#';
	if ( strpos( $target, 'http' ) === 0 || strpos( $target, '/' ) === 0 || strpos( $target, '#' ) === 0 ) {
		$href = esc_url( $target );
	} else {
		$page = get_page_by_path( sanitize_title( $target ) );
		if ( $page ) {
			$href = esc_url( get_permalink( $page->ID ) );
		}
	}
	printf(
		'<a class="%1$s" href="%2$s">%3$s</a>',
		esc_attr( $class ),
		$href,
		esc_html( $label )
	);
}

/**
 * Include the demo content importer (admin only).
 */
require_once AIPT_THEME_DIR . '/inc/demo-importer.php';

/**
 * Body class additions.
 */
function aipt_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'page-home';
	}
	return $classes;
}
add_filter( 'body_class', 'aipt_body_classes' );

/**
 * Filter wp_nav_menu output for footer columns to drop the wrapping <ul>.
 */
function aipt_footer_nav_walker( $items, $args ) {
	if ( in_array( $args->theme_location, array( 'footer-navigate', 'footer-connect' ), true ) ) {
		$items = preg_replace( '#</?ul[^>]*>#', '', $items );
		$items = preg_replace( '#<li[^>]*>#', '', $items );
		$items = str_replace( '</li>', '', $items );
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'aipt_footer_nav_walker', 10, 2 );
