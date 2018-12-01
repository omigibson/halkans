<?php
/**
 * The template for displaying the front page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Halkans
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      	<div class="entry-content">
      		<?php
      		the_content();

      		wp_link_pages( array(
      			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'halkans' ),
      			'after'  => '</div>',
      		) );
      		?>
      	</div><!-- .entry-content -->

      </article><!-- #post-<?php the_ID(); ?> -->

<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
