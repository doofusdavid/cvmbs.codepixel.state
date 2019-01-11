<?php

    // call the custom post type function on WP init
	add_action( 'init', 'alumni_profile_post_type' );

    // define custom post type function and properties
	function alumni_profile_post_type() {

	    // register post type + pass properties array to function
		register_post_type( 'alumni-profile',

		    // define post type options and properties
			array(

				'labels' => array(

					'name' 				=> __( 'Alumni Profiles', 'cvmbsPress' ),
					'singular_name' 	=> __( 'Alumni Profile', 'cvmbsPress' ),
					'all_items' 		=> __( 'All Alumni Profiles', 'cvmbsPress' ),
					'add_new' 			=> __( 'Add Alumni Profile', 'cvmbsPress' ),
					'add_new_item' 		=> __( 'Add New Alumni Profile', 'cvmbsPress' ),
					'edit' 				=> __( 'Edit', 'cvmbsPress' ),
					'edit_item' 		=> __( 'Edit Alumni Profile', 'cvmbsPress' ),
					'new_item' 			=> __( 'New Alumni Profile', 'cvmbsPress' ),
					'search_items' 		=> __( 'Search Alumni Profiles', 'cvmbsPress' ),
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
				'rewrite' 				=> array( 'slug' => 'alumni-profiles', 'with_front' => false ),
				'has_archive' 			=> false,
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> 4,
				'menu_icon' 			=> 'dashicons-groups',
				'supports' 				=> array( 'title' )

			)

		);

	}

?>
