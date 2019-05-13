<?php
/**
 * Register a Department taxonomy.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_department_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Departments', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Department', 'taxonomy singular name', 'textdomain' ),
		'menu_name'                  => __( 'Departments', 'textdomain' ),
		'all_items'                  => __( 'All Departments', 'textdomain' ),
		'edit_item'                  => __( 'Edit Department', 'textdomain' ),
		'view_item'                  => __( 'View Department', 'textdomain' ),
		'update_item'                => __( 'Update Department', 'textdomain' ),
		'add_new_item'               => __( 'Add New Department', 'textdomain' ),
		'new_item_name'              => __( 'New Department Name', 'textdomain' ),
		'search_items'               => __( 'Search Departments', 'textdomain' ),
		'parent_item'                => __( 'Parent Department', 'textdomain' ),
		'parent_item_colon'          => __( 'Parent Department:', 'textdomain' )
	);

	$args = array(
		// The default settings of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus` are inherited from `$public`.
		'public'                     =>  true,
		'publicly_queryable'         =>  true,
		'show_ui'                    =>  true,
		'show_in_menu'               =>  true, // if not set, defaults to value of show_ui argument
		'show_in_nav_menus'          =>  true,
		'show_in_quick_edit'         =>  true, // if not set, defaults to value of show_ui argument
		'show_admin_column'          =>  true, // allow automatic creation of taxonomy columns on associated post-types table
		'show_in_rest'				 =>  true,
		'hierarchical'               =>  true,
		'labels'                     => $labels,
		'query_var'                  => '', // default: $taxonomy
		'rewrite'                    =>  array( 'slug' => 'departments' )
	);

	register_taxonomy( 'department', array( 'degree_program', 'place' ), $args );
}
add_action( 'init', 'create_department_taxonomy', 0 );
