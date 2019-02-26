<?php

    $site_type  = get_field( 'site_type', 'options' );
    $site_image = get_field( 'site_background', 'options' );
    $site_layout = get_field( 'special_unit_layout', 'options' );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- special.billboard -->
    <section id="special-billboard" class="ui-billboard pattern" tabindex="-1" style="background-image:url(<?php echo $site_image; ?>);">
    <!-- <section id="special-billboard" class="ui-billboard pattern" tabindex="-1"> -->

        <!-- overlay -->
        <div class="billboard-overlay">



        </div>
        <!-- END overlay -->

        <!-- content -->
        <div class="billboard-content">

            <?php

                $theme = wp_get_theme();

                echo $theme;

            ?>

        </div>
        <!-- END content -->

    </section>
    <!-- END special.billboard -->

    <!-- special content -->
    <section id="special-content" class="homepage-content">

        <!-- content section -->
        <div id="section-01" class="special-content-section">

            <?php

                if ( $site_layout == 'builder' ) {

                    the_content();

                } elseif ( $site_layout == 'template' ) {

                    echo 'template layout';

                }

            ?>

        </div>
        <!-- END content section -->

    </section>
    <!-- END special content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
