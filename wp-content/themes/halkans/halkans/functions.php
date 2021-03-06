<?php
/**
 * Halkans functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Halkans
 */

if ( ! function_exists( 'halkans_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function halkans_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Halkans, use a find and replace
		 * to change 'halkans' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'halkans', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location by default. The secondary was added later on.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'halkans' ),
			'secondary' =>esc_html__( 'Secondary Menu', 'halkans' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'halkans_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'halkans_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function halkans_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'halkans_content_width', 640 );
}
add_action( 'after_setup_theme', 'halkans_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function halkans_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'halkans' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'halkans' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'halkans_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function halkans_scripts() {
	wp_enqueue_style( 'halkans-style', get_stylesheet_uri() );

	wp_enqueue_script( 'halkans-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'halkans-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'halkans-show-mobile-filter', get_template_directory_uri() . '/js/show-mobile-filter.js', array(), '20151215', true );

}


//Remove unnessecary menu items from admin menu
add_action( 'wp_enqueue_scripts', 'halkans_scripts' );

function custom_menu_page_removing() {
    remove_menu_page( 'edit.php' );
		remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'custom_menu_page_removing' );

/**
 * Reorder admin menu
 */

function custom_menu_order( $menu_ord ) {
    if ( ! $menu_ord ) { return true; }
        return array(
            'edit.php?post_type=page',
						'upload.php',
						'separator1',
            'edit.php?post_type=electricguitars',
						'edit.php?post_type=basses',
						'edit.php?post_type=acoustic_steel',
						'edit.php?post_type=acoustic_nylon',
						'edit.php?post_type=other_instruments',
						'edit.php?post_type=ampsspeakers',
						'separator2',
						'edit.php?post_type=hardwarepickups',
						'edit.php?post_type=necksbridges',
						'edit.php?post_type=cases',
						'edit.php?post_type=stomp_boxes',
						'edit.php?post_type=stringsstraps',
						'edit.php?post_type=replacement_speakers',
						'edit.php?post_type=other_accessories',
            'separator3',
						'edit.php?post_type=sold-instruments',
						'edit.php?post_type=sold-amps',
						'separator4',
            'themes.php',
            'plugins.php',
            'users.php',
            'tools.php',
            'options-general.php'
        );
    }

add_filter( 'custom_menu_order', 'custom_menu_order' );
add_filter( 'menu_order', 'custom_menu_order' );

//Custom filter script
function filter_script() {
    wp_enqueue_script(
        'filter-script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/filter.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}
add_action( 'wp_enqueue_scripts', 'filter_script' );

//Custom filter

function filter_function(){
	$args = array(
		'orderby' => 'title',
		'order'	=> ASC,
		'post_type' => $_POST['post_type'],
	);

	//Check for different combinations of checked checkboxes
		if( isset( $_POST['brand'] ) && isset( $_POST['price'] ) && isset( $_POST['year']) && isset( $_POST['type'] )):
			$args['tax_query'] = array(
				'relation' => 'AND',
				array(
					'taxonomy' => $_POST['brand_type'],
					'field' => 'id',
					'terms' => $_POST['brand']
				),
				array(
					'taxonomy' => 'price_group',
					'field' => 'id',
					'terms' => $_POST['price']
				),
				array(
					'taxonomy' => 'age_group',
					'field' => 'id',
					'terms' => $_POST['year']
				),
				array(
					'taxonomy' => 'instrument_type',
					'field' => 'id',
					'terms' => $_POST['type']
				)
			);
		elseif ( isset( $_POST['brand'] ) && isset( $_POST['price'] ) ):
			$args['tax_query'] = array(
				'relation' => 'AND',
				array(
					'taxonomy' => $_POST['brand_type'],
					'field' => 'id',
					'terms' => $_POST['brand']
				),
				array(
					'taxonomy' => 'price_group',
					'field' => 'id',
					'terms' => $_POST['price']
				),
			);
		elseif ( isset( $_POST['brand'] ) && isset( $_POST['year'] ) ):
			$args['tax_query'] = array(
				'relation' => 'AND',
				array(
					'taxonomy' => $_POST['brand_type'],
					'field' => 'id',
					'terms' => $_POST['brand']
				),
				array(
					'taxonomy' => 'age_group',
					'field' => 'id',
					'terms' => $_POST['year']
				)
			);
		elseif ( isset( $_POST['price'] ) && isset( $_POST['year'] ) ):
			$args['tax_query'] = array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'price_group',
					'field' => 'id',
					'terms' => $_POST['price']
				),
				array(
					'taxonomy' => 'age_group',
					'field' => 'id',
					'terms' => $_POST['year']
				)
			);
			elseif ( isset( $_POST['type'] ) && isset( $_POST['year'] ) ):
				$args['tax_query'] = array(
					'relation' => 'AND',
					array(
						'taxonomy' => 'instrument_type',
						'field' => 'id',
						'terms' => $_POST['type']
					),
					array(
						'taxonomy' => 'age_group',
						'field' => 'id',
						'terms' => $_POST['year']
					)
				);
				elseif ( isset( $_POST['brand'] ) && isset( $_POST['type'] ) ):
					$args['tax_query'] = array(
						'relation' => 'AND',
						array(
							'taxonomy' => $_POST['brand_type'],
							'field' => 'id',
							'terms' => $_POST['brand']
						),
						array(
							'taxonomy' => 'instrument_type',
							'field' => 'id',
							'terms' => $_POST['type']
						)
					);
		elseif ( isset( $_POST['brand'] ) || isset( $_POST['price'] ) || isset( $_POST['year']) || isset( $_POST['type'] ) ):
				$args['tax_query'] = array(
					'relation' => 'OR',
					array(
						'taxonomy' => $_POST['brand_type'],
						'field' => 'id',
						'terms' => $_POST['brand']
					),
					array(
						'taxonomy' => 'price_group',
						'field' => 'id',
						'terms' => $_POST['price']
					),
					array(
						'taxonomy' => 'age_group',
						'field' => 'id',
						'terms' => $_POST['year']
					),
					array(
						'taxonomy' => 'instrument_type',
						'field' => 'id',
						'terms' => $_POST['type']
					)
				);
		endif;

		$query = new WP_Query( $args );

	//Loop through and echo out the result of the query
		if( $query->have_posts() ) :
			while( $query->have_posts() ): $query->the_post();
				echo
				'<div class="entry-content product-content">
					<div class="product-header">
					<h2>' . $query->post->post_title . '</h2>';
					$post_id = get_the_ID();
					echo '<h3 class="price-heading">' . get_post_meta( $post_id, 'Price', true ) . '</h3>
					</div>';
				$content = $query->post->post_content;
				echo apply_filters('the_content', $content);
				echo '</div>';
			endwhile;
			wp_reset_postdata();
		else :
			echo '<p class="nomatch">No matches found</p>';
		endif;
	die();
}


add_action('wp_ajax_myfilter', 'filter_function');
add_action('wp_ajax_nopriv_myfilter', 'filter_function');


//Inlucde custom post types
include( get_template_directory() . '/inc/custom-posttypes.php' );

//Inlucde custom taxonomies
include( get_template_directory() . '/inc/custom-taxonomies.php' );

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'instrument'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
