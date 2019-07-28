<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ochasite
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ochasite_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ochasite_jetpack_setup' );
