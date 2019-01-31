<?php

    // call the custom post type function on WP init
	add_action( 'init', 'degree_program_post_type' );

    // define custom post type function and properties
	function degree_program_post_type() {

	    // register post type + pass properties array to function
		register_post_type( 'degree-program',

		    // define post type options and properties
			array(

				'labels' => array(

					'name' 				=> __( 'Degree Programs', 'cvmbsPress' ),
					'singular_name' 	=> __( 'Degree Program', 'cvmbsPress' ),
					'all_items' 		=> __( 'All Degree Programs', 'cvmbsPress' ),
					'add_new' 			=> __( 'Add Degree Program', 'cvmbsPress' ),
					'add_new_item' 		=> __( 'Add New Degree Program', 'cvmbsPress' ),
					'edit' 				=> __( 'Edit', 'cvmbsPress' ),
					'edit_item' 		=> __( 'Edit Degree Program', 'cvmbsPress' ),
					'new_item' 			=> __( 'New Degree Program', 'cvmbsPress' ),
					'search_items' 		=> __( 'Search Degree Programs', 'cvmbsPress' ),
					'not_found' 		=> __( 'No degree programs here...probably should do something about that.', 'cvmbsPress' ),
					'parent_item_colon' => ''

				),

				'public'				=> true,
				'publicly_queryable' 	=> true,
				'exclude_from_search'   => true,
				'show_ui' 				=> true,
				'show_in_nav_menus' 	=> false,
				'show_in_admin_bar' 	=> false,
				'show_in_rest'          => true,
				'query_var' 			=> true,
				'can_export' 			=> true,
				'rewrite' 				=> array( 'slug' => 'degree-programs', 'with_front' => false ),
				'has_archive' 			=> true,
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> 4,
				'menu_icon' 			=> 'dashicons-welcome-learn-more',
				'supports' 				=> array( 'title', 'thumbnail' ),
				'taxonomies'			=> array(

												// 'theme_categories',
												// 'category',
												'career_interests',
												'degree_types',
												'department'

											)

			)

		);

	}

?>
