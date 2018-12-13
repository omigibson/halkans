<?php
/**
 * Template Name: Instruments page
 *
 */

 get_header();
 ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">

 		<?php if ( have_posts() ) : ?>

 			<header class="page-header">
 				<h1><?php single_cat_title(); ?></h1>
 			</header><!-- .page-header -->

 			<?php

 			/* Start the Loop */
      $args = [
     'post_type'      => get_query_var('pagename'),
     'posts_per_page' => 10,
 		];

 		$loop = new WP_Query($args);
 		while ($loop->have_posts()) {
 		    $loop->the_post();
 		    ?>
 		    <div class="entry-content">
 		        <h2><?php the_title(); ?></h2>
            <h3><?php the_field('Price'); ?></h3>
 		        <p><?php the_content(); ?></p>
 		    </div>
 		    <?php
 		}

 			the_posts_navigation();

 		else :

 			get_template_part( 'template-parts/content', 'none' );

 		endif;
 		?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 get_sidebar();
 get_footer();
