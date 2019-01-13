<?php

if ( ! function_exists('electric_guitars_post_type') ) {

// ELECTRIC GUITARS
function electric_guitars_post_type() {

	$labels = array(
		'name'                  => _x( 'Electric Guitars', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Electric Guitar', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Electric Guitars', 'text_domain' ),
		'name_admin_bar'        => __( 'Electric Guitars', 'text_domain' ),
		'archives'              => __( 'Electric Guitars Archives', 'text_domain' ),
		'attributes'            => __( 'Electric Guitars Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Electric Guitars', 'text_domain' ),
		'add_new_item'          => __( 'Add New Electric Guitar', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Electric Guitar', 'text_domain' ),
		'edit_item'             => __( 'Edit Electric Guitar', 'text_domain' ),
		'update_item'           => __( 'Update Electric Guitar', 'text_domain' ),
		'view_item'             => __( 'View Electric Guitar', 'text_domain' ),
		'view_items'            => __( 'View Electric Guitars', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Electric Guitar', 'text_domain' ),
		'items_list'            => __( 'Electric Guitars list', 'text_domain' ),
		'items_list_navigation' => __( 'Electric Guitars list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Electric Guitars list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Electric Guitar', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'brand', 'price_group', 'age_group' ),
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
	register_post_type( 'Electric Guitars', $args );

}
add_action( 'init', 'electric_guitars_post_type', 0 );

}

if ( ! function_exists('basses_post_type') ) {

// BASSES
function basses_post_type() {

	$labels = array(
		'name'                  => _x( 'Basses', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Basses', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Basses', 'text_domain' ),
		'name_admin_bar'        => __( 'Basses', 'text_domain' ),
		'archives'              => __( 'Basses Archives', 'text_domain' ),
		'attributes'            => __( 'Basses Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Basses', 'text_domain' ),
		'add_new_item'          => __( 'Add New Bass', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Bass', 'text_domain' ),
		'edit_item'             => __( 'Edit Bass', 'text_domain' ),
		'update_item'           => __( 'Update Bass', 'text_domain' ),
		'view_item'             => __( 'View Bass', 'text_domain' ),
		'view_items'            => __( 'View Basses', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Bass', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Bass', 'text_domain' ),
		'items_list'            => __( 'Basses list', 'text_domain' ),
		'items_list_navigation' => __( 'Basses list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Basses list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Basses', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'brand', 'price_group', 'age_group' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'basses', $args );

}
add_action( 'init', 'basses_post_type', 0 );

}

if ( ! function_exists('acoustic_steel_stringed_guitars_post_type') ) {

// Register Custom Post Type
function acoustic_steel_stringed_guitars_post_type() {

	$labels = array(
		'name'                  => _x( 'Acoustic Steel Stringed Guitars', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Acoustic Steel Stringed Guitars', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Acoustic Steel Stringed Guitars', 'text_domain' ),
		'name_admin_bar'        => __( 'Acoustic Steel Stringed Guitars', 'text_domain' ),
		'archives'              => __( 'Acoustic Steel Stringed Guitars Archives', 'text_domain' ),
		'attributes'            => __( 'Acoustic Steel Stringed Guitar Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Acoustic Steel Stringed Guitars', 'text_domain' ),
		'add_new_item'          => __( 'Add New Acoustic Steel Stringed Guitar', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Acoustic Steel Stringed Guitar', 'text_domain' ),
		'edit_item'             => __( 'Edit Acoustic Steel Stringed Guitar', 'text_domain' ),
		'update_item'           => __( 'Update Acoustic Steel Stringed Guitar', 'text_domain' ),
		'view_item'             => __( 'View Acoustic Steel Stringed Guitar', 'text_domain' ),
		'view_items'            => __( 'View Acoustic Steel Stringed Guitars', 'text_domain' ),
		'search_items'          => __( 'Search Acoustic Steel Stringed Guitars', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Acoustic Steel Stringed Guitar', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Acoustic Steel Stringed Guitar', 'text_domain' ),
		'items_list'            => __( 'Acoustic Steel Stringed Guitars list', 'text_domain' ),
		'items_list_navigation' => __( 'Acoustic Steel Stringed Guitars list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Acoustic Steel Stringed Guitars list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Acoustic Steel Stringed Guitars', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
    'taxonomies'            => array( 'acoustic_steel_brand', 'price_group', 'age_group' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'acoustic_steel', $args );

}
add_action( 'init', 'acoustic_steel_stringed_guitars_post_type', 0 );

}

if ( ! function_exists('acoustic_nylon_stringed_guitars_post_type') ) {

// Register Custom Post Type
function acoustic_nylon_stringed_guitars_post_type() {

	$labels = array(
		'name'                  => _x( 'Acoustic Nylon Stringed Guitars', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Acoustic Nylon Stringed Guitars', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Acoustic Nylon Stringed Guitars', 'text_domain' ),
		'name_admin_bar'        => __( 'Acoustic Nylon Stringed Guitars', 'text_domain' ),
		'archives'              => __( 'Acoustic Nylon Stringed Guitars Archives', 'text_domain' ),
		'attributes'            => __( 'Acoustic Nylon Stringed Guitar Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Acoustic Nylon Stringed Guitar', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Acoustic Nylon Stringed Guitar', 'text_domain' ),
		'edit_item'             => __( 'Edit Acoustic Nylon Stringed Guitar', 'text_domain' ),
		'update_item'           => __( 'Update Acoustic Nylon Stringed Guitar', 'text_domain' ),
		'view_item'             => __( 'View Acoustic Nylon Stringed Guitar', 'text_domain' ),
		'view_items'            => __( 'View Acoustic Nylon Stringed Guitars', 'text_domain' ),
		'search_items'          => __( 'Search Acoustic Nylon Stringed Guitar', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Acoustic Nylon Stringed Guitar', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Acoustic Nylon Stringed Guitar', 'text_domain' ),
		'items_list'            => __( 'Acoustic Nylon Stringed Guitars list', 'text_domain' ),
		'items_list_navigation' => __( 'Acoustic Nylon Stringed Guitars list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Acoustic Nylon Stringed Guitars list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Acoustic Nylon Stringed Guitars', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
    'taxonomies'            => array( 'brand', 'price_group', 'age_group' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'acoustic_nylon', $args );

}
add_action( 'init', 'acoustic_nylon_stringed_guitars_post_type', 0 );

}

if ( ! function_exists('other_string_instruments_post_type') ) {

// Register Custom Post Type
function other_string_instruments_post_type() {

	$labels = array(
		'name'                  => _x( 'Other String Instruments', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Other String Instruments', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Other String Instruments', 'text_domain' ),
		'name_admin_bar'        => __( 'Other String Instruments', 'text_domain' ),
		'archives'              => __( 'Other String Instruments Archives', 'text_domain' ),
		'attributes'            => __( 'Other String Instruments Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Other String Instruments', 'text_domain' ),
		'add_new_item'          => __( 'Add New Other String Instrument', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Other String Instrument', 'text_domain' ),
		'edit_item'             => __( 'Edit Other String Instrument', 'text_domain' ),
		'update_item'           => __( 'Update Other String Instrument', 'text_domain' ),
		'view_item'             => __( 'View Other String Instrument', 'text_domain' ),
		'view_items'            => __( 'View Other String Instruments', 'text_domain' ),
		'search_items'          => __( 'Search Other String Instrument', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Other String Instrument', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Other String Instrument', 'text_domain' ),
		'items_list'            => __( 'Other String Instruments list', 'text_domain' ),
		'items_list_navigation' => __( 'Other String Instruments list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Other String Instruments list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Other String Instruments', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'brand', 'price_group', 'age_group' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'other_instruments', $args );

}
add_action( 'init', 'other_string_instruments_post_type', 0 );

}

if ( ! function_exists('create_amp_post_type') ) {

// AMPS & SPEAKERS
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
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'amp_brand', 'price_group', 'age_group' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
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

if ( ! function_exists('create_hardware_post_type') ) {

// Register Custom Post Type
function create_hardware_post_type() {

	$labels = array(
		'name'                  => _x( 'Hardware & Pickups', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Hardware & Pickups', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Hardware & Pickups', 'text_domain' ),
		'name_admin_bar'        => __( 'Hardware & Pickups', 'text_domain' ),
		'archives'              => __( 'Hardware & Pickups Archives', 'text_domain' ),
		'attributes'            => __( 'Hardware & Pickups Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Hardware & Pickups', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Hardware & Pickups', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Hardware & Pickups list', 'text_domain' ),
		'items_list_navigation' => __( 'Hardware & Pickups list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Hardware & Pickups list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Hardware & Pickups', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
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
	register_post_type( 'hardwarepickups', $args );

}
add_action( 'init', 'create_hardware_post_type', 0 );

}

if ( ! function_exists('necks_bridges_post_type') ) {

// Register Custom Post Type
function necks_bridges_post_type() {

	$labels = array(
		'name'                  => _x( 'Necks & Bridges', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Necks & Bridges', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Necks & Bridges', 'text_domain' ),
		'name_admin_bar'        => __( 'Necks & Bridges', 'text_domain' ),
		'archives'              => __( 'Necks & Bridges Archives', 'text_domain' ),
		'attributes'            => __( 'Necks & Bridges Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Necks & Bridges', 'text_domain' ),
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
		'items_list'            => __( 'Necks & Bridges list', 'text_domain' ),
		'items_list_navigation' => __( 'Necks & Bridges list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Necks & Bridges list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Necks & Bridges', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
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
	register_post_type( 'necksbridges', $args );

}
add_action( 'init', 'necks_bridges_post_type', 0 );

}

if ( ! function_exists('create_cases_post_type') ) {

// Register Custom Post Type
function create_cases_post_type() {

	$labels = array(
		'name'                  => _x( 'Cases', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cases', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cases', 'text_domain' ),
		'name_admin_bar'        => __( 'Cases', 'text_domain' ),
		'archives'              => __( 'Cases Archives', 'text_domain' ),
		'attributes'            => __( 'Case Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Cases', 'text_domain' ),
		'add_new_item'          => __( 'Add New Case', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Case', 'text_domain' ),
		'edit_item'             => __( 'Edit Case', 'text_domain' ),
		'update_item'           => __( 'Update Case', 'text_domain' ),
		'view_item'             => __( 'View Case', 'text_domain' ),
		'view_items'            => __( 'View Cases', 'text_domain' ),
		'search_items'          => __( 'Search Case', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Case', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Case', 'text_domain' ),
		'items_list'            => __( 'Cases list', 'text_domain' ),
		'items_list_navigation' => __( 'Cases list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Cases list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Cases', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
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
	register_post_type( 'cases', $args );

}
add_action( 'init', 'create_cases_post_type', 0 );

}

if ( ! function_exists('stomp_box_post_type') ) {

// Register Custom Post Type
function stomp_box_post_type() {

	$labels = array(
		'name'                  => _x( 'Stomp Boxes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Stomp Boxes', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Stomp Boxes', 'text_domain' ),
		'name_admin_bar'        => __( 'Stomp Boxes', 'text_domain' ),
		'archives'              => __( 'Stomp Boxes Archives', 'text_domain' ),
		'attributes'            => __( 'Stomp Box Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Stomp Boxes', 'text_domain' ),
		'add_new_item'          => __( 'Add New Stomp Box', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Stomp Box', 'text_domain' ),
		'edit_item'             => __( 'Edit Stomp Box', 'text_domain' ),
		'update_item'           => __( 'Update Stomp Box', 'text_domain' ),
		'view_item'             => __( 'View Stomp Box', 'text_domain' ),
		'view_items'            => __( 'View Stomp Boxes', 'text_domain' ),
		'search_items'          => __( 'Search Stomp Box', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Stomp Box', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Stomp Box', 'text_domain' ),
		'items_list'            => __( 'Stomp Boxes list', 'text_domain' ),
		'items_list_navigation' => __( 'Stomp Boxes list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Stomp Boxes list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Stomp Boxes', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
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
	register_post_type( 'stomp_boxes', $args );

}
add_action( 'init', 'stomp_box_post_type', 0 );

}

if ( ! function_exists('strings_straps_post_type') ) {

// Register Custom Post Type
function strings_straps_post_type() {

	$labels = array(
		'name'                  => _x( 'Strings & Straps', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Strings & Straps', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Strings & Straps', 'text_domain' ),
		'name_admin_bar'        => __( 'Strings & Straps', 'text_domain' ),
		'archives'              => __( 'Strings & Straps Archives', 'text_domain' ),
		'attributes'            => __( 'Strings & Straps Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Strings & Straps', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Strings & Straps list', 'text_domain' ),
		'items_list_navigation' => __( 'Strings & Straps list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Strings & Straps list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Strings & Straps', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
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
	register_post_type( 'stringsstraps', $args );

}
add_action( 'init', 'strings_straps_post_type', 0 );

}

if ( ! function_exists('replacement_speakers_post_type') ) {

// Register Custom Post Type
function replacement_speakers_post_type() {

	$labels = array(
		'name'                  => _x( 'Replacement Speakers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Replacement Speakers', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Replacement Speakers', 'text_domain' ),
		'name_admin_bar'        => __( 'Replacement Speakers', 'text_domain' ),
		'archives'              => __( 'Replacement Speakers Archives', 'text_domain' ),
		'attributes'            => __( 'Replacement Speakers Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Replacement Speakers', 'text_domain' ),
		'add_new_item'          => __( 'Add New Replacement Speaker', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Replacement Speaker', 'text_domain' ),
		'edit_item'             => __( 'Edit Replacement Speaker', 'text_domain' ),
		'update_item'           => __( 'Update Replacement Speaker', 'text_domain' ),
		'view_item'             => __( 'View Replacement Speaker', 'text_domain' ),
		'view_items'            => __( 'View Replacement Speakers', 'text_domain' ),
		'search_items'          => __( 'Search Replacement Speaker', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Replacement Speaker', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Replacement Speaker', 'text_domain' ),
		'items_list'            => __( 'Replacement Speakers list', 'text_domain' ),
		'items_list_navigation' => __( 'Replacement Speakers list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Replacement Speakers list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Replacement Speakers', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
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
	register_post_type( 'replacement_speakers', $args );

}
add_action( 'init', 'replacement_speakers_post_type', 0 );

}

if ( ! function_exists('sold_guitars_post_type') ) {

// Register Custom Post Type
function sold_guitars_post_type() {

	$labels = array(
		'name'                  => _x( 'Sold Guitars', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Sold Guitars', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Sold Guitars', 'text_domain' ),
		'name_admin_bar'        => __( 'Sold Guitars', 'text_domain' ),
		'archives'              => __( 'Sold Guitars Archives', 'text_domain' ),
		'attributes'            => __( 'Sold Guitars Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Sold Guitars', 'text_domain' ),
		'add_new_item'          => __( 'Add New Sold Guitar', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Sold Guitar', 'text_domain' ),
		'edit_item'             => __( 'Edit Sold Guitar', 'text_domain' ),
		'update_item'           => __( 'Update Sold Guitar', 'text_domain' ),
		'view_item'             => __( 'View Sold Guitar', 'text_domain' ),
		'view_items'            => __( 'View Sold Guitars', 'text_domain' ),
		'search_items'          => __( 'Search Sold Guitar', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Sold Guitar', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Sold Guitar', 'text_domain' ),
		'items_list'            => __( 'Sold Guitars list', 'text_domain' ),
		'items_list_navigation' => __( 'Sold Guitars list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Sold Guitars list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Sold Guitars', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'sold_guitar_brand', 'age_group' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sold-guitars', $args );

}
add_action( 'init', 'sold_guitars_post_type', 0 );

}

if ( ! function_exists('sold_amps_post_type') ) {

// Register Custom Post Type
function sold_amps_post_type() {

	$labels = array(
		'name'                  => _x( 'Sold Amps', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Sold Amps', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Sold Amps', 'text_domain' ),
		'name_admin_bar'        => __( 'Sold Amps', 'text_domain' ),
		'archives'              => __( 'Sold Amps Archives', 'text_domain' ),
		'attributes'            => __( 'Sold Amp Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Sold Amp', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Sold Amp', 'text_domain' ),
		'edit_item'             => __( 'Edit Sold Amp', 'text_domain' ),
		'update_item'           => __( 'Update Sold Amp', 'text_domain' ),
		'view_item'             => __( 'View Sold Amp', 'text_domain' ),
		'view_items'            => __( 'View Sold Amps', 'text_domain' ),
		'search_items'          => __( 'Search Sold Amp', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Sold Amp', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Sold Amp', 'text_domain' ),
		'items_list'            => __( 'Sold Amps list', 'text_domain' ),
		'items_list_navigation' => __( 'Sold Amps list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Sold Amps list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Sold Amps', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'amp_brand', 'age_group' ),
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
	register_post_type( 'sold-amps', $args );

}
add_action( 'init', 'sold_amps_post_type', 0 );

}

?>
