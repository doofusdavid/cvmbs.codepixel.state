
<!-- menu.panels -->
<menu id="site-menu-panels" class="ui-panels">

    <!-- panel.main -->
    <panel id="menu-panel-main" class="active ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-main-header" class="panel-header">

            college navigation menu

        </header>
        <!-- END panel.header -->

        <!-- menu -->
        <nav id="menu-panel-main-menu" class="panel-content menu">

            <?php cvmbs_site_menu(); ?>

        </nav>
        <!-- END menu -->

        <!-- brand.state -->
        <span id="brand-state-required">

            <?php get_template_part( 'elements/brand/brand.state.classic' ); ?>

        </span>
        <!-- END brand.state -->

        <!-- copyright -->
        <span id="copyright-text">

            Copyright &copy; 2018 by the College of Veterinary Medicine and Biomedical Sciences<br />
            Colorado State University, Fort Collins, Colorado 80523 USA

        </span>
        <!-- END copyright -->

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

    <!-- panel.about -->
    <panel id="menu-panel-about" class="inactive ui-panel menu-panel">

        <!-- panel.header -->
        <header id="menu-panel-about-header" class="panel-header">

            college navigation menu

        </header>
        <!-- END panel.header -->

        <!-- menu -->
        <nav id="menu-panel-global-menu" class="panel-content menu">

            <?php get_template_part( 'elements/menus/panels/panels.global.menu' ); ?>

        </nav>
        <!-- END menu -->

    </panel>
    <!-- END panel.about -->

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
