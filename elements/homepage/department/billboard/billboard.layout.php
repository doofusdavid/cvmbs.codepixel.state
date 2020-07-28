<?php

    // site title
    $site_title  = get_field( 'site_title', 'options' );
    $title_break = get_field( 'site_title_line_break', 'options' );
    $site_line_1 = get_field( 'site_title_line_1', 'options' );
    $site_line_2 = get_field( 'site_title_line_2', 'options' );

    // option
    $alert_option = $homepage_alert[ 'alert_option' ];

    // department homepage options
    $department_homepage_options = get_field( 'department_homepage_options' );

    // billboard
    $billboard_options        = $department_homepage_options[ 'billboard_options' ];
    $billboard_marketing_text = $billboard_options[ 'billboard_marketing_text' ];

    // alert class
    if ( $alert_option ) {

        $alert_class = 'has_alert';

    } else {

        $alert_class = 'alert_dismissed';

    }

    // marketing class
    if ( $billboard_options[ 'marketing_text_option' ] ) {

        $description_class = 'has_description';

    } else {

        $description_class = 'standalone';

    }

    // announcement class
    if ( $billboard_options[ 'announcement_option' ] ) {

        $announcement_class = 'has_announcement';

    } else {

        $announcement_class = 'standard_layout';

    }

    // get data
    $announcement = $billboard_options[ 'announcement' ];

    // evaluate expiration
    $expired = is_this_item_expired( $announcement[ 'expiration' ] );

    // set billboard class
    if ( $announcement && ! ( $expired ) ) {

        $expiration_class = 'not_expired';

    } else {

        $expiration_class = 'expired';

    }

?>

<!-- department.billboard -->
<section id="department_billboard" class="ui_billboard <?php echo $alert_class . ' ' . $description_class; ?>" tabindex="-1">

    <pre>

        <?php print_r( $billboard_options ); ?>

    </pre>

    <!-- content -->
    <div class="billboard_content <?php echo $announcement_class . ' ' . $expiration_class; ?>" style="background-image:url(<?php echo $billboard_options[ 'billboard_image' ]; ?>);">

        <!-- billboard.title -->
        <header id="homepage_title" class="ui_title <?php echo $description_class; ?>">

            <!-- site.title -->
            <span class="site_title <?php echo $description_class; ?>">

                <?php

                    if ( $title_break[ 0 ] == 'break' ) {

                        echo $site_line_1 . '<br />' . $site_line_2;

                    } else {

                        echo $site_title;

                    }

                ?>

            </span>
            <!-- END site.title -->

            <?php if ( $billboard_options[ 'marketing_text_option' ] ) : ?>

            <!-- description -->
            <span class="site_description">

                <?php echo $billboard_marketing_text; ?>

            </span>
            <!-- END description -->

            <?php endif; ?>

        </header>
        <!-- END billboard.title -->

    </div>
    <!-- END content -->

    <?php if ( $billboard_options[ 'announcement_option' ] ) : ?>

        <?php if ( ! ( $expired ) ) : ?>

            <?php get_template_part( 'elements/homepage/department/billboard/billboard.announcement' ); ?>

        <?php endif; ?>

    <?php endif; ?>

    <?php // get_template_part( 'elements/homepage/department/billboard/billboard.description' ); ?>

</section>
<!-- END department.billboard -->
