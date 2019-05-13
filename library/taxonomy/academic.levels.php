<?php
/**
 * Register an Academic Level taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_academic_level_taxonomy() {
	$labels = array(
		'name'              => _x( 'Academic Levels', 'taxonomy general name', 'cvmbsPress' ),
		'singular_name'     => _x( 'Academic Level', 'taxonomy singular name', 'cvmbsPress' ),
		'menu_name'         => __( 'Academic Levels', 'cvmbsPress' ),
		'all_items'         => __( 'All Academic Levels', 'cvmbsPress' ),
		'edit_item'         => __( 'Edit Academic Level', 'cvmbsPress' ),
		'view_item'         => __( 'View Academic Level', 'cvmbsPress' ),
		'update_item'       => __( 'Update Academic Level', 'cvmbsPress' ),
		'add_new_item'      => __( 'Add New Academic Level', 'cvmbsPress' ),
		'new_item_name'     => __( 'New Academic Level Name', 'cvmbsPress' ),
		'search_items'      => __( 'Search Academic Levels', 'cvmbsPress' ),
		'parent_item'       => __( 'Parent Academic Level', 'cvmbsPress' ),
		'parent_item_colon' => __( 'Parent Academic Level:', 'cvmbsPress' )
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
		'show_in_rest'       =>  true,
		'hierarchical'       =>  true,
		'labels'             => $labels,
		'query_var'          => '', // default: $taxonomy
		'rewrite'            =>  array( 'slug' => 'academic-levels' )
	);

	$post_types = array(
		'degree_program'
	);

	register_taxonomy( 'academic_level', $post_types, $args );
}
add_action( 'init', 'create_academic_level_taxonomy', 0 );
