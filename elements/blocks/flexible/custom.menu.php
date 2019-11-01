
<?php $custom_menu = get_sub_field( 'menus' ); ?>

<!-- block container -->
<div class="template-block custom-menu">

    <!-- block.inner -->
	<div class="template-block__inner">

        <!-- menu wrapper -->
        <div class="custom-menu-container">

            <nav class="custom-menu-nav" role="navigation" aria-label="<?php $menu_object->name; ?>">

                <?php

                    wp_nav_menu( array(

                        'menu'       => $custom_menu,
                        'menu_class' => 'custom-menu-links'

                    ));

                ?>

            </nav>

        </div>
        <!-- END menu wrapper -->

    </div>
    <!-- END block.inner -->

</div>
<!-- END block container -->
