<?php

    // call the custom post type function on WP init
	add_action( 'init', 'homepage_billboard_post_type' );

    // define custom post type function and properties
	function homepage_billboard_post_type() {

	    // register post type + pass properties array to function
		register_post_type( 'billboard',

		    // define post type options and properties
			array(

				'labels' => array(

					'name' 				=> __( 'Billboards', 'cvmbsPress' ),
					'singular_name' 	=> __( 'Homepage Billboard', 'cvmbsPress' ),
					'all_items' 		=> __( 'All Homepage Billboards', 'cvmbsPress' ),
					'add_new' 			=> __( 'Add Homepage Billboard', 'cvmbsPress' ),
					'add_new_item' 		=> __( 'Add New Homepage Billboard', 'cvmbsPress' ),
					'edit' 				=> __( 'Edit', 'cvmbsPress' ),
					'edit_item' 		=> __( 'Edit Homepage Billboard', 'cvmbsPress' ),
					'new_item' 			=> __( 'New Homepage Billboard', 'cvmbsPress' ),
					'search_items' 		=> __( 'Search Homepage Billboards', 'cvmbsPress' ),
					'not_found' 		=> __( 'Nothing to see here, which is bad, because billboards are meant to be seen.', 'cvmbsPress' ),
					'parent_item_colon' => ''

				),

				'public'				=> true,
				'publicly_queryable' 	=> true,
				'exclude_from_search'   => true,
				'show_ui' 				=> true,
				'show_in_nav_menus' 	=> false,
				'show_in_admin_bar' 	=> false,
				'query_var' 			=> true,
				'can_export' 			=> true,
				'rewrite' 				=> array( 'slug' => 'billboards', 'with_front' => false ),
				'has_archive' 			=> false,
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> 4,
				'menu_icon' 			=> 'dashicons-layout',
				'supports' 				=> array( 'title' )

			)

		);

	}

?>
