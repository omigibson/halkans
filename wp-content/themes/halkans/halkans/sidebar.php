<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halkans
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	// echo do_shortcode('[searchandfilter fields="brand" types="checkbox" submit_label="Filter" headings="Brands", "Price", "Vintage"]');
?>
	<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
		<?php
			if( $terms = get_terms(array(
	 			'taxonomy' => 'brand'
				)
				)) : // to make it simple I use default categories
				foreach ( $terms as $term ) :
					echo '<div>
									<input type="checkbox" name="categoryfilter" id="' . $term->term_id . '" value="' . $term->term_id . '">
									<label for="' . $term->term_id . '">' . $term->name . '</label>
								</div>';
				endforeach;
			endif;
		?>
		<button>Apply filter</button>
		<input type="hidden" name="action" value="myfilter">
	</form>
<?php }
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
