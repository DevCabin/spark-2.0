<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package GrowthSpark
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function growthspark_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'growthspark_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function growthspark_jetpack_setup
add_action( 'after_setup_theme', 'growthspark_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function growthspark_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function growthspark_infinite_scroll_render
