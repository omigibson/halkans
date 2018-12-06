<?php
  // Register Custom Taxonomy
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
    register_taxonomy( 'brand', array( 'instrument', 'ampsspeakers', 'partsaccessories' ), $args );

  }
  add_action( 'init', 'create_brand_taxonomy', 0 );

  if ( ! function_exists( 'create_year_taxonomy' ) ) {

// Register Custom Taxonomy
function create_year_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Year', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Year', 'text_domain' ),
		'all_items'                  => __( 'All Years', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Year', 'text_domain' ),
		'update_item'                => __( 'Update Year', 'text_domain' ),
		'view_item'                  => __( 'View Year', 'text_domain' ),
		'separate_items_with_commas' => __( '', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove year', 'text_domain' ),
		'choose_from_most_used'      => __( '', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Years', 'text_domain' ),
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
	register_taxonomy( 'year', array( 'instrument', 'ampsspeakers', 'partsaccessories' ), $args );

}
add_action( 'init', 'create_year_taxonomy', 0 );

}
?>