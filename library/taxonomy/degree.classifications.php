<?php
/**
 * Register a Degree Classification taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function cvmbs_degree_classification_taxonomy() {
	$labels = array(
		'name'               => _x( 'Degree Classifications', 'taxonomy general name', 'cvmbsPress' ),
		'singular_name'      => _x( 'Degree Classification', 'taxonomy singular name', 'cvmbsPress' ),
		'menu_name'          => __( 'Degree Classifications', 'cvmbsPress' ),
		'all_items'          => __( 'All Degree Classifications', 'cvmbsPress' ),
		'edit_item'          => __( 'Edit Degree Classification', 'cvmbsPress' ),
		'view_item'          => __( 'View Degree Classification', 'cvmbsPress' ),
		'update_item'        => __( 'Update Degree Classification', 'cvmbsPress' ),
		'add_new_item'       => __( 'Add New Degree Classification', 'cvmbsPress' ),
		'new_item_name'      => __( 'New Degree Classification Name', 'cvmbsPress' ),
		'search_items'       => __( 'Search Degree Classifications', 'cvmbsPress' ),
		'parent_item'        => __( 'Parent Degree Classification', 'cvmbsPress' ),
		'parent_item_colon'  => __( 'Parent Degree Classification:', 'cvmbsPress' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'             =>  true,
		'show_admin_column'  =>  true, // allow automatic creation of taxonomy columns on associated post-types table
		'show_in_quick_edit' =>  false,
		'hierarchical'       =>  true,
		'labels'             => $labels,
		'rewrite'            =>  array( 'slug' => 'degree-classification' )
	);

	$post_types = array(
		'degree-program'
	);

	register_taxonomy( 'degree_classification', $post_types, $args );
}
add_action( 'init', 'cvmbs_degree_classification_taxonomy', 0 );
