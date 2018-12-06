<?php
/**
 * Template Name: Amps & Speakers page
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
     'post_type'      => 'ampsspeakers',
     'posts_per_page' => 10,
 		];
 		$loop = new WP_Query($args);
 		while ($loop->have_posts()) {
 		    $loop->the_post();
 		    ?>
 		    <div class="entry-content">
 		        <?php the_title(); ?>
 		        <?php the_content(); ?>
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
