<?php

    // register menus
	register_nav_menus(

		array(

			'site-menu-panel'       => __( 'Site Main Menu', 'cvmbs' ),
            'footer-menu-left' 	    => __( 'Footer Menu [L]', 'cvmbs' ),
            'footer-menu-center' 	=> __( 'Footer Menu [C]', 'cvmbs' ),
            'footer-menu-right'     => __( 'Footer Menu [R]', 'cvmbs' ),
			'research-topics-menu'  => __( 'Research Topics Menu', 'cvmbs' )

		)

	);

    // site menu
	function cvmbs_site_menu() {

	    wp_nav_menu( array(

	        'container' => false,
	        'container_class' => '',
	        'menu' => '',
	        'menu_class' => 'vertical menu accordion-menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
	        'theme_location' => 'site-menu-panel',
	        'before' => '',
	        'after' => '',
	        'link_before' => '',
	        'link_after' => '',
	        'depth' => 5,
	        'fallback_cb' => false,
	        'walker' => new Off_Canvas_Menu_Walker(),

	    ));

	}

	function footer_left_menu() {

		wp_nav_menu( array(

			'container'		  	=> false,
			'container_class' 	=> '',
			'menu' 				=> '',
			'menu_class' 		=> 'footer-menu left link-list',
			'theme_location'  	=> 'footer-menu-left',
			'before' 		  	=> '',
			'after' 			=> '',
			'link_before' 		=> '',
			'link_after' 		=> '',
			'fallback_cb' 		=> false,

		));

	}

    function footer_center_menu() {

		wp_nav_menu( array(

			'container'		  	=> false,
			'container_class' 	=> '',
			'menu' 				=> '',
			'menu_class' 		=> 'footer-menu center link-list',
			'theme_location'  	=> 'footer-menu-center',
			'before' 		  	=> '',
			'after' 			=> '',
			'link_before' 		=> '',
			'link_after' 		=> '',
			'fallback_cb' 		=> false,

		));

	}

    function footer_right_menu() {

		wp_nav_menu( array(

			'container'		  	=> false,
			'container_class' 	=> '',
			'menu' 				=> '',
			'menu_class' 		=> 'footer-menu right link-list',
			'theme_location'  	=> 'footer-menu-right',
			'before' 		  	=> '',
			'after' 			=> '',
			'link_before' 		=> '',
			'link_after' 		=> '',
			'fallback_cb' 		=> false,

		));

	}

	function research_topic_menu() {

		wp_nav_menu( array(

			'container'		  	=> false,
			'container_class' 	=> '',
			'menu' 				=> '',
			'menu_class' 		=> 'research-topic-menu',
			'theme_location'  	=> 'research-topics-menu',
			'before' 		  	=> '',
			'after' 			=> '',
			'link_before' 		=> '',
			'link_after' 		=> '',
			'fallback_cb' 		=> false,

		));

	}

	// Select nav menus from ACF field
	function acf_load_menu_field_choices( $field ) {

		// reset choices
		$field['choices'] = array();

		$menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
		//$menus = get_registered_nav_menus();  //uncomment this if you want to populate the dropdown with all Menu Locations

		$blank_list = json_encode(array( "name" => "None", "term_id" => ""));
		$blank_list = json_decode($blank_list);
		array_unshift($menus, $blank_list);

		foreach ( $menus as $val ) {
			$value = $val->term_id;
			$label = $val->name;
			$field['choices'][ $value ] = $label;
		}

		  // return the field
		  return $field;

	}

	add_filter('acf/load_field/name=menus', 'acf_load_menu_field_choices');

?>
