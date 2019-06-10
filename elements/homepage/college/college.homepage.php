<!-- site.layout -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content style="background-image:url(<?php echo $site_image; ?>);">

    <!-- billboard.homepage -->
    <!-- <div id="billboard-homepage" class="billboard-homepage"> -->

        <?php // get_template_part( 'elements/homepage/homepage.billboard' ); ?>

    <!-- </div> -->
    <!-- END billboard.homepage -->

    <!-- content.homepage -->
    <div id="content-homepage" class="content-homepage">

        <?php

        get_template_part( 'elements/homepage/sections/section.degree.programs' );

        get_template_part( 'elements/homepage/sections/section.alumni' );

        get_template_part( 'elements/homepage/sections/section.research' );

        get_template_part( 'elements/homepage/sections/section.places' );

        get_template_part( 'elements/homepage/sections/section.news' );

        ?>

    </div>
    <!-- END content.homepage -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
