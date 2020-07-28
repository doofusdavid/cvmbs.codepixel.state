<?php

    // options
    $unit_options = get_field( 'special_homepage_options' );

    // announcement block
    $announcements = $unit_options[ 'announcement_block' ];

    // default
    $billboard_settings = $unit_options[ 'default_billboard_settings' ];

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
    <div class="billboard-content default <?php echo $layout_class; ?>" style="background-image:url(<?php echo $billboard_settings[ 'billboard_image' ]; ?>);">

        <!-- billboard.title -->
        <header id="homepage-title" class="homepage-section">

            <?php echo get_field( 'site_title', 'options' ); ?>

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
