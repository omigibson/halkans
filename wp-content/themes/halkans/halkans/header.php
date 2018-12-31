<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halkans
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato|Playfair+Display:400,700,700i,900i" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'halkans' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
					<?php //the_header_image_tag(); ?>
					<div class="logo-container">
						<h1 class="logo">Halkan's Rockhouse</h1><p class="logo">Est. 1970</p>
					</div>
				</a>
		</div><!-- .site-branding -->


		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'halkans' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
				wp_nav_menu( array(
					'theme_location' => 'secondary',
					'menu_class' => 'secondary',
					) );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
