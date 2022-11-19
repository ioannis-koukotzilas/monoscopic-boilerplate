<?php

/**
 * Monoscopic functions and definitions
 */

if (!defined('_MONOSCOPIC_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_MONOSCOPIC_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */

function monoscopic_setup()
{

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Let WordPress manage the document title.
	add_theme_support('title-tag');

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'monoscopic'),
		)
	);

	// Switch default core markup to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'monoscopic_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */

function monoscopic_content_width()
{
	$GLOBALS['content_width'] = apply_filters('monoscopic_content_width', 640);
}
add_action('after_setup_theme', 'monoscopic_content_width', 0);

/**
 * Enqueue scripts and styles.
 */

function monoscopic_scripts()
{
	wp_enqueue_style('monoscopic-style', get_stylesheet_uri(), array(), _MONOSCOPIC_VERSION);

	wp_enqueue_script('monoscopic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _MONOSCOPIC_VERSION, true);
}
add_action('wp_enqueue_scripts', 'monoscopic_scripts');

/**
 * Custom template tags for this theme.
 */

require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */

require get_template_directory() . '/inc/template-functions.php';

/**
 * Load WooCommerce compatibility file.
 */

if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}
