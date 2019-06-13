<?php

    $site_image = get_field( 'site_background', 'options' );

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    $research_content = $department_options[ 'research_content' ];
    $research_display = $research_content[ 'display' ];

    $outreach_content = $department_options[ 'outreach_content' ];
    $outreach_display = $outreach_content[ 'display' ];

    $giving_content = $department_options[ 'giving_content' ];
    $giving_layout = $giving_content[ 'layout' ];

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content department" data-off-canvas-content>

    <!-- department.billboard -->
    <section id="department-billboard" class="department-billboard ui-billboard pattern" tabindex="-1" style="background-image:url(<?php echo $site_image; ?>);">

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

    <!-- department.content -->
    <div id="department-content" class="homepage-content department">

        <?php

        get_template_part( 'elements/homepage/department/content/content.banner' );

        get_template_part( 'elements/homepage/department/content/content.degree.programs' );

        get_template_part( 'elements/homepage/department/content/content.residencies' );

        get_template_part( 'elements/homepage/department/content/content.expertise' );

        if ( $department_options[ 'research_content' ][ 'display' ] ) {

            get_template_part( 'elements/homepage/department/content/content.research' );

        }

        get_template_part( 'elements/homepage/department/content/content.places' );

        // test for template part
        if ( $department_options[ 'outreach_content' ][ 'display' ] ) {

            get_template_part( 'elements/homepage/department/content/content.outreach' );

        }

        get_template_part( 'elements/homepage/department/content/content.news' );

        // test for template part
        if ( $department_options[ 'giving_content' ][ 'layout' ] ) {

            get_template_part( 'elements/homepage/department/content/content.giving.full' );

        } else {

            get_template_part( 'elements/homepage/department/content/content.giving.basic' );

        }

        ?>

    </div>
    <!-- END department.content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
