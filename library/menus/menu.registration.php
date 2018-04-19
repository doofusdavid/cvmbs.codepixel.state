<?php

    // register menus
	register_nav_menus(

		array(

			'site-menu-panel'       => __( 'Site Main Menu', 'cvmbs' ),
            'footer-menu-left' 	    => __( 'Footer Menu [L]', 'cvmbs' ),
            'footer-menu-center' 	=> __( 'Footer Menu [C]', 'cvmbs' ),
            'footer-menu-right'     => __( 'Footer Menu [R]', 'cvmbs' )

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

?>
