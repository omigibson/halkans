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
	register_post_type( 'Amps & Speakers', $args );

}
add_action( 'init', 'create_amp_post_type', 0 );

}

if ( ! function_exists('create_accessory_post_type') ) {

// PARTS & ACCESSORIES
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
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'brand', ' price_group', 'age_group' ),
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
	register_post_type( 'Parts & Accessories', $args );

}
add_action( 'init', 'create_accessory_post_type', 0 );

}

?>
