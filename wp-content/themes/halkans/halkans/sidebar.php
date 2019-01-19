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
<aside id="secondary" class="widget-area mobile-hide">
	<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
		<div class="filter">
			<h3>Brands</h3>
			<?php
				$brand = '';
				if ($post_type === 'electricguitars' || $post_type === 'basses' ){
					$brand = 'brand';
				}
				else if ($post_type === 'acoustic_steel'){
					$brand = 'acoustic_steel_brand';
				}
				else if ($post_type === 'ampsspeakers' || $post_type === 'sold-amps'){
					$brand = 'amp_brand';
				}
				else if ($post_type === 'sold-instruments'){
					$brand = 'sold_instrument_brand';
				}
				//Brand filter
				if( $terms = get_terms(array(
		 			'taxonomy' => $brand) ) ) :
					foreach ( $terms as $key => $term ) :
						$str2 = substr($term->name, 1);
						echo '<div>
										<input type="checkbox" name="brand[' . $key . ']" id="' . $term->term_id . '" value="' . $term->term_id . '">
										<label for="' . $term->term_id . '">' . $str2 . '</label>
										<input type="hidden" name="post_type" value="' . $post_type . '">
										<input type="hidden" name="brand_type" value="' . $brand . '">
									</div>';
					endforeach;
				endif;
			?>
		</div>
		<div class="filter">
			<h3>Year Made</h3>
			<?php
				//Age filter
				if( $terms = get_terms(array(
					'taxonomy' => 'age_group') ) ) :
					foreach ( $terms as $key => $term ) :
						echo '<div>
										<input type="checkbox" name="year[' . $key . ']" id="' . $term->term_id . '" value="' . $term->term_id . '">
										<label for="' . $term->term_id . '">' . $term->name . '</label>
									</div>';
					endforeach;
				endif;
			?>
		</div>
		<div class="filter"  <?php if($post_type === 'sold-instruments' || $post_type === 'sold-amps' ){echo 'id="pricediv"';}?>>
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
		</div>
		<input type="hidden" name="action" value="myfilter">
	</form>
</aside>
