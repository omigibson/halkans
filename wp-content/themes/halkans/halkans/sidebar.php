<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halkans
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	echo do_shortcode('[searchandfilter fields="post_tag" types="checkbox" submit_label="Filter" headings="Brands", "Price", "Vintage"]');
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
