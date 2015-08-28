<?php
/**
 * toastframe functions and definitions
 *
 * @package toastframe
 */

/**
 * Set options framework
 */
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/options-framework/' );
require_once dirname( __FILE__ ) . '/inc/options-framework/options-framework.php';

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'toastframe_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function toastframe_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on toastframe, use a find and replace
	 * to change 'toastframe' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'toastframe', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'toastframe' ),
	) );

	/*
	 * Switch default core markup for search form
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'toastframe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // toastframe_setup
add_action( 'after_setup_theme', 'toastframe_setup' );

/**
 * Enqueue scripts and styles.
 */
function toastframe_scripts() {

	wp_register_style('toastframe-style', get_template_directory_uri() . '/style.css');
	wp_register_style('font-awesome', get_template_directory_uri() . '/dist/css/font-awesome.min.css');

	wp_enqueue_style( 'font-awesome');
	wp_enqueue_style( 'toastframe-style');

	wp_register_script('modernizr', get_template_directory_uri() . '/dist/js/modernizr.min.js', array(), null, false);
	wp_register_script('toast-scripts', get_template_directory_uri() . '/dist/js/lib.min.js', array(), null, true );
	
	wp_enqueue_script('modernizr');
	wp_enqueue_script('toast-scripts');
}
add_action( 'wp_enqueue_scripts', 'toastframe_scripts' );




/* ==========================================================================
Implement the Custom Header feature.
========================================================================== */
//require get_template_directory() . '/inc/custom-header.php';

// Load google fonts
require get_template_directory() . '/inc/google-fonts.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/extras.php';

// Activate TGM Plugin activation
require get_template_directory() . '/inc/plugin-activation/plugin-activation.php';

// Add shortcodes and shortcode buttons
require get_template_directory() . '/inc/toast-shortcodes.php';
