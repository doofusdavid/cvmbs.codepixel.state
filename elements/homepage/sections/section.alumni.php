<?php

    $args = array(

        'post_type'      => 'alumni-profile',
        'orderby'        => 'rand',
        'posts_per_page' =>  1

    );

    $testimonial = new WP_Query( $args );

?>

<section id="alumni" class="section-testimonial">

    <!-- container -->
    <div class="article-container">

        <?php

        while ( $testimonial->have_posts() ) : $testimonial->the_post();

            $name      = get_field( 'alumni_name' );
            $class     = get_field( 'alumni_class');
            $jobtitle  = get_field( 'alumni_occupation');
            $employer  = get_field( 'alumni_employer');
            $image     = get_field( 'alumni_photo' );
            $image_url = $image[ 'url' ];
            $quote     = get_field( 'alumni_quote' );
            $link      = get_field( 'alumni_profile_link' );

        ?>

        <div id="spotlight-billboard" class="section-content" style="background-image:url(<?php echo $image_url; ?>);">

            <!-- image FX -->
            <div class="image-layer">

                <!-- base -->
                <div class="base fx-layer layer" style="background-image:url(<?php echo $image_url; ?>);">

                    <!-- empty -->

                </div>
                <!-- END base -->

                <!-- blur -->
                <div class="blur fx-layer layer" style="background-image:url(<?php echo $image_url; ?>);">

                    <!-- empty -->

                </div>
                <!-- END blur -->

            </div>
            <!-- END image FX -->

            <!-- visual FX -->
            <div class="design-layer">

                <!-- color + gradient -->
                <div class="color-layer fx-layer layer">

                    <!-- empty -->

                </div>
                <!-- END color + gradient -->

                <!-- pattern -->
                <div class="pattern-layer fx-layer">

                    <!-- empty -->

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

                        <?php echo $quote; ?>&rdquo;

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
                                <?php echo $name; ?>, '<?php echo $class; ?>
                            </strong>
                            <!-- END name -->

                            <!-- title -->
                            <em>
                                <?php echo $jobtitle; ?><br />
                                <?php echo $employer; ?>
                            </em>
                            <!-- END title -->

                        </span>
                        <!-- END slide.quote -->

                        <!-- button -->
                        <a href="<?php echo $link; ?>" class="slide-button">

                            <?php echo $name; ?>'s story

                        </a>
                        <!-- END button -->

                    </div>
                    <!-- END slide.meta -->

                </div>
                <!-- END alumni.slider -->

            </div>
            <!-- END slider -->

            </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    </div>
    <!-- END container -->

</section><!-- #alumni -->
