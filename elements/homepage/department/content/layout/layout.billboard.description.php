<?php

    // department homepage options
    $department_options  = get_field( 'department_homepage_options' );

    // site title
    $site_title  = get_field( 'site_title', 'options' );
    $title_break = get_field( 'site_title_line_break', 'options' );
    $site_line_1 = get_field( 'site_title_line_1', 'options' );
    $site_line_2 = get_field( 'site_title_line_2', 'options' );


    $site_billboard_text = $department_options[ 'billboard_marketing_text' ];

?>

<!-- billboard.title -->
<header id="homepage-title" class="homepage-section has_description">

    <!-- site.title -->
    <span class="site-title">

        <?php

            if ( $title_break[ 0 ] == 'break' ) {

                echo $site_line_1 . '<br />' . $site_line_2;

            } else {

                echo $site_title;

            }

        ?>

    </span>
    <!-- END site.title -->

    <!-- description -->
    <span class="site-description">

        <?php echo $site_billboard_text; ?>

    </span>
    <!-- END description -->

</header>
<!-- END billboard.title -->
