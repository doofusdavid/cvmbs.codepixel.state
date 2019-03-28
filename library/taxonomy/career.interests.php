<?php
/**
 * Register a Career Interest taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_career_interest_taxonomy() {
	$labels = array(
		'name'              => _x( 'Career Interests', 'taxonomy general name', 'cvmbsPress' ),
		'singular_name'     => _x( 'Career Interest', 'taxonomy singular name', 'cvmbsPress' ),
		'menu_name'         => __( 'Career Interests', 'cvmbsPress' ),
		'all_items'         => __( 'All Career Interests', 'cvmbsPress' ),
		'edit_item'         => __( 'Edit Career Interest', 'cvmbsPress' ),
		'view_item'         => __( 'View Career Interest', 'cvmbsPress' ),
		'update_item'       => __( 'Update Career Interest', 'cvmbsPress' ),
		'add_new_item'      => __( 'Add New Career Interest', 'cvmbsPress' ),
		'new_item_name'     => __( 'New Career Interest Name', 'cvmbsPress' ),
		'search_items'      => __( 'Search Career Interests', 'cvmbsPress' ),
		'parent_item'       => __( 'Parent Career Interest', 'cvmbsPress' ),
		'parent_item_colon' => __( 'Parent Career Interest:', 'cvmbsPress' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'             =>  true,
		'publicly_queryable' =>  true,
		'show_ui'            =>  true,
		'show_in_menu'       =>  true, // if not set, defaults to value of show_ui argument
		'show_in_nav_menus'  =>  true,
		'show_in_quick_edit' =>  true, // if not set, defaults to value of show_ui argument
		'show_admin_column'  =>  true, // allow automatic creation of taxonomy columns on associated post-types table
		'hierarchical'       =>  true,
		'labels'             => $labels,
		'query_var'          => '', // default: $taxonomy
		'rewrite'            =>  array( 'slug' => 'career-interests' )
	);

	$post_types = array(
		'degree_program'
	);

	register_taxonomy( 'career_interest', $post_types, $args );
}
add_action( 'init', 'create_career_interest_taxonomy', 0 );
