<?php

    // call the custom post type function on WP init
	add_action( 'init', 'places_post_type' );

    // define custom post type function and properties
	function places_post_type() {

	    // register post type + pass properties array to function
		register_post_type( 'place',

		    // define post type options and properties
			array(

				'labels' => array(

					'name' 				=> __( 'Places', 'cvmbsPress' ),
					'singular_name' 	=> __( 'Place', 'cvmbsPress' ),
					'all_items' 		=> __( 'All Places', 'cvmbsPress' ),
					'add_new' 			=> __( 'Add Place', 'cvmbsPress' ),
					'add_new_item' 		=> __( 'Add New Place', 'cvmbsPress' ),
					'edit' 				=> __( 'Edit', 'cvmbsPress' ),
					'edit_item' 		=> __( 'Edit Place', 'cvmbsPress' ),
					'new_item' 			=> __( 'New Place', 'cvmbsPress' ),
					'search_items' 		=> __( 'Search Places', 'cvmbsPress' ),
					'not_found' 		=> __( 'Nothing to see here...', 'cvmbsPress' ),
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
				'rewrite' 				=> array( 'slug' => 'places', 'with_front' => false ),
				'has_archive' 			=> true,
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> 4,
				'menu_icon' 			=> 'dashicons-building',
				'supports' 				=> array( 'title', 'thumbnail' ),
				'taxonomies'			=> array(

												'theme_categories',
												'place_relationships'

											)

			)

		);

	}

?>
