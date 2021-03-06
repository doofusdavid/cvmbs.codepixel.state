<?php

    // laboratory homepage options
    $laboratory_options = get_field( 'laboratory_homepage_options' );

    // test for top-level network site
    $network_site_ID = get_current_blog_id();

?>

<?php if ( $network_site_ID == 1 ) : ?>

<?php get_template_part( 'elements/homepage/laboratory/laboratory.archive' ); ?>

<?php else : ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content laboratory page-template-flexible-page" data-off-canvas-content>

    <?php

        $lab_options = get_field( 'lab_homepage_options' );

        $billboard_option = $lab_options[ 'billboard_option' ];

        // billboard site title
        $site_title  = get_field( 'site_title', 'options' );
        $title_break = get_field( 'site_title_line_break', 'options' );
        $site_line_1 = get_field( 'site_title_line_1', 'options' );
        $site_line_2 = get_field( 'site_title_line_2', 'options' );

    ?>

    <?php if ( $billboard_option ) : ?>

    <!-- laboratory.billboard -->
    <section id="laboratory-billboard" class="laboratory-billboard image" tabindex="-1" style="background-image:url(<?php echo $lab_options[ 'billboard_image' ]; ?>);">

    <?php else : ?>

    <section id="laboratory-billboard" class="laboratory-billboard image default" tabindex="-1" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/billboard.34.jpg);">

    <?php endif; ?>

        <!-- billboard.title -->
        <header id="homepage-title" class="homepage-section">

            <?php // echo get_field( 'site_title', 'options' ); ?>

            <?php

                // echo $title_break;

                if ( $title_break ) {

                    echo $site_line_1 . '<br />' . $site_line_2;

                } else {

                    echo $site_title;

                }

            ?>

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

        <?php get_template_part( 'elements/homepage/laboratory/content/content.slideshow.full' ); ?>

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

<?php endif; ?>
