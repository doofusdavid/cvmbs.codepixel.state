<?php

    $site_type  = get_field( 'site_type', 'options' );
    $site_image = get_field( 'site_background', 'options' );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- special.billboard -->
    <!-- <section id="special-billboard" class="ui-billboard pattern" tabindex="-1" style="background-image:url(<?php echo $site_image; ?>);"> -->
    <section id="special-billboard" class="ui-billboard pattern" tabindex="-1">

        <!-- billboard.layers -->
        <div id="billboard-artwork-layers">

            <!-- headline -->
            <span class="headline">

                make a difference

            </span>
            <!-- END headline -->

            <!-- text -->
            <span class="description">

                more than a century of excellence in teaching advanced<br />
                veterinary medicine and compassionate care

            </span>
            <!-- END text -->

            <!-- button -->
            <button class="explore-button menu-item-link" data-section-link="overview">

                explore our program

            </button>
            <!-- END button -->

        </div>
        <!-- END billboard.layers -->

    </section>
    <!-- END special.billboard -->

    <?php get_template_part( 'elements/homepage/special/content/content.special' ); ?>

</main>
<!-- site.layout -->

<!-- site.toolbar -->
<toolbar id="site-toolbar">

    <?php get_template_part( 'elements/homepage/special/toolbar/toolbar.button' ); ?>

    <?php get_template_part( 'elements/homepage/special/toolbar/toolbar.menu' ); ?>

</toolbar>
<!-- END site.toolbar -->
