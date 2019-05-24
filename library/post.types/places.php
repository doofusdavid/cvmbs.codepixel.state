<?php

    // call the custom post type function on WP init
	add_action( 'init', 'places_post_type' );

    // define custom post type function and properties
	function places_post_type() {

	    // register post type + pass properties array to function
		register_post_type( 'place',

		    // define post type options and properties
			array(

				'labels'                => array(
					'name'                  => _x( 'Places', 'post type general name', 'cvmbsPress' ),
					'singular_name'         => _x( 'Place', 'post type singular name', 'cvmbsPress' ),
					'add_new'               => _x( 'Add New', 'place', 'cvmbsPress' ),
					'add_new_item'          => __( 'Add New Place', 'cvmbsPress' ),
					'edit_item'             => __( 'Edit Place', 'cvmbsPress' ),
					'new_item'              => __( 'New Place', 'cvmbsPress' ),
					'view_item'             => __( 'View Place', 'cvmbsPress' ),
					'view_items'            => __( 'View Places', 'cvmbsPress' ),
					'search_items'          => __( 'Search Places', 'cvmbsPress' ),
					'all_items'             => __( 'All Places', 'cvmbsPress' ),
					'archives'              => __( 'Place Archives', 'cvmbsPress' ),
					'attributes'            => __( 'Place Attributes', 'cvmbsPress' ),
					'insert_into_item'      => __( 'Insert into place', 'cvmbsPress' ),
					'uploaded_to_this_item' => __( 'Uploaded to this place', 'cvmbsPress' ),
					'not_found'             => __( 'No places found.', 'cvmbsPress' ),
					'not_found_in_trash'    => __( 'No places found in Trash.', 'cvmbsPress' )
				),

				'public'				=> true,
				'publicly_queryable' 	=> true,
				'exclude_from_search'   => true,
				'show_ui' 				=> true,
				'show_in_nav_menus' 	=> false,
				'show_in_admin_bar' 	=> true,
				'show_in_rest'			=> true,
				'query_var' 			=> true,
				'can_export' 			=> true,
				'rewrite' 				=> array( 'slug' => 'places', 'with_front' => false ),
				'has_archive' 			=> true,
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> 7,
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
