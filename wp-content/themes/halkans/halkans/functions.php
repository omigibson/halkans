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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'halkans' ),
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

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'halkans_scripts' );

// Register Custom Post Type
function create_instrument_post_type() {

	$labels = array(
		'name'                  => _x( 'Instruments', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Instrument', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Instruments', 'text_domain' ),
		'name_admin_bar'        => __( 'Instruments', 'text_domain' ),
		'archives'              => __( 'Instrument Archives', 'text_domain' ),
		'attributes'            => __( 'Instrument Attributes', 'text_domain' ),
		'all_items'             => __( 'All Instruments', 'text_domain' ),
		'add_new_item'          => __( 'Add New Instrument', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Instrument', 'text_domain' ),
		'edit_item'             => __( 'Edit Instrument', 'text_domain' ),
		'update_item'           => __( 'Update Instrument', 'text_domain' ),
		'view_item'             => __( 'View Instrument', 'text_domain' ),
		'view_items'            => __( 'View Instruments', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
	//	'featured_image'        => __( 'Featured Image', 'text_domain' ),
		// 'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		// 'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		// 'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into instrument', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this instrument', 'text_domain' ),
		'items_list'            => __( 'Instrument list', 'text_domain' ),
		'items_list_navigation' => __( 'Instrument list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter instrumet list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Instrument', 'text_domain' ),
		'description'           => __( 'Post type for all kinds of instruments', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'brand', 'year', ' date' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instrument', $args );

}
add_action( 'init', 'create_instrument_post_type', 0 );

include( get_template_directory() . '/inc/custom-taxonomies.php' );
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
