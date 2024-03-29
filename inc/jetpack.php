<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package WPGroundworkCSS
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function wpgroundworkcss_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'wpgroundworkcss_infinite_scroll_setup' );
