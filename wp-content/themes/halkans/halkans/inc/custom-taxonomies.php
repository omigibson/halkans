<?php
  // BRAND
  function create_brand_taxonomy() {
    $labels = array(
      'name'                       => _x( 'Brand', 'Taxonomy General Name', 'text_domain' ),
      'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'text_domain' ),
      'menu_name'                  => __( 'Brand', 'text_domain' ),
      'all_items'                  => __( 'All Brands', 'text_domain' ),
      'parent_item'                => __( 'Parent Item', 'text_domain' ),
      'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
      'new_item_name'              => __( 'New BrandName', 'text_domain' ),
      'add_new_item'               => __( 'Add New Brand', 'text_domain' ),
      'edit_item'                  => __( 'Edit Brand', 'text_domain' ),
      'update_item'                => __( 'Update Brand', 'text_domain' ),
      'view_item'                  => __( 'View Brand', 'text_domain' ),
      'separate_items_with_commas' => __( '', 'text_domain' ),
      'add_or_remove_items'        => __( 'Add or remove brands', 'text_domain' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
      'popular_items'              => __( 'Popular Brands', 'text_domain' ),
      'search_items'               => __( 'Search Brands', 'text_domain' ),
      'not_found'                  => __( 'Not Found', 'text_domain' ),
      'no_terms'                   => __( 'No brands', 'text_domain' ),
      'items_list'                 => __( 'Brands list', 'text_domain' ),
      'items_list_navigation'      => __( 'Brands list navigation', 'text_domain' ),
    );
    $capabilities = array(
      'manage_terms'               => 'manage_categories',
      'edit_terms'                 => 'manage_categories',
      'delete_terms'               => 'manage_categories',
      'assign_terms'               => 'edit_posts',
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => false,
      'show_tagcloud'              => false,
      'capabilities'               => $capabilities,
    );
    register_taxonomy( 'brand', array( 'electricguitars', 'basses' ), $args );

  }
  add_action( 'init', 'create_brand_taxonomy', 0 );

  if ( ! function_exists( 'acoustic_steel_brand_taxonomy' ) ) {

// Register Custom Taxonomy
function acoustic_steel_brand_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Brand', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Brand', 'text_domain' ),
		'all_items'                  => __( 'All Brands', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New BrandName', 'text_domain' ),
		'add_new_item'               => __( 'Add New Brand', 'text_domain' ),
		'edit_item'                  => __( 'Edit Brand', 'text_domain' ),
		'update_item'                => __( 'Update Brand', 'text_domain' ),
		'view_item'                  => __( 'View Brand', 'text_domain' ),
		'separate_items_with_commas' => __( '', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove brands', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Brands', 'text_domain' ),
		'search_items'               => __( 'Search Brands', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No brands', 'text_domain' ),
		'items_list'                 => __( 'Brand list', 'text_domain' ),
		'items_list_navigation'      => __( 'Brand list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'acoustic_steel_brand', array( 'acoustic_steel' ), $args );

}
add_action( 'init', 'acoustic_steel_brand_taxonomy', 0 );

}

if ( ! function_exists( 'amp_brand_taxonomy' ) ) {

// Register Custom Taxonomy
function amp_brand_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Brand', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Brand', 'text_domain' ),
		'all_items'                  => __( 'All Brands', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Brand Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Brand', 'text_domain' ),
		'edit_item'                  => __( 'Edit Brand', 'text_domain' ),
		'update_item'                => __( 'Update Brand', 'text_domain' ),
		'view_item'                  => __( 'View Brand', 'text_domain' ),
		'separate_items_with_commas' => __( '', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove brands', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Brands', 'text_domain' ),
		'search_items'               => __( 'Search Brands', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No brands', 'text_domain' ),
		'items_list'                 => __( 'Brand list', 'text_domain' ),
		'items_list_navigation'      => __( 'Brand list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'amp_brand', array( 'ampsspeakers', 'sold-amps' ), $args );

}
add_action( 'init', 'amp_brand_taxonomy', 0 );

}

//PRICE
  if ( ! function_exists( 'price_group_taxonomy' ) ) {

  function price_group_taxonomy() {

  	$labels = array(
  		'name'                       => _x( 'Price Group', 'Taxonomy General Name', 'text_domain' ),
  		'singular_name'              => _x( 'Price Group', 'Taxonomy Singular Name', 'text_domain' ),
  		'menu_name'                  => __( 'Price Group', 'text_domain' ),
  		'all_items'                  => __( 'All Price Groups', 'text_domain' ),
  		'parent_item'                => __( 'Parent Item', 'text_domain' ),
  		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
  		'new_item_name'              => __( 'New Price Group Name', 'text_domain' ),
  		'add_new_item'               => __( 'Add New Price Group', 'text_domain' ),
  		'edit_item'                  => __( 'Edit Price Group', 'text_domain' ),
  		'update_item'                => __( 'Update Price Group', 'text_domain' ),
  		'view_item'                  => __( 'View Price Group', 'text_domain' ),
  		'separate_items_with_commas' => __( 'Write "Under 10 000" or "Over 10 000"', 'text_domain' ),
  		'add_or_remove_items'        => __( 'Add or remove Price Group', 'text_domain' ),
  		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
  		'popular_items'              => __( '', 'text_domain' ),
  		'search_items'               => __( 'Search Price Group', 'text_domain' ),
  		'not_found'                  => __( 'Not Found', 'text_domain' ),
  		'no_terms'                   => __( 'No items', 'text_domain' ),
  		'items_list'                 => __( 'Price Group list', 'text_domain' ),
  		'items_list_navigation'      => __( 'Price Group list navigation', 'text_domain' ),
  	);
  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => false,
  		'public'                     => true,
  		'show_ui'                    => true,
  		'show_admin_column'          => true,
  		'show_in_nav_menus'          => false,
  		'show_tagcloud'              => false,
  	);
  	register_taxonomy( 'price_group', array( 'electricguitars', 'basses', 'acoustic_steel', 'ampsspeakers' ), $args );

  }
  add_action( 'init', 'price_group_taxonomy', 0 );

  }

  if ( ! function_exists( 'age_group_taxonomy' ) ) {

  // Register Custom Taxonomy
  function age_group_taxonomy() {

  	$labels = array(
  		'name'                       => _x( 'Age Group', 'Taxonomy General Name', 'text_domain' ),
  		'singular_name'              => _x( 'Age Group', 'Taxonomy Singular Name', 'text_domain' ),
  		'menu_name'                  => __( 'Age Group', 'text_domain' ),
  		'all_items'                  => __( 'All Age Groups', 'text_domain' ),
  		'parent_item'                => __( 'Parent Item', 'text_domain' ),
  		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
  		'new_item_name'              => __( 'New Age Group Name', 'text_domain' ),
  		'add_new_item'               => __( 'Add New Age Group', 'text_domain' ),
  		'edit_item'                  => __( 'Edit Age Group', 'text_domain' ),
  		'update_item'                => __( 'Update Age Group', 'text_domain' ),
  		'view_item'                  => __( 'View Age Group', 'text_domain' ),
  		'separate_items_with_commas' => __( 'Write "1985 and before" or "After 1985"', 'text_domain' ),
  		'add_or_remove_items'        => __( 'Add or remove Age Group', 'text_domain' ),
  		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
  		'popular_items'              => __( 'Popular Items', 'text_domain' ),
  		'search_items'               => __( 'Search Age Group', 'text_domain' ),
  		'not_found'                  => __( 'Not Found', 'text_domain' ),
  		'no_terms'                   => __( 'No items', 'text_domain' ),
  		'items_list'                 => __( 'Age Group list', 'text_domain' ),
  		'items_list_navigation'      => __( 'Age Group list navigation', 'text_domain' ),
  	);
  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => false,
  		'public'                     => true,
  		'show_ui'                    => true,
  		'show_admin_column'          => true,
  		'show_in_nav_menus'          => false,
  		'show_tagcloud'              => false,
  	);
  	register_taxonomy( 'age_group', array( 'electricguitars', 'basses', 'acoustic_steel', 'other_instruments',
    'ampsspeakers', 'partsaccessories', 'sold-instruments', 'sold-amps' ), $args );

  }
  add_action( 'init', 'age_group_taxonomy', 0 );

  }

  if ( ! function_exists( 'sold_guitar_brands_taxonomy' ) ) {

// Register Custom Taxonomy
function sold_instrument_brand_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Brand', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Brand', 'text_domain' ),
		'all_items'                  => __( 'All Brands', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Brand Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Brand', 'text_domain' ),
		'edit_item'                  => __( 'Edit Brand', 'text_domain' ),
		'update_item'                => __( 'Update Brand', 'text_domain' ),
		'view_item'                  => __( 'View Brand', 'text_domain' ),
		'separate_items_with_commas' => __( '', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Brands', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'sold_instrument_brand', array( 'sold-instruments' ), $args );

}
add_action( 'init', 'sold_instrument_brand_taxonomy', 0 );

}

if ( ! function_exists( 'instrument_type' ) ) {

// Register Custom Taxonomy
function instrument_type() {

	$labels = array(
		'name'                       => _x( 'Instrument Type', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Instrument Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Instrument Type', 'text_domain' ),
		'all_items'                  => __( 'All Instrument Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Instrument Type', 'text_domain' ),
		'add_new_item'               => __( 'Add New Instrument Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Instrument Type', 'text_domain' ),
		'update_item'                => __( 'Update Instrument Type', 'text_domain' ),
		'view_item'                  => __( 'View Instrument Type', 'text_domain' ),
		'separate_items_with_commas' => __( '', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Instrument Types', 'text_domain' ),
		'search_items'               => __( 'Search Instrument Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Instrument Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Instrument Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'instrument_type', array( 'sold-instruments' ), $args );

}
add_action( 'init', 'instrument_type', 0 );

}
