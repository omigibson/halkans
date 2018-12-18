<?php
/**
 * Template Name: Product page
 *
 */

 get_header();
 ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">
      <header class="page-header">
 				<h1><?php single_post_title(); ?></h1>
 			</header><!-- .page-header -->
      <div id="posts">

 		<?php if ( have_posts() ) :
 			/* Start the Loop */
      $args = [
     'post_type'      => get_query_var('pagename'),
     'posts_per_page' => 10,
 		];

 		$loop = new WP_Query($args);
 		while ($loop->have_posts()) {
 		    $loop->the_post();
 		    ?>
 		    <div class="entry-content product-content">
          <div class="product-header">
 		        <h2><?php the_title(); ?></h2>
            <h3 class="price-heading"><?php the_field('Price'); ?></h3>
          </div>
 		        <?php the_content(); ?>
 		    </div>
 		    <?php
 		}

 			the_posts_navigation();

 		else :

 			get_template_part( 'template-parts/content', 'none' );

 		endif;
 		?>
  </div>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 get_sidebar();
 get_footer();
