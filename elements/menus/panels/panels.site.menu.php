
<!-- menu.panels -->
<menu id="site-menu-panels" class="ui-panels">

    <!-- panel.main -->
    <panel id="menu-panel-main" class="active ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-main-header" class="panel-header">

            navigation menu

        </header>
        <!-- END panel.header -->

        <!-- menu -->
        <nav id="menu-panel-main-menu" class="panel-content menu">

            <?php cvmbs_site_menu(); ?>

        </nav>
        <!-- END menu -->

        <?php

            $site_type = get_field( 'site_type', 'options' );

            if ( $site_type == 'college' ) {

                //

            } elseif ( $site_type == 'department' ) {

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

            } elseif ( $site_type == 'special' ) {

                //

            }

        ?>

    </panel>
    <!-- END panel.main -->

    <!-- panel.search -->
    <panel id="menu-panel-search" class="inactive ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-search-header" class="panel-header">

            search

        </header>
        <!-- END panel.header -->

        <?php get_template_part( 'elements/menus/panels/panel.text' ); ?>

    </panel>
    <!-- END panel.search -->

    <!-- panel.events -->
    <panel id="menu-panel-events" class="inactive ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-events-header" class="panel-header">

            college event calendar

        </header>
        <!-- END panel.header -->

        <?php get_template_part( 'elements/menus/panels/panel.text' ); ?>

    </panel>
    <!-- END panel.events -->

    <!-- panel.resources -->
    <panel id="menu-panel-resources" class="inactive ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-resources-header" class="panel-header">

            college resources

        </header>
        <!-- END panel.header -->

        <?php get_template_part( 'elements/menus/panels/panel.text' ); ?>

    </panel>
    <!-- END panel.resources -->

    <!-- panel.global -->
    <panel id="menu-panel-global" class="inactive ui-panel menu-panel">

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

            <?php get_template_part( 'elements/menus/panels/panels.global.menu' ); ?>

        </nav>
        <!-- END menu -->

    </panel>
    <!-- END panel.global -->

    <!-- panel.social -->
    <panel id="menu-panel-social" class="inactive ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-social-header" class="panel-header">

            connect with us on social media

        </header>
        <!-- END panel.header -->

        <?php get_template_part( 'elements/menus/panels/panel.text' ); ?>

    </panel>
    <!-- END panel.social -->

    <!-- panel.contact -->
    <panel id="menu-panel-contact" class="inactive ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-contact-header" class="panel-header">

            contact information

        </header>
        <!-- END panel.header -->

        <?php get_template_part( 'elements/menus/panels/panel.text' ); ?>

    </panel>
    <!-- END panel.contact -->

    <!-- panel.news -->
    <panel id="menu-panel-news" class="inactive ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-news-header" class="panel-header">

            news from around the college

        </header>
        <!-- END panel.header -->

    </panel>
    <!-- END panel.news -->

</menu>
<!-- END menu.panels -->
