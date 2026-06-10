<?php
/**
 * CDMG theme functions.
 *
 * Loads the existing site stylesheet and script, registers menus, and turns on
 * the WordPress features the templates rely on. Kept deliberately small so the
 * design stays driven by /css/style.css.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

/**
 * Theme setup: features WordPress should enable for this theme.
 */
function cdmg_setup() {
	add_theme_support( 'title-tag' );                 // Let WP manage the <title> (good for SEO/AEO).
	add_theme_support( 'post-thumbnails' );           // Featured images for blog cards and article banners.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'cdmg' ),
	) );
}
add_action( 'after_setup_theme', 'cdmg_setup' );

/**
 * Load styles and scripts.
 */
function cdmg_assets() {
	$theme = get_template_directory_uri();
	$ver   = wp_get_theme()->get( 'Version' );

	// Google Fonts (same families the design uses).
	wp_enqueue_style( 'cdmg-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap', array(), null );

	// The full site design.
	wp_enqueue_style( 'cdmg-main', $theme . '/css/style.css', array(), $ver );

	// WordPress-only additions live in the theme root style.css (article body, FAQ block).
	wp_enqueue_style( 'cdmg-theme', get_stylesheet_uri(), array( 'cdmg-main' ), $ver );

	// Interactions (mobile nav, reveal on scroll, lead forms).
	wp_enqueue_script( 'cdmg-main', $theme . '/js/main.js', array(), $ver, true );
}
add_action( 'wp_enqueue_scripts', 'cdmg_assets' );

/**
 * Preconnect to the font host (small performance win, matches the static site).
 */
function cdmg_resource_hints( $hints, $relation ) {
	if ( 'preconnect' === $relation ) {
		$hints[] = 'https://fonts.googleapis.com';
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' );
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'cdmg_resource_hints', 10, 2 );

/**
 * Favicon, using the logo already in the theme.
 */
function cdmg_favicon() {
	echo '<link rel="icon" type="image/png" href="' . esc_url( get_template_directory_uri() . '/assets/cdmg-favicon.png' ) . '" />' . "\n";
}
add_action( 'wp_head', 'cdmg_favicon' );

/**
 * Helper: the URL of the blog listing page (the page set as "Posts page"),
 * falling back to /blog/ if none is set. Used by the nav and breadcrumbs.
 */
function cdmg_blog_url() {
	$posts_page = (int) get_option( 'page_for_posts' );
	if ( $posts_page ) {
		return get_permalink( $posts_page );
	}
	return home_url( '/blog/' );
}

/**
 * Helper: a trimmed excerpt for blog cards.
 */
function cdmg_card_excerpt( $words = 22 ) {
	$text = get_the_excerpt();
	return wp_trim_words( $text, $words, '' );
}

/**
 * Helper: the primary category name for a post, shown as the card tag.
 */
function cdmg_primary_category() {
	$cats = get_the_category();
	if ( ! empty( $cats ) ) {
		return esc_html( $cats[0]->name );
	}
	return '';
}
