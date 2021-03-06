<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    // homepage alert
    $homepage_alert   = get_field( 'homepage_alert' );

    // option
    $alert_option = $homepage_alert[ 'alert_option' ];

    $billboard_config = get_field( 'college_homepage_options' );
    $post             = $billboard_config[ 'homepage_billboard' ];

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content dvm" data-off-canvas-content>

    <?php get_template_part( 'elements/homepage/dvm/panels/panel.billboard' ); ?>

    <!-- dvm content -->
    <section id="dvm-content" class="homepage-content">

        <!-- content section -->
        <div id="panel-overview" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.02.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.overview' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-video" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.01.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.video' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-snapshot" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.12.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.snapshot' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-curriculum" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.03.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.curriculum' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-degrees" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.01.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.degrees' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-support" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/content/dvm/content.background.08.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.support' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-opportunities" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/billboard.21.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.opportunities' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-questions" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.04.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.questions' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-highschool" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.05.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.highschool' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-visit" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.13.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.visit' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-application" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.application' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-admissions" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.admissions' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-contact" class="dvm-content-section lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/dvm/dvm.billboard.06.jpg">

            <?php get_template_part( 'elements/homepage/dvm/panels/panel.contact' ); ?>

        </div>
        <!-- END content section -->

    </section>
    <!-- END dvm content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_template_part( 'elements/homepage/special/toolbar/toolbar.menu' ); ?>
