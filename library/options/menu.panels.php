<?php

	if( function_exists( 'acf_add_options_page' ) ) {

        // top-level page
        $cvmbs_menu_panels = array(

			'page_title' 	=> 'Menu Panels',
			'menu_title' 	=> 'Menu Panels',
			'menu_slug' 	=> 'menu_panels',
			'capability' 	=> 'manage_options',
			'position' 		=> '62',
			// 'icon_url' 		=> get_stylesheet_directory_uri().'/assets/img/icons/admin/icon_site_settings.svg',
            'icon_url'      => 'dashicons-editor-kitchensink',
			// 'redirect' 		=> true

		);

        acf_add_options_page( $cvmbs_menu_panels );

        // options
        acf_add_options_sub_page( array(

			'page_title' 	=> 'Menu Panel Options',
			'menu_title' 	=> 'Menu Panel Options',
			'parent_slug'   => 'menu_panels',
			'menu_slug' 	=> 'menu_panel_options',

		));

        // events
        acf_add_options_sub_page( array(

			'page_title' 	=> 'Events Calendar Menu Panel',
			'menu_title' 	=> 'Events Calendar Menu Panel',
			'parent_slug'   => 'menu_panels',
			'menu_slug' 	=> 'menu_panel_events',

		));

        // resources
        acf_add_options_sub_page( array(

			'page_title' 	=> 'Resources Menu Panel',
			'menu_title' 	=> 'Resources Menu Panel',
			'parent_slug'   => 'menu_panels',
			'menu_slug' 	=> 'menu_panel_resources',

		));

        // social
        acf_add_options_sub_page( array(

			'page_title' 	=> 'Social Media Menu Panel',
			'menu_title' 	=> 'Social Media Menu Panel',
			'parent_slug'   => 'menu_panels',
			'menu_slug' 	=> 'menu_panel_social',

		));

        // contact
        acf_add_options_sub_page( array(

			'page_title' 	=> 'Contact Info Menu Panel',
			'menu_title' 	=> 'Contact Info Menu Panel',
			'parent_slug'   => 'menu_panels',
			'menu_slug' 	=> 'menu_panel_contact',

		));

	}

?>
