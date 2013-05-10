<?php
/**
 * WPGroundworkCSS functions and definitions
 *
 * @package WPGroundworkCSS
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'wpgroundworkcss_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function wpgroundworkcss_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on WPGroundworkCSS, use a find and replace
	 * to change 'wpgroundworkcss' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wpgroundworkcss', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wpgroundworkcss' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // wpgroundworkcss_setup
add_action( 'after_setup_theme', 'wpgroundworkcss_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function wpgroundworkcss_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'wpgroundworkcss_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'wpgroundworkcss_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function wpgroundworkcss_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wpgroundworkcss' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'wpgroundworkcss_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function wpgroundworkcss_scripts() {
	wp_enqueue_style( 'WPGroundworkCSS-style', get_stylesheet_uri() );

	global $wp_styles;	
	
	wp_enqueue_style( 'all-ie-only', get_stylesheet_directory_uri() . '/css/groundwork-ie.css' );
	$wp_styles->add_data( 'all-ie-only', 'conditional', 'IE' );

	wp_enqueue_style( 'font-awesome-ie7', get_stylesheet_directory_uri() . '/css/font-awesome-ie7.min.css', array(), '3.0.2' );
	$wp_styles->add_data( 'font-awesome-ie7', 'conditional', 'lte IE 7' );

	wp_enqueue_script( 'WPGroundworkCSS-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'WPGroundworkCSS-all', get_template_directory_uri() . '/js/groundwork.all.js', array(), '1.6', true );

	wp_enqueue_script( 'WPGroundworkCSS-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array( 'jquery' ), '20130115', true );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.6.2.min.js', array(), '2.6.2', false );

   	wp_enqueue_script('jquery');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'WPGroundworkCSS-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpgroundworkcss_scripts' );

/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );