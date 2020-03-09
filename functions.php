<?php

    // custom admin
    require_once( 'library/admin.php' );

    // various clean up functions
    require_once( 'library/cleanup.php' );

    // foundation framework core
    require_once( 'library/foundation.php' );

    // menus
    require_once( 'library/menus.php' );

    // options pages
    require_once( 'library/options.php' );

    // sidebars
    // require_once( 'library/sidebars/sidebars.php' );

    // menu walkers
    require_once( 'library/class-foundationpress-top-bar-walker.php' );
    require_once( 'library/class-foundationpress-mobile-walker.php' );

    // widget areas
    // require_once( 'library/widget-areas.php' );

    // entry meta for posts
    require_once( 'library/entry-meta.php' );

    // enqueue scripts
    require_once( 'library/enqueue-scripts.php' );

    // theme support
    require_once( 'library/theme.support.php' );

    // customizer nav options
    require_once( 'library/custom-nav.php' );

    // sticky post class (REMOVE)
    require_once( 'library/sticky-posts.php' );

    // responsive image sizes
    require_once( 'library/responsive-images.php' );

    // custom image sizes
    add_image_size( 'x-large', 1920, 1920, false );

    // register CSS & JS for ACF Flexible Content thumbnails
    function acf_flexible_content_thumbnails() {
        // register admin.css
        wp_enqueue_style( 'css-theme-admin', get_template_directory_uri().'/dist/assets/css/admin.css', 1.0, false );

        // register admin.js
        wp_register_script( 'js-theme-admin', get_template_directory_uri().'/js/cvmbs.admin.js', array('jquery'), 1.0, true );
        wp_localize_script( 'js-theme-admin', 'theme_var',
            array(
                'upload' => get_template_directory_uri().'/dist/assets/img/acf-thumbnails/',
            )
        );
        wp_enqueue_script( 'js-theme-admin' );
    }
    add_action( 'admin_enqueue_scripts', 'acf_flexible_content_thumbnails' );


    // determine if an item is expired - date should be passed in using 'Ymd' format
    function is_this_item_expired( $expiration ) {
        $expired = true;

        if ( !($expiration) ) {
            $expired = false; // if no expiration set, this item cannot expire
        } elseif ( $expiration >= date('Ymd') ) {
            $expired = false;
        }

        return $expired;
    }

    // determine if an item is expired - date should be passed in using 'Ymd' format
    function is_this_item_expired_yet( $expiration ) {

        // construct timestamp
        $timestamp_default = date( 'Ymd-is' );
        $timestamp_hour    = date( 'H' );
        $timestamp_offset  = $timestamp_hour - 7;
        $timestamp_setup   = explode( '-', $timestamp_default );

        $current_timestamp = $timestamp_setup[ 0 ] . $timestamp_offset . $timestamp_setup[ 1 ];

        $expired = true;

        if ( !( $expiration ) ) {

            $expired = false; // if no expiration set, this item cannot expire

        } elseif ( $expiration >= $current_timestamp ) {
        // } elseif ( $expiration >= date( 'YmdHis' ) ) {

            $expired = false;

        }

        return $expired;

    }
