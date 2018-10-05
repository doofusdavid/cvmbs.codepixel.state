<?php

	// sidebars and widget panels
	function cvmbs_register_sidebars() {

		register_sidebar( array(

			'id'             => 'default-sidebar',
			'name'           => __( 'Default Sidebar', 'cvmbs' ),
			'description'    => __('Drag widgets to this container.', 'cvmbs'),
			'before_widget'  => '<div class="widget %2$s">',
			'after_widget'   => '</div>',
			'before_title'   => '<h4 class="sidebar-title">',
			'after_title'    => '</h4>',

		));

	}

    // action hook
    add_action( 'widgets_init', 'cvmbs_register_sidebars' );

?>
