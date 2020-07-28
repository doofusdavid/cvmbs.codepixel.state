<?php

    // options
    $unit_options = get_field( 'special_homepage_options' );

    // announcement block
    $announcements = $unit_options[ 'announcement_block' ];

    // custom
    $billboard_settings = $unit_options[ 'custom_billboard_settings' ];

    // field data
    $billboard_title = $billboard_settings[ 'billboard_title' ];
    $billboard_text  = $billboard_settings[ 'billboard_text' ];

    // get data
    $announcement = $unit_options[ 'announcement' ];

    // evaluate expiration
    $expired = is_this_item_expired( $announcement[ 'expiration' ] );

    // set billboard class
    if ( $announcements && ! ( $expired ) ) {

        $layout_class = 'announcement';

    } else {

        $layout_class = 'expired';

    }

?>

<!-- special.billboard -->
<section id="special_unit_billboard" class="ui-billboard special-unit-homepage-billboard">

    <!-- content -->
    <div class="billboard-content custom <?php echo $layout_class; ?>" style="background-image:url(<?php echo $billboard_settings[ 'billboard_image' ]; ?>);">

        <!-- billboard.title -->
        <header id="homepage-title" class="homepage-section">

            <!-- title -->
            <span class="billboard-text title">

                <?php echo $billboard_title; ?>

            </span>
            <!-- END title -->

            <!-- text -->
            <span class="billboard-text text">

                <?php echo $billboard_text; ?>

            </span>
            <!-- END text -->

        </header>
        <!-- END billboard.title -->

    </div>
    <!-- END content -->

    <?php if ( $announcements ) : ?>

        <?php if ( ! ( $expired ) ) : ?>

            <?php get_template_part( 'elements/homepage/special/content/special.announcements' ); ?>

        <?php endif; ?>

    <?php endif; ?>

</section>
<!-- END department.billboard -->
