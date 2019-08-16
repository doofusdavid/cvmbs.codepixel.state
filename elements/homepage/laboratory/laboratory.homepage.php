<?php

    // laboratory homepage options
    $laboratory_options = get_field( 'laboratory_homepage_options' );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content laboratory page-template-flexible-page" data-off-canvas-content>

    <?php

        $lab_options = get_field( 'lab_homepage_options' );

        $billboard_option = $lab_options[ 'billboard_option' ];

    ?>

    <?php if ( $billboard_option ) : ?>

    <!-- laboratory.billboard -->
    <section id="laboratory-billboard" class="laboratory-billboard image" tabindex="-1" style="background-image:url(<?php echo $lab_options[ 'billboard_image' ]; ?>);">

    <?php else : ?>

    <section id="laboratory-billboard" class="laboratory-billboard" tabindex="-1">

    <?php endif; ?>

        <!-- billboard.title -->
        <header id="homepage-title" class="homepage-section">

            <?php echo get_field( 'site_title', 'options' ); ?>

        </header>
        <!-- END billboard.title -->

    </section>
    <!-- END department.billboard -->

    <!-- laboratory.content -->
    <div id="laboratory-content" class="homepage-content laboratory">

        <!-- description block -->
        <?php if ( $lab_options[ 'description_option' ] ) : ?>

        <?php get_template_part( 'elements/homepage/laboratory/content/content.description' ); ?>

        <?php endif; ?>

        <!-- research projects block -->
        <?php if ( $lab_options[ 'research_projects_option' ] ) : ?>

        <?php get_template_part( 'elements/homepage/laboratory/content/content.research' ); ?>

        <?php endif; ?>

        <!-- publications block -->
        <?php if ( $lab_options[ 'publications_option' ] ) : ?>

        <?php get_template_part( 'elements/homepage/laboratory/content/content.publications' ); ?>

        <?php endif; ?>

        <!-- fast facts block -->
        <?php if ( $lab_options[ 'fast_facts_option' ] ) : ?>

        <?php get_template_part( 'elements/homepage/laboratory/content/content.facts' ); ?>

        <?php endif; ?>

        <!-- staff block -->
        <?php if ( $lab_options[ 'lab_staff_option' ] ) : ?>

        <?php get_template_part( 'elements/homepage/laboratory/content/content.staff' ); ?>

        <?php endif; ?>

        <!-- slideshow block -->
        <?php if ( $lab_options[ 'slideshow_option' ] ) : ?>

        <?php get_template_part( 'elements/homepage/laboratory/content/content.slideshow' ); ?>

        <?php endif; ?>

        <!-- news block -->
        <?php if ( $lab_options[ 'news_option' ] ) : ?>

        <?php get_template_part( 'elements/homepage/laboratory/content/content.news' ); ?>

        <?php endif; ?>

        <!-- contact info block -->
        <?php if ( $lab_options[ 'contact_option' ] ) : ?>

        <?php get_template_part( 'elements/homepage/laboratory/content/content.contact' ); ?>

        <?php endif; ?>

    </div>
    <!-- END department.content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
