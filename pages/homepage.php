<?php

	// template name: home

?>

<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content" data-off-canvas-content>

    <!-- billboard.homepage -->
    <section id="billboard-homepage" class="visible ui-billboard pattern" tabindex="-1">

        <?php get_template_part( 'elements/homepage/homepage.billboard' ); ?>

    </section>
    <!-- END billboard.homepage -->

    <!-- content.homepage -->
    <section id="content-homepage" class="hidden ui-content in-viewport" tabindex="-1">

        <?php get_template_part( 'elements/homepage/homepage.content' ); ?>

        <?php get_footer(); ?>
