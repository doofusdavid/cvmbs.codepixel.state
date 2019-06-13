
<!-- site.toolbar -->
<menu id="site-menu-toolbar" class="ui-toolbar" data-open="site-menu">

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

            <!-- placeholder -->
            <!-- <li class="menu-item"> -->

                <?php

                    // get_template_part( 'elements/menus/buttons/button.build' );

                ?>

            <!-- </li> -->

        </ul>
        <!-- END list -->

    </nav>
    <!-- END  menu -->

</menu>
<!-- END site.toolbar -->
