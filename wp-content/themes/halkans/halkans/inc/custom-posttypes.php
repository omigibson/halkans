<?php

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
		'taxonomies'            => array( 'category', 'brand', 'year' ),
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

if ( ! function_exists('create_amp_post_type') ) {

// Register Custom Post Type
function create_amp_post_type() {

	$labels = array(
		'name'                  => _x( 'Amps & Speakers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Amps & Speakers', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Amps & Speakers', 'text_domain' ),
		'name_admin_bar'        => __( 'Amps & Speakers', 'text_domain' ),
		'archives'              => __( 'Amps & Speakers Archives', 'text_domain' ),
		'attributes'            => __( 'Amps & Speakers Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Amps & Speakers', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'brand', 'year' ),
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
	register_post_type( 'Amps & Speakers', $args );

}
add_action( 'init', 'create_amp_post_type', 0 );

}

if ( ! function_exists('create_accessory_post_type') ) {

// Register Custom Post Type
function create_accessory_post_type() {

	$labels = array(
		'name'                  => _x( 'Parts & Accessories', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Parts & Accessories', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Parts & Accessories', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Parts & Accessories', 'text_domain' ),
		'archives'              => __( 'Parts & AccessoriesArchives', 'text_domain' ),
		'attributes'            => __( 'Parts & Accessories Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Parts & Accessories list', 'text_domain' ),
		'items_list_navigation' => __( 'Parts & Accessories list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Parts & Accessories list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Parts & Accessories', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'brand', ' year' ),
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
	register_post_type( 'Parts & Accessories', $args );

}
add_action( 'init', 'create_accessory_post_type', 0 );

}

?>
