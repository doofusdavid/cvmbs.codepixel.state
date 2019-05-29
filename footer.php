
        <?php get_template_part( 'elements/menus/menu.site' ); ?>

        <?php wp_footer(); ?>

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/js/library/velocity.ui.min.js"></script>
        <script id="__bs_script__">

            //<![CDATA[
                document.write("<script async src='//HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
            //]]>

        </script>

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
