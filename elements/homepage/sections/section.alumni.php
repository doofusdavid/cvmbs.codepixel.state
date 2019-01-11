<?php

    $alumni_profiles_query = array(

        'post_type' => 'alumni-profile',
        'orderby'   => 'rand',

    );

    $alumni_profiles = new WP_Query( $alumni_profiles_query );

?>

<!-- container -->
<div class="article-container">

    <!-- background.color -->
    <div class="section-base">

        <!-- empty -->

    </div>
    <!-- END background.color -->

    <!-- section.content -->
    <div id="spotlight-billboard" class="section-content">

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
    <!-- END section.content -->

</div>
<!-- END container -->
