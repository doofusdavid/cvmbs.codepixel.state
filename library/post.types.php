<?php

    $site_type = get_field( 'site_type', 'options' );

    // homepage billboards
    require_once( 'post.types/homepage.billboards.php' );

    // degree programs
    if ( $site_type == 'college' ) {

        require_once( 'post.types/degree.programs.php' );

    }

    // alumni profiles
    require_once( 'post.types/alumni.profiles.php' );

    // places
    require_once( 'post.types/places.php' );

    // student organizations
    require_once( 'post.types/student.organizations.php' );

?>
