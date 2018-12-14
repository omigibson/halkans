<?php
/**
 * The sidebar containing product filters
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halkans
 */

	$post_type = get_query_var('pagename');
?>
<aside id="secondary" class="widget-area">
	<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
		<h3>Brands</h3>
		<?php
				//Brand filter
				if( $terms = get_terms(array(
		 			'taxonomy' => 'brand') ) ) :
					foreach ( $terms as $key => $term ) :
						echo '<div>
										<input type="checkbox" name="brand[' . $key . ']" id="' . $term->term_id . '" value="' . $term->term_id . '">
										<label for="' . $term->term_id . '">' . $term->name . '</label>
										<input type="hidden" name="post_type" value="' . $post_type . '">
									</div>';
					endforeach;
				endif;
			?>
			<h3>Price</h3>
			<?php
			//Price filter
			if( $terms = get_terms(array(
				'taxonomy' => 'price_group') ) ) :
				foreach ( $terms as $key => $term ) :
					echo '<div>
									<input type="checkbox" name="price[' . $key . ']" id="' . $term->term_id . '" value="' . $term->term_id . '">
									<label for="' . $term->term_id . '">' . $term->name . '</label>
								</div>';
				endforeach;
			endif;
		?>
		<h3>Year Made</h3>
		<?php
		//Age filter
		if( $terms = get_terms(array(
			'taxonomy' => 'year_made') ) ) :
			foreach ( $terms as $key => $term ) :
				echo '<div>
								<input type="checkbox" name="year[' . $key . ']" id="' . $term->term_id . '" value="' . $term->term_id . '">
								<label for="' . $term->term_id . '">' . $term->name . '</label>
							</div>';
			endforeach;
		endif;
	?>
		<p>Apply filter</p>
		<input type="hidden" name="action" value="myfilter">
	</form>
</aside>
