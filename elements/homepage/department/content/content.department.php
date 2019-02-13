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

    <!-- alumni.spotlight -->
    <div id="alumni-spotlight" class="homepage-section">

        <?php

            $alumni_profiles_query = array(

                'post_type' => 'alumni-profile',
                'orderby'   => 'rand',

            );

            $alumni_profiles = new WP_Query( $alumni_profiles_query );

        ?>

        <!-- arrows -->
        <div id="alumni-slider-controls" class="arrow-controls">

            <!-- previous arrow -->
            <button id="prev-arrow-control" class="billboard-control prev-arrow billboard-link" role="button" tabindex="-1" title="Previous Slide">

                <svg class="prev-arrow-icon arrow-icon" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">

            		<polygon fill="#FFFFFF" points="26.8,30.4 20.3,24 26.8,17.6 27.7,18.4 22.1,24 27.7,29.6" />

            	</svg>

            </button>
            <!-- END previous arrow -->

            <!-- next arrow -->
            <button id="next-arrow-control" class="billboard-control next-arrow billboard-link" role="button" tabindex="-1" title="Next Slide">

                <svg class="next-arrow-icon arrow-icon" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">

                    <polygon fill="#FFFFFF" points="22.2,30.4 21.3,29.6 26.9,24 21.3,18.4 22.2,17.6 28.7,24" />

                </svg>

            </button>
            <!-- END next arrow -->

        </div>
        <!-- END arrows -->

        <!-- alumni.slides -->
        <section id="alumni-slides" class="ui-slides" data-section="slides" tabindex="-1">

            <?php

                while ( $alumni_profiles->have_posts() ) : $alumni_profiles->the_post();

                $alumni_name      = get_field( 'alumni_name' );
                $alumni_class     = get_field( 'alumni_class');
                $alumni_jobtitle  = get_field( 'alumni_occupation');
                $alumni_employer  = get_field( 'alumni_employer');
                $alumni_image     = get_field( 'alumni_photo' );
                $alumni_image_url = $alumni_image[ 'url' ];
                $alumni_quote     = get_field( 'alumni_quote' );
                $alumni_link      = get_field( 'alumni_profile_link' );

            ?>

            <!-- slide -->
            <article class="ui-slide-article" data-load="false" style="background-image:url(<?php echo $alumni_image_url; ?>);">

                <!-- content.layers -->
                <div class="content-layers">

                    <!-- visual FX -->
                    <div class="design-layer">

                        <!-- color + gradient -->
                        <div class="color-layer fx-layer layer">

                            <!-- ball so hard -->

                        </div>
                        <!-- END color + gradient -->

                        <!-- pattern -->
                        <div class="pattern-layer fx-layer">

                            <!-- ball so hard -->

                        </div>
                        <!-- END pattern -->

                    </div>
                    <!-- END visual FX -->

                    <!-- slider -->
                    <div class="slider-layer">

                        <!-- slider.base -->
                        <div class="slider-base layer">

                            <!-- foobar -->

                        </div>
                        <!-- END slider.base -->

                        <!-- alumni.slider -->
                        <div id="alumni-slider" class="slider layer scroll-trigger" data-section="alumni">

                            <!-- slide.text -->
                            <span class="slide-text">

                                <?php echo $alumni_quote; ?>&rdquo;

                            </span>
                            <!-- END slide.text -->

                            <!-- slide.meta -->
                            <div class="slide-meta">

                                <!-- slide.quote -->
                                <span class="slide-citation">

                                    <!-- name -->
                                    <strong>
                                        <?php echo $alumni_name; ?>, '<?php echo $alumni_class; ?>
                                    </strong>
                                    <!-- END name -->

                                    <!-- title -->
                                    <em>
                                        <?php echo $alumni_jobtitle; ?><br />
                                        <?php echo $alumni_employer; ?>
                                    </em>
                                    <!-- END title -->

                                </span>
                                <!-- END slide.quote -->

                                <!-- button -->
                                <button class="slide-button">

                                    read <?php echo $alumni_name; ?>'s story

                                </button>
                                <!-- END button -->

                            </div>
                            <!-- END slide.meta -->

                        </div>
                        <!-- END alumni.slider -->

                    </div>
                    <!-- END slider -->

                </div>
                <!-- END content.layers -->

            </article>
            <!-- END slide -->

            <?php endwhile; ?>

        </section>
        <!-- END alumni.slides -->

    </div>
    <!-- END alumni.spotlight -->

    <!-- research.map -->
    <div id="global-research-map" class="homepage-section">

        this is the RESEARCH MAP section of the <?php echo $site_title; ?> site homepage

    </div>
    <!-- END research.map -->

    <!-- news -->
    <div id="department-news" class="homepage-section">

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

    </div>
    <!-- END news -->

</section>
<!-- END department.content -->
