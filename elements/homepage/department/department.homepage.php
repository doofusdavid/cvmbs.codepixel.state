<?php

    $site_image = get_field( 'site_background', 'options' );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content department" data-off-canvas-content style="background-image:url(<?php echo $site_image; ?>);">

    <!-- department.billboard -->
    <section id="department-billboard" class="ui-billboard pattern" tabindex="-1">

        <!-- billboard.title -->
        <header id="homepage-title" class="homepage-section">

            <?php

                // site title
                $site_title  = get_field( 'site_title', 'options' );
                $title_break = get_field( 'site_title_line_break', 'options' );
                $site_line_1 = get_field( 'site_title_line_1', 'options' );
                $site_line_2 = get_field( 'site_title_line_2', 'options' );

                // site description
                $site_billboard_text = get_field( 'site_billboard_text', 'options' );

                // department homepage options
                $department_options  = get_field( 'department_homepage_options' );

            ?>

            <!-- site.title -->
            <span class="site-title">

                <?php

                    if ( $title_break[ 0 ] == 'break' ) {

                        echo $site_line_1 . '<br />' . $site_line_2;

                    } else {

                        echo $site_title;

                    }

                ?>

            </span>
            <!-- END site.title -->

            <!-- description -->
            <span class="site-description">

                <?php

                    $site_billboard_text = $department_options[ 'billboard_marketing_text' ];

                    echo $site_billboard_text;

                ?>

            </span>
            <!-- END description -->

        </header>
        <!-- END billboard.title -->

    </section>
    <!-- END department.billboard -->

    <?php get_template_part( 'elements/homepage/department/content/content.department' ); ?>

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
