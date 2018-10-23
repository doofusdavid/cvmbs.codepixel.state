<?php

    // load custom scripts + styles
    function load_admin_scripts_styles() {

        // scripts

            // register

                // base
                wp_register_script(

                    'cvmbs-admin-app-js',
                    get_stylesheet_directory_uri() . '/dist/assets/js/cvmbs.admin.app.js',
                    array(

                        //

                    ), null, true );

            // enqueue

                // base
                // wp_enqueue_script( 'cvmbs-admin-app-js' );

            // styles

                // register

                    // base
                    wp_register_style(

                        'cvmbs-admin-ui-css',
                        get_stylesheet_directory_uri() . '/dist/assets/css/cvmbs.admin.ui.css'

                        // , null, 'all' );
                        );

                // enqueue

                    // base
                    // wp_enqueue_style( 'cvmbs-admin-ui-css' );


    }

    add_action( 'admin_enqueue_scripts', 'load_admin_scripts_styles', 9999 );

    // remove default scripts
    add_action( 'wp_default_scripts', function( $scripts ) {

        if ( ! empty( $scripts->registered['jquery'] ) ) {

            $scripts->registered[ 'jquery' ]->deps = array_diff( $scripts->registered[ 'jquery' ]->deps, array( 'jquery-migrate' ) );

        }

    });

?>
