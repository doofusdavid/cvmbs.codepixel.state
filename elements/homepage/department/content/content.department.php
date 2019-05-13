<?php

    // degree programs
    $degree_programs_text = get_field( 'department_degree_programs', 'options' );

?>

<!-- department.content -->
<section id="department-content" class="homepage-content department">

    <!-- homepage.intro -->
    <article id="department-banner" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.banner' ); ?>

    </article>
    <!-- END homepage.intro -->

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

            <!-- title -->
            <h4 class="degree-type">

                undergraduate degrees

            </h4>
            <!-- END title -->

            <!-- undergraduate -->
            <div class="program-list undergraduate-programs">

                <!-- dynamic degree programs content -->

            </div>
            <!-- END undergraduate -->


            <!-- title -->
            <h4 class="degree-type">

                graduate degrees

            </h4>
            <!-- END title -->

            <!-- undergraduate -->
            <div class="program-list graduate-programs">

                <!-- dynamic degree programs content -->

            </div>
            <!-- END undergraduate -->

        </div>
        <!-- END programs -->

    </div>
    <!-- END degree.programs -->

    <!-- homepage.section -->
    <article id="research" class="ui-article" data-section="research" data-load="pending" tabindex="-1">

        <?php get_template_part( 'elements/homepage/sections/section.research' ); ?>

    </article>
    <!-- END homepage.section -->

    <!-- homepage.section -->
    <article id="facilities" class="ui-article" data-section="facilities" data-load="pending" tabindex="-1">

        <?php get_template_part( 'elements/homepage/department/content/content.places' ); ?>

    </article>
    <!-- END homepage.section -->

    <!-- news -->
    <article id="department-news" class="homepage-section">

        <!-- container -->
        <div class="article-container" tabindex="-1">

            <!-- title -->
            <button class="section-title scroll-trigger" data-section="news">

                news and updates

                <!-- link -->
                <span href="https://cvmbs.source.colostate.edu/" class="title-link">

                    view all

                </span>
                <!-- END link -->

            </button>
            <!-- END title -->

            <!-- feature + sidebar -->
            <div id="main-source-content">

                <!-- news.feed -->
                <section id="source-feed" class="article-cards ui-news">

                    <!-- automagical -->

                </section>
                <!-- END news.feed -->

            </div>
            <!-- END feature + sidebar -->

        </div>
        <!-- END container -->

    </article>
    <!-- END news -->

</section>
<!-- END department.content -->
