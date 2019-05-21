
<!-- site.toolbar -->
<toolbar id="site-menu-toolbar" class="ui-toolbar" data-open="site-menu">

    <!-- menu -->
    <nav id="toolbar-menu">

        <!-- list -->
        <ul>

            <!-- main menu -->
            <li class="menu-item">

                <?php

                    get_template_part( 'elements/menus/buttons/button.main.menu' );

                ?>

            </li>

            <!-- search -->
            <li class="menu-item">

                <?php

                    get_template_part( 'elements/menus/buttons/button.search' );

                ?>

            </li>

            <!-- events -->
            <li class="menu-item">

                <?php

                    get_template_part( 'elements/menus/buttons/button.events' );

                ?>

            </li>

        </ul>
        <!-- END list -->

    </nav>
    <!-- END  menu -->

</toolbar>
<!-- END site.toolbar -->
