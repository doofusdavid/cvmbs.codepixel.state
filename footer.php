        </div><!-- #content -->

        <?php get_template_part( 'elements/menus/menu.site.tabs' ); ?>

        <?php wp_footer(); ?>

        <?php

            $environment = $_SERVER[ 'DOCUMENT_ROOT' ];

            if ( $environment === '/var/www/html' ) {

                get_template_part( 'elements/developer/browser.sync' );

            }

            $site_type = get_field( 'site_type', 'options' );

            if ( $site_type == 'laboratory' ) {

                $analytics_ID = 'UA-164387974-1';

            } else {

                $analytics_ID = 'UA-138956035-1';

            }

            echo $analytics_ID;

        ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $analytics_ID; ?>"></script>
        <script>

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push( arguments );}
            gtag( 'js', new Date() );

            gtag( 'config', '<?php echo $analytics_ID; ?>' );

        </script>

        </body>

    </html>
