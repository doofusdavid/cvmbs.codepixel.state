<?php

    $site_image = get_field( 'site_background', 'options' );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content department" data-off-canvas-content style="background-image:url(<?php echo $site_image; ?>);">

    <!-- department.billboard -->
    <section id="department-billboard" class="ui-billboard pattern" tabindex="-1">

        <!-- billboard.title -->
        <header id="homepage-title" class="homepage-section">

            <?php

                // department homepage options
                $department_options  = get_field( 'department_homepage_options' );

            ?>

            <?php $site_billboard_text = $department_options[ 'billboard_marketing_text' ]; ?>

            <?php if ( $site_billboard_text ) : ?>

            <?php get_template_part( 'elements/homepage/department/content/layout/layout.billboard.description' ); ?>

            <?php else : ?>

            <?php get_template_part( 'elements/homepage/department/content/layout/layout.billboard.standalone' ); ?>

            <?php endif; ?>

        </header>
        <!-- END billboard.title -->

    </section>
    <!-- END department.billboard -->

    <?php get_template_part( 'elements/homepage/department/content/content.department' ); ?>

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
