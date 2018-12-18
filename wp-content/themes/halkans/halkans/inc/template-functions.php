<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Halkans
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function halkans_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	//Remove sidebar
	if ( is_front_page() ) {
		$classes[] = 'no-sidebar';
	}

	//Adds a class of header-image to pages that have it
	if ( is_page( 'Home' ) || is_page( 'We buy' ) || is_page( 'Repairs' ) ) {
		$classes[] = 'header-image';
	}

	return $classes;
}
add_filter( 'body_class', 'halkans_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function halkans_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'halkans_pingback_header' );
