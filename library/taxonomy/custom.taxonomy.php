<?php

    // call the function on WP init
    add_action( 'init', 'degree_program_taxonomy' );

    // define custom taxonomy
    function degree_program_taxonomy() {

        // register taxonomy
		register_taxonomy( 'career_interests', 'degree_programs',

            // labels object
            array(

                'labels' => array(

                    'name' 				=> __( 'Career Interests', 'cvmbsPress' ),
                    'singular_name' 	=> __( 'Career Interest', 'cvmbsPress' ),
                    'all_items' 		=> __( 'All Career Interests', 'cvmbsPress' ),
                    'add_new' 			=> __( 'Add Career Interest', 'cvmbsPress' ),
                    'add_new_item' 		=> __( 'Add New Career Interest', 'cvmbsPress' ),
                    'edit' 				=> __( 'Edit', 'cvmbsPress' ),
                    'edit_item' 		=> __( 'Edit Career Interest', 'cvmbsPress' ),
                    'new_item' 			=> __( 'New Career Interest', 'cvmbsPress' ),
                    'search_items' 		=> __( 'Search Career Interests', 'cvmbsPress' ),
                    'not_found' 		=> __( 'No career interests here...probably should do something about that.', 'cvmbsPress' ),
                    'parent_item_colon' => ''

                ),

                'hierarchical'      => false,
                'labels'            => $labels,
                'show_ui'           => true,
                'show_admin_column' => true,
    			'query_var'         => true,
                'rewrite'           => array( 'slug' => 'career_interests' ),

            )

        );

    }

?>
