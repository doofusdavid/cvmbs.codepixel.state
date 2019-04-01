<?php
/**
 * Register a Degree Program post type.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cvmbs_degree_program_init() {
    $labels = array(
        'name'                  => _x( 'Degree Programs', 'post type general name', 'cvmbsPress' ),
        'menu_name'             => _x( 'Degree Programs', 'admin menu', 'cvmbsPress' ), // Default is the same as `name`.
        'singular_name'         => _x( 'Degree Program', 'post type singular name', 'cvmbsPress' ),
        'name_admin_bar'        => _x( 'Degree Program', 'add new on admin bar', 'cvmbsPress' ), // Default is the same as `singular_name`.
        'add_new'               => _x( 'Add New', 'degree program', 'cvmbsPress' ),
        'add_new_item'          => __( 'Add New Degree Program', 'cvmbsPress' ),
        'edit_item'             => __( 'Edit Degree Program', 'cvmbsPress' ),
        'new_item'              => __( 'New Degree Program', 'cvmbsPress' ),
        'view_item'             => __( 'View Degree Program', 'cvmbsPress' ),
        'view_items'            => __( 'View Degree Programs', 'cvmbsPress' ),
        'search_items'          => __( 'Search Degree Programs', 'cvmbsPress' ),
        'all_items'             => __( 'All Degree Programs', 'cvmbsPress' ),
        'archives'              => __( 'Degree Program Archives', 'cvmbsPress' ),
        'attributes'            => __( 'Degree Program Attributes', 'cvmbsPress' ),
        'insert_into_item'      => __( 'Insert into degree program', 'cvmbsPress' ),
        'uploaded_to_this_item' => __( 'Uploaded to this degree program', 'cvmbsPress' ),
        'not_found'             => __( 'No degree programs found.', 'cvmbsPress' ),
        'not_found_in_trash'    => __( 'No degree programs found in Trash.', 'cvmbsPress' ),
        'parent_item_colon'     => __( 'Parent Degree Programs:', 'cvmbsPress' )
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
        'menu_position'       =>  6,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'capability_type'     => 'post', // Default: "post"
        'hierarchical'        =>  true, // Default: false
        'supports'            =>  array( 'title', 'thumbnail', 'page-attributes' ),
        'has_archive'         =>  true, // Default: false
        'rewrite'             =>  array( 'slug' => 'degree-programs' ), // Default: true and use $post_type as slug
        'can_export'          =>  true, // Default: true
        'delete_with_user'    =>  null // Default: null _ If not set (the default), posts are trashed if post_type_supports('author').
    );

    register_post_type( 'degree_program', $args );
}
add_action( 'init', 'cvmbs_degree_program_init' );
