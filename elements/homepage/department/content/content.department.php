<?php

    // site title
    $site_title  = get_field( 'site_title', 'options' );
    $title_break = get_field( 'site_title_line_break', 'options' );
    $site_line_1 = get_field( 'site_title_line_1', 'options' );
    $site_line_2 = get_field( 'site_title_line_2', 'options' );

    // site description
    $site_billboard_text = get_field( 'site_billboard_text', 'options' );

    // intro
    $site_intro_text = get_field( 'site_intro_text', 'options' );

    // degree programs
    $degree_programs_text = get_field( 'department_degree_programs', 'options' );

?>

<!-- department.content -->
<section id="department-content" class="homepage-content department">

    <!-- billboard.title -->
    <div id="homepage-title" class="homepage-section">

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

            <?php echo $site_billboard_text; ?>

        </span>
        <!-- END description -->

    </div>
    <!-- END billboard.title -->

    <!-- text -->
    <div id="homepage-intro-text" class="homepage-section">

        <?php echo $site_intro_text; ?>

    </div>
    <!-- END text -->

    <!-- degree.programs -->
    <div id="degree-programs" class="homepage-section">

        <!-- description -->
        <div id="department-degree-programs-description" class="degree-program-content">

            <!-- title -->
            <h3 class="section-heading">

                degree programs

            </h3>
            <!-- END title -->

            <!-- text -->
            <p>

                Choose from lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet cursus sit amet dictum sit amet justo donec. Pellentesque dignissim enim sit amet venenatis.

            </p>
            <!-- END text -->

            <!-- text -->
            <p>

                Pellentesque dignissim enim sit amet venenatis. Ut labore et dolore magna aliqua. Sit amet cursus sit amet dictum sit amet justo donec. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.

            </p>
            <!-- END text -->

            <!-- button -->
            <a href="#" class="link-button">

                learn more

            </a>
            <!-- END button -->

        </div>
        <!-- END description -->

        <!-- programs -->
        <div id="department-degree-programs" class="degree-program-content">

            <!-- dynamic degree programs content -->

        </div>
        <!-- END programs -->

    </div>
    <!-- END degree.programs -->

    <!-- alumni.spotlight -->
    <div id="alumni-spotlight" class="homepage-section">

        this is the ALUMNI SPOTLIGHT section of the <?php echo $site_title; ?> site homepage

    </div>
    <!-- END alumni.spotlight -->

    <!-- research.map -->
    <div id="global-research-map" class="homepage-section">

        this is the RESEARCH MAP section of the <?php echo $site_title; ?> site homepage

    </div>
    <!-- END research.map -->

    <!-- news -->
    <div id="department-news" class="homepage-section">

        this is the NEWS FEED section of the <?php echo $site_title; ?> site homepage

    </div>
    <!-- END news -->

</section>
<!-- END department.content -->