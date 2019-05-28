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

                <!-- label -->
                <span class="button-label">

                    previous slide

                </span>
                <!-- END label -->

                <svg class="prev-arrow-icon arrow-icon" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">

            		<polygon fill="#FFFFFF" points="26.8,30.4 20.3,24 26.8,17.6 27.7,18.4 22.1,24 27.7,29.6" />

            	</svg>

            </button>
            <!-- END previous arrow -->

            <!-- next arrow -->
            <button id="next-arrow-control" class="billboard-control next-arrow billboard-link" role="button" tabindex="-1" title="Next Slide">

                <!-- label -->
                <span class="button-label">

                    next slide

                </span>
                <!-- END label -->

                <!-- arrow -->
                <svg class="next-arrow-icon arrow-icon" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">

                    <polygon fill="#FFFFFF" points="22.2,30.4 21.3,29.6 26.9,24 21.3,18.4 22.2,17.6 28.7,24" />

                </svg>
                <!-- END arrow -->

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

                <!-- slide.layers -->
                <div class="slide-layers">

                    <!-- image FX -->
                    <div class="image-layer">

                        <!-- base -->
                        <div class="base fx-layer layer" style="background-image:url(<?php echo $alumni_image_url; ?>);">

                            <!-- ball so hard -->

                        </div>
                        <!-- END base -->

                        <!-- blur -->
                        <div class="blur fx-layer layer" style="background-image:url(<?php echo $alumni_image_url; ?>);">

                            <!-- ball so hard -->

                        </div>
                        <!-- END blur -->

                    </div>
                    <!-- END image FX -->

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
                    <div class="content-layer">

                        <!-- alumni.slider -->
                        <div id="alumni-slider" class="slider layer scroll-trigger" data-section="alumni">

                            <!-- slide.text -->
                            <span class="slide-text">

                                <?php echo $alumni_quote; ?>&rdquo;

                            </span>
                            <!-- END slide.text -->

                            <!-- slide.meta -->
                            <div class="slide-meta">

                                <!-- title -->
                                <div class="title-layer">

                                    alumni spotlight

                                </div>
                                <!-- END title -->

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
                                <a href="<?php echo $alumni_link; ?>" class="slide-button">

                                    <?php echo $alumni_name; ?>'s story

                                </a>
                                <!-- END button -->

                            </div>
                            <!-- END slide.meta -->

                        </div>
                        <!-- END alumni.slider -->

                    </div>
                    <!-- END slider -->

                </div>
                <!-- END slide.layers -->

            </article>
            <!-- END slide -->

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        </section>
        <!-- END alumni.slides -->

    </div>
    <!-- END section.content -->

</div>
<!-- END container -->
