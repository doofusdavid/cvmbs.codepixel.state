<?php

    $site_type  = get_field( 'site_type', 'options' );
    $site_image = get_field( 'site_background', 'options' );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary <?php echo $site_type; ?>" data-off-canvas-content style="background-image:url(<?php echo $site_image; ?>);">

    <!-- department.billboard -->
    <section id="department-billboard" class="ui-billboard pattern" tabindex="-1">

        <!-- billboard.layers -->
        <div id="billboard-artwork-layers">

            <!-- site.image -->
            <div class="layer image">

                <!--  -->

            </div>
            <!-- END site.image -->

        </div>
        <!-- END billboard.layers -->

    </section>
    <!-- END department.billboard -->

    <?php get_template_part( 'elements/homepage/department/content/content.department' ); ?>

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
