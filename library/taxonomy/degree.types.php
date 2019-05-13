<?php
/**
 * Register a Degree Type taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function cvmbs_degree_type_taxonomy() {
	$labels = array(
		'name'               => _x( 'Degree Types', 'taxonomy general name', 'cvmbsPress' ),
		'singular_name'      => _x( 'Degree Type', 'taxonomy singular name', 'cvmbsPress' ),
		'menu_name'          => __( 'Degree Types', 'cvmbsPress' ),
		'all_items'          => __( 'All Degree Types', 'cvmbsPress' ),
		'edit_item'          => __( 'Edit Degree Type', 'cvmbsPress' ),
		'view_item'          => __( 'View Degree Type', 'cvmbsPress' ),
		'update_item'        => __( 'Update Degree Type', 'cvmbsPress' ),
		'add_new_item'       => __( 'Add New Degree Type', 'cvmbsPress' ),
		'new_item_name'      => __( 'New Degree Type Name', 'cvmbsPress' ),
		'search_items'       => __( 'Search Degree Types', 'cvmbsPress' ),
		'parent_item'        => __( 'Parent Degree Type', 'cvmbsPress' ),
		'parent_item_colon'  => __( 'Parent Degree Type:', 'cvmbsPress' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'             =>  true,
		'show_admin_column'  =>  true, // allow automatic creation of taxonomy columns on associated post-types table
		'show_in_rest'       =>  true,
		'hierarchical'       =>  true,
		'labels'             => $labels,
		'rewrite'            =>  array( 'slug' => 'degree-type' )
	);

	$post_types = array(
		'degree_program'
	);

	register_taxonomy( 'degree_type', $post_types, $args );
}
add_action( 'init', 'cvmbs_degree_type_taxonomy', 0 );
