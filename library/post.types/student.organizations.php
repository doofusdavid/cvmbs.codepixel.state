<?php
/**
 * Register a Student Organization post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_student_organization_init() {
	$labels = array(
		'name'                  =>  _x( 'Student Organizations', 'post type general name', 'cvmbsPress' ),
		'menu_name'             =>  _x( 'Student Orgs', 'admin menu', 'cvmbsPress' ), // Default is the same as `name`.
		'singular_name'         =>  _x( 'Student Organization', 'post type singular name', 'cvmbsPress' ),
		'name_admin_bar'        =>  _x( 'Student Organization', 'add new on admin bar', 'cvmbsPress' ), // Default is the same as `singular_name`.
		'add_new'               =>  _x( 'Add New', 'student organization', 'cvmbsPress' ),
		'add_new_item'          =>  __( 'Add New Student Organization', 'cvmbsPress' ),
		'edit_item'             =>  __( 'Edit Student Organization', 'cvmbsPress' ),
		'new_item'              =>  __( 'New Student Organization', 'cvmbsPress' ),
		'view_item'             =>  __( 'View Student Organization', 'cvmbsPress' ),
		'view_items'            =>  __( 'View Student Organizations', 'cvmbsPress' ),
		'search_items'          =>  __( 'Search Student Organizations', 'cvmbsPress' ),
		'all_items'             =>  __( 'All Student Organizations', 'cvmbsPress' ),
		'archives'              =>  __( 'Student Organization Archives', 'cvmbsPress' ),
		'attributes'            =>  __( 'Student Organization Attributes', 'cvmbsPress' ),
		'insert_into_item'      =>  __( 'Insert into student organization', 'cvmbsPress' ),
		'uploaded_to_this_item' =>  __( 'Uploaded to this student organization', 'cvmbsPress' ),
		'not_found'             =>  __( 'No student organizations found.', 'cvmbsPress' ),
		'not_found_in_trash'    =>  __( 'No student organizations found in Trash.', 'cvmbsPress' )
	);

	$args = array(
		'labels'              => $labels,
		'public'              =>  true,
		'exclude_from_search' =>  false, // Default: value of the opposite of public argument
		'publicly_queryable'  =>  true, // Default: value of public argument
		'show_ui'             =>  true, // Default: value of public argument
		'show_in_menu'        =>  true, // Default: value of show_ui argument
		'show_in_admin_bar'   =>  true, // Default: value of the show_in_menu argument
		'show_in_nav_menus'   =>  true, // Default: value of public argument
		'menu_position'       =>  8,
		'menu_icon'           => 'dashicons-groups',
		'capability_type'     => 'post',
		'hierarchical'        =>  false,
		'supports'            =>  array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'has_archive'         =>  true,
		'rewrite'             =>  array( 'slug' => 'student-organizations' ),
		'can_export'          =>  true,
		'delete_with_user'    =>  null // Default: null _ If not set (the default), posts are trashed if post_type_supports('author').
	);

	register_post_type( 'student_organization', $args );
}
add_action( 'init', 'codex_student_organization_init' );
