<?php

	// template name: Homepage

    // site type
    $site_type = get_field( 'site_type', 'options' );

    // parse URL for site path
    $siteurl = str_replace( '/', '', $siteinfo->path );

?>

    <?php get_header(); ?>

    <?php

        if ( $site_type == 'college' ) {

            get_template_part( 'elements/homepage/college/college.homepage' );

        } else if ( $site_type == 'department' ) {

            get_template_part( 'elements/homepage/department/department.homepage' );

        } else if ( $site_type == 'laboratory' ) {

            get_template_part( 'elements/homepage/laboratory/laboratory.homepage' );

        } else if ( $site_type == 'special' ) {

            get_template_part( 'elements/homepage/special/special.homepage' );

        } else if ( $site_type == 'dvm' ) {

            get_template_part( 'elements/homepage/dvm/dvm.homepage' );

        }

    ?>

    <?php get_footer(); ?>
