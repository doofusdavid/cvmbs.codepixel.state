<?php

    // test for site type
    $site_type = get_field( 'site_type', 'options' );

    // menu panel placeholder fields
    $events_panel    = get_field( 'events_menu_panel_content', 'options' );
    $resources_panel = get_field( 'resources_menu_panel_content', 'options' );
    $social_panel    = get_field( 'social_menu_panel_content', 'options' );
    $contact_panel   = get_field( 'contact_menu_panel_content', 'options' );

?>

<!-- panel.main -->
<section id="menu-panel-main" class="active ui-panel menu-panel">

    <!-- panel.header -->
    <header id="menu-panel-main-header" class="panel-header">

        navigation menu

    </header>
    <!-- END panel.header -->

    <!-- menu -->
    <nav id="menu-panel-main-menu" class="panel-content menu">

        <?php

            if ( $site_type == 'college' ) {

                get_template_part( 'elements/menus/panels/panel.global.menu' );

            } else {

                cvmbs_site_menu();

            }

        ?>

    </nav>
    <!-- END menu -->

    <?php

        if ( $site_type == 'college' ) {

            //

        } elseif ( $site_type == 'department' || $site_type == 'special' ) {

            echo '
            <!-- global.menu -->
            <li id="global-menu-link">

                <!-- link -->
                <button class="site-menu-button" data-target="global">

                    College Menu

                </button>
                <!-- END link -->

            </li>
            <!-- END global.menu -->';

        }

    ?>

</section>
<!-- END panel.main -->

<!-- panel.global -->
<section id="menu-panel-global" class="inactive ui-panel menu-panel">

    <!-- panel.header -->
    <header id="menu-panel-global-header" class="panel-header site-menu-button" data-target="main">

        college menu

        <button id="close-global-menu">

            <span class="label">

                back

            </span>

        </button>

    </header>
    <!-- END panel.header -->

    <!-- menu -->
    <nav id="menu-panel-global-menu" class="panel-content menu">

        <?php get_template_part( 'elements/menus/panels/panel.global.menu' ); ?>

    </nav>
    <!-- END menu -->

</section>
<!-- END panel.global -->

<?php get_template_part( 'elements/menus/panels/panel.search' ); ?>

<?php get_template_part( 'elements/menus/panels/panel.events' ); ?>

<?php get_template_part( 'elements/menus/panels/panel.build' ); ?>
