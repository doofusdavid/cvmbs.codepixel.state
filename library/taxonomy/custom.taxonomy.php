<?php

    // call the function on WP init
    add_action( 'init', 'register_degree_programs_taxonomies', 0 );

    // define custom taxonomies
    function register_degree_programs_taxonomies() {

        // labels
        $careers_labels = array(

    		'name'                       => _x( 'Career Interests', 'Taxonomy General Name', 'cvmbsPress' ),
    		'singular_name'              => _x( 'Career Interest', 'Taxonomy Singular Name', 'cvmbsPress' ),
    		'menu_name'                  => __( 'Career Interests', 'cvmbsPress' ),
    		'all_items'                  => __( 'All Items', 'cvmbsPress' ),
    		'parent_item'                => __( 'Parent Item', 'cvmbsPress' ),
    		'parent_item_colon'          => __( 'Parent Item:', 'cvmbsPress' ),
    		'new_item_name'              => __( 'New Item Name', 'cvmbsPress' ),
    		'add_new_item'               => __( 'Add New Item', 'cvmbsPress' ),
    		'edit_item'                  => __( 'Edit Item', 'cvmbsPress' ),
    		'update_item'                => __( 'Update Item', 'cvmbsPress' ),
    		'view_item'                  => __( 'View Item', 'cvmbsPress' ),
    		'separate_items_with_commas' => __( 'Separate items with commas', 'cvmbsPress' ),
    		'add_or_remove_items'        => __( 'Add or remove items', 'cvmbsPress' ),
    		'choose_from_most_used'      => __( 'Choose from the most used', 'cvmbsPress' ),
    		'popular_items'              => __( 'Popular Items', 'cvmbsPress' ),
    		'search_items'               => __( 'Search Items', 'cvmbsPress' ),
    		'not_found'                  => __( 'Not Found', 'cvmbsPress' ),
    		'no_terms'                   => __( 'No items', 'cvmbsPress' ),
    		'items_list'                 => __( 'Items list', 'cvmbsPress' ),
    		'items_list_navigation'      => __( 'Items list navigation', 'cvmbsPress' ),

        );

        // properties
        $careers = array(

        	'labels'                     => $careers_labels,
    		'hierarchical'               => false,
    		'public'                     => true,
    		'show_ui'                    => true,
    		'show_admin_column'          => true,
    		'show_in_nav_menus'          => true,
    		'show_tagcloud'              => true,
            'show_in_rest'               => true

        );

        // register taxonomy
		register_taxonomy( 'career_interests', array( 'degree_programs' ), $careers );

        // labels
        $degrees_labels = array(

    		'name'                       => _x( 'Degree Types', 'Taxonomy General Name', 'cvmbsPress' ),
    		'singular_name'              => _x( 'Degree Type', 'Taxonomy Singular Name', 'cvmbsPress' ),
    		'menu_name'                  => __( 'Degree Types', 'cvmbsPress' ),
    		'all_items'                  => __( 'All Items', 'cvmbsPress' ),
    		'parent_item'                => __( 'Parent Item', 'cvmbsPress' ),
    		'parent_item_colon'          => __( 'Parent Item:', 'cvmbsPress' ),
    		'new_item_name'              => __( 'New Item Name', 'cvmbsPress' ),
    		'add_new_item'               => __( 'Add New Item', 'cvmbsPress' ),
    		'edit_item'                  => __( 'Edit Item', 'cvmbsPress' ),
    		'update_item'                => __( 'Update Item', 'cvmbsPress' ),
    		'view_item'                  => __( 'View Item', 'cvmbsPress' ),
    		'separate_items_with_commas' => __( 'Separate items with commas', 'cvmbsPress' ),
    		'add_or_remove_items'        => __( 'Add or remove items', 'cvmbsPress' ),
    		'choose_from_most_used'      => __( 'Choose from the most used', 'cvmbsPress' ),
    		'popular_items'              => __( 'Popular Items', 'cvmbsPress' ),
    		'search_items'               => __( 'Search Items', 'cvmbsPress' ),
    		'not_found'                  => __( 'Not Found', 'cvmbsPress' ),
    		'no_terms'                   => __( 'No items', 'cvmbsPress' ),
    		'items_list'                 => __( 'Items list', 'cvmbsPress' ),
    		'items_list_navigation'      => __( 'Items list navigation', 'cvmbsPress' ),

        );

        // properties
    	$degrees = array(

        	'labels'                     => $degrees_labels,
    		'hierarchical'               => true,
    		'public'                     => true,
    		'show_ui'                    => true,
    		'show_admin_column'          => true,
    		'show_in_nav_menus'          => true,
    		'show_tagcloud'              => true,
            'show_in_rest'               => true

        );

        // register taxonomy
		register_taxonomy( 'degree_types', array( 'degree_programs' ), $degrees );

        // labels
    	$departments_labels = array(

            'name'                       => __( 'Departments', 'Taxonomy General Name', 'cvmbsPress' ),
    		'singular_name'              => __( 'Department', 'Taxonomy Singular Name', 'cvmbsPress' ),
    		'menu_name'                  => __( 'Department Affiliations', 'cvmbsPress' ),
    		'all_items'                  => __( 'All Items', 'cvmbsPress' ),
    		'parent_item'                => __( 'Parent Item', 'cvmbsPress' ),
    		'parent_item_colon'          => __( 'Parent Item:', 'cvmbsPress' ),
    		'new_item_name'              => __( 'New Item Name', 'cvmbsPress' ),
    		'add_new_item'               => __( 'Add New Item', 'cvmbsPress' ),
    		'edit_item'                  => __( 'Edit Item', 'cvmbsPress' ),
    		'update_item'                => __( 'Update Item', 'cvmbsPress' ),
    		'view_item'                  => __( 'View Item', 'cvmbsPress' ),
    		'separate_items_with_commas' => __( 'Separate items with commas', 'cvmbsPress' ),
    		'add_or_remove_items'        => __( 'Add or remove items', 'cvmbsPress' ),
    		'choose_from_most_used'      => __( 'Choose from the most used', 'cvmbsPress' ),
    		'popular_items'              => __( 'Popular Items', 'cvmbsPress' ),
    		'search_items'               => __( 'Search Items', 'cvmbsPress' ),
    		'not_found'                  => __( 'Not Found', 'cvmbsPress' ),
    		'no_terms'                   => __( 'No items', 'cvmbsPress' ),
    		'items_list'                 => __( 'Items list', 'cvmbsPress' ),
    		'items_list_navigation'      => __( 'Items list navigation', 'cvmbsPress' ),

        );

        // properties
    	$departments = array(

    		'labels'                     => $departments_labels,
    		'hierarchical'               => false,
    		'public'                     => true,
    		'show_ui'                    => true,
    		'show_admin_column'          => true,
    		'show_in_nav_menus'          => true,
    		'show_tagcloud'              => true,
            'show_in_rest'               => true

    	);

        // register taxonomy
        register_taxonomy( 'department', array( 'degree_programs' ), $departments );

    }

    // call the function on WP init
    add_action( 'init', 'register_places_taxonomies', 0 );

    // define custom taxonomy
    function register_places_taxonomies() {

        $place_labels = array(

    		'name'                       => _x( 'Place Relationships', 'Taxonomy General Name', 'cvmbsPress' ),
    		'singular_name'              => _x( 'Place Relationship', 'Taxonomy Singular Name', 'cvmbsPress' ),
    		'menu_name'                  => __( 'Place Relationships', 'cvmbsPress' ),
    		'all_items'                  => __( 'All Items', 'cvmbsPress' ),
    		'parent_item'                => __( 'Parent Item', 'cvmbsPress' ),
    		'parent_item_colon'          => __( 'Parent Item:', 'cvmbsPress' ),
    		'new_item_name'              => __( 'New Item Name', 'cvmbsPress' ),
    		'add_new_item'               => __( 'Add New Item', 'cvmbsPress' ),
    		'edit_item'                  => __( 'Edit Item', 'cvmbsPress' ),
    		'update_item'                => __( 'Update Item', 'cvmbsPress' ),
    		'view_item'                  => __( 'View Item', 'cvmbsPress' ),
    		'separate_items_with_commas' => __( 'Separate items with commas', 'cvmbsPress' ),
    		'add_or_remove_items'        => __( 'Add or remove items', 'cvmbsPress' ),
    		'choose_from_most_used'      => __( 'Choose from the most used', 'cvmbsPress' ),
    		'popular_items'              => __( 'Popular Items', 'cvmbsPress' ),
    		'search_items'               => __( 'Search Items', 'cvmbsPress' ),
    		'not_found'                  => __( 'Not Found', 'cvmbsPress' ),
    		'no_terms'                   => __( 'No items', 'cvmbsPress' ),
    		'items_list'                 => __( 'Items list', 'cvmbsPress' ),
    		'items_list_navigation'      => __( 'Items list navigation', 'cvmbsPress' ),

        );

        $places = array(

        	'labels'                     => $place_labels,
    		'hierarchical'               => true,
    		'public'                     => true,
    		'show_ui'                    => true,
    		'show_admin_column'          => true,
    		'show_in_nav_menus'          => true,
    		'show_tagcloud'              => true

        );

        // register taxonomy
        register_taxonomy( 'place_relationships', array( 'places' ), $places );

    }

?>
