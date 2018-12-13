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
      'separate_items_with_commas' => __( 'Separate brands with commas', 'text_domain' ),
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
    register_taxonomy( 'brand', array( 'electricguitars', 'basses', 'acoustic_steel', 'acoustic_nylon', 'other_instruments', 'ampsspeakers', 'partsaccessories' ), $args );

  }
  add_action( 'init', 'create_brand_taxonomy', 0 );

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
  	register_taxonomy( 'price_group', array( 'electricguitars', 'basses', 'acoustic_steel', 'acoustic_nylon', 'other_instruments' ), $args );

  }
  add_action( 'init', 'price_group_taxonomy', 0 );

  }

  if ( ! function_exists( 'yrar_made_taxonomy' ) ) {

// Register Custom Taxonomy
function year_made_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Year Made', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Year Made', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Year Made', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Year Made', 'text_domain' ),
		'edit_item'                  => __( 'Edit Year Made', 'text_domain' ),
		'update_item'                => __( 'Update Year Made', 'text_domain' ),
		'view_item'                  => __( 'View Year Made', 'text_domain' ),
		'separate_items_with_commas' => __( 'Write "1985 and before" or "After 1985"', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Year Made', 'text_domain' ),
		'choose_from_most_used'      => __( '', 'text_domain' ),
		'popular_items'              => __( '', 'text_domain' ),
		'search_items'               => __( 'Search Year Made', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Year Made list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items Year Made navigation', 'text_domain' ),
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
	register_taxonomy( 'year_made', array( 'electricguitars', 'basses', 'acoustic_steel', 'acoustic_nylon', 'other_instruments' ), $args );

}
add_action( 'init', 'year_made_taxonomy', 0 );

}
