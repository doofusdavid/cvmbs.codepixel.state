
<!-- site.layout -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content style="background-image:url(<?php echo $site_image; ?>);">

    <!-- billboard.homepage -->
    <section id="billboard-homepage" class="visible ui-billboard pattern" tabindex="-1">

        <?php get_template_part( 'elements/homepage/homepage.billboard' ); ?>

    </section>
    <!-- END billboard.homepage -->

    <!-- content.homepage -->
    <section id="content-homepage" class="hidden ui-content in-viewport" tabindex="-1">

        <?php get_template_part( 'elements/homepage/college/content/content.college' ); ?>

    </section>
    <!-- END content.homepage -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
