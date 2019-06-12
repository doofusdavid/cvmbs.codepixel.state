<?php

    $billboard   = get_field( 'homepage_billboard', 'options' );
    $billboard_image = $billboard[ 'image' ];
    $billboard_title = $billboard[ 'headline' ];
    $billboard_text  = $billboard[ 'text' ];

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary special" data-off-canvas-content>

    <?php get_template_part( 'elements/homepage/dvm/panels/panel.billboard' ); ?>

    <!-- special content -->
    <section id="special-content" class="homepage-content">

        <!-- content section -->
        <div id="panel-overview" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.overview' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-video" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.video' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-snapshot" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.snapshot' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-curriculum" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.curriculum' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-degrees" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.degrees' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-support" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.support' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-opportunities" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.opportunities' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-questions" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.questions' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-highschool" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.highschool' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-visit" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.visit' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-application" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.application' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-admissions" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.admissions' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-contact" class="special-content-section">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.contact' ); ?>

        </div>
        <!-- END content section -->

    </section>
    <!-- END special content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_template_part( 'elements/homepage/special/toolbar/toolbar.menu' ); ?>
