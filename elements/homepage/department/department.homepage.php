<?php

    $site_image = get_field( 'site_background', 'options' );

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // homepage alert
    $homepage_alert   = get_field( 'homepage_alert' );

    // option
    $alert_option = $homepage_alert[ 'alert_option' ];

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content department" data-off-canvas-content>

    <?php if ( $alert_option ) : ?>

    <?php $alert_class = 'has_alert'; ?>

    <!-- emergency alert -->
    <div id="homepage_alert" class="ui_alert <?php echo $homepage_alert[ 'alert_type' ]; ?>">

        <!-- alert text -->
        <div class="alert_text">

            <?php if ( $homepage_alert[ 'alert_title' ] ) : ?>

            <!-- title -->
            <span class="alert_title">

                <?php echo $homepage_alert[ 'alert_title' ]; ?>

            </span>
            <!-- END title -->

            <?php endif; ?>

            <!-- message -->
            <span class="alert_message">

                <?php echo $homepage_alert[ 'alert_text' ]; ?>&nbsp;-&nbsp;

            </span>
            <!-- END message -->

            <!-- link -->
            <a class="alert_link" href="<?php echo $homepage_alert[ 'alert_link' ][ 'url' ]; ?>">

                <?php echo $homepage_alert[ 'alert_link' ][ 'title' ]; ?>

            </a>
            <!-- END link -->

        </div>
        <!-- END alert text -->

        <!-- dismiss alert -->
        <button id="dismiss_alert">

            <!-- label -->
            <span>

                dismiss

            </span>
            <!-- END label -->

        </button>
        <!-- END dismiss alert -->

    </div>
    <!-- END emergency alert -->

    <?php endif; ?>

    <!-- department.billboard -->
    <section id="department-billboard" class="department-billboard ui-billboard pattern <?php echo $alert_class; ?>" tabindex="-1" style="background-image:url(<?php echo $site_image; ?>);">

        <!-- billboard.title -->
        <header id="homepage-title" class="homepage-section">

            <?php
            if ( $department_options[ 'billboard_marketing_text' ] ) :

                get_template_part( 'elements/homepage/department/content/layout/layout.billboard.description' );
            else :

                get_template_part( 'elements/homepage/department/content/layout/layout.billboard.standalone' );

            endif;
            ?>

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
