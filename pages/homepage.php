<?php

	// template name: Homepage

    $site_type = get_field( 'site_type', 'options' );

?>

    <?php get_header(); ?>

    <?php

        if ( $site_type == 'college' ) {

            get_template_part( 'elements/homepage/college/college.homepage' );

        } else if ( $site_type == 'department' ) {

            get_template_part( 'elements/homepage/department/department.homepage' );

        } else if ( $site_type == 'special' ) {

            get_template_part( 'elements/homepage/special/special.homepage' );

        }

    ?>

    <?php get_footer(); ?>
