        </div><!-- #content -->

        <?php get_template_part( 'elements/menus/menu.site' ); ?>

        <?php wp_footer(); ?>

        <script async src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/js/library/velocity.ui.min.js"></script>

        <?php

            $environment = $_SERVER[ 'DOCUMENT_ROOT' ];

            if ( $environment === '/var/www/html' ) {

                get_template_part( 'elements/developer/browser.sync' );

            }

        ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138956035-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-138956035-1');
        </script>

        </body>

    </html>
