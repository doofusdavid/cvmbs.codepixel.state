<?php

    // template name: PHP Script Laboratory

?>

<?php get_header(); ?>

<?php


?>

<!-- directory -->
<main id="site-layout" class="off-canvas-content <?php echo $site_type; ?>" data-off-canvas-content>

    <!-- directory -->
    <div id="directory" class="page-container">

        <!-- page header -->
        <header class="header">

            <h1>

                <?php the_title(); ?>

            </h1>

        </header>
        <!-- END page header -->

        <pre>

            <?php

                $stuff = $_SERVER[ 'DOCUMENT_ROOT' ];

                echo $stuff;

                echo $thing;

            ?>

        </pre>

        <?php

            // phpinfo();

        ?>

    </div>
    <!-- END directory -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- END directory -->

<?php get_footer(); ?>
