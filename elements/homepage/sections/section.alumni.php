<?php

    $alumni_profiles_query = array(

        'post_type' => 'alumni-profile',
        'orderby'   => 'rand',

    );

    $alumni_profiles = new WP_Query( $alumni_profiles_query );

?>

<!-- container -->
<div class="article-container">

    <!-- background.image -->
    <div class="section-image" data-load="pending" data-background="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/billboard.12.jpg">

        <!-- empty -->

    </div>
    <!-- END background.image -->

    <!-- background.color -->
    <div class="section-base">

        <!-- empty -->

    </div>
    <!-- END background.color -->

    <!-- section.content -->
    <div id="spotlight-billboard" class="section-content" data-load="pending" data-background="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/sections/alumni/alumni.spotlight.03.jpg">

        <!-- alumni.slides -->
        <section id="alumni-slides" class="ui-slides" data-section="slides" tabindex="-1">

            <?php

                while ( $alumni_profiles->have_posts() ) : $alumni_profiles->the_post();

                $alumni_name      = get_field( 'alumni_name' );
                $alumni_image     = get_field( 'alumni_photo' );
                $alumni_image_url = $alumni_image[ 'url' ];

            ?>

            <!-- slide -->
            <article id="{{ id }}-slide" class="ui-slide-article" data-slide="{{ id }}" data-index="{{ index }}" data-theme="{{ theme }}" data-load="false" data-background="<?php echo $slide_image_url; ?>">

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
                        <div id="alumni-slider" class="slider layer">

                            <!-- slide.text -->
                            <span class="slide-text">

                                {{ quote }}

                            </span>
                            <!-- END slide.text -->

                            <!-- slide.quote -->
                            <span class="slide-citation">

                                <!-- name -->
                                <strong>
                                    <?php echo $alumni_name; ?>, '{{ class }}
                                </strong>
                                <!-- END name -->

                                <!-- title -->
                                <em>
                                    {{ occupation }}<br />
                                    {{ company }}
                                </em>
                                <!-- END title -->

                            </span>
                            <!-- END slide.quote -->

                        </div>
                        <!-- END alumni.slider -->

                        <!-- slide.meta -->
                        <div class="slide-meta layer">

                            <!-- button -->
                            <button class="slide-button">

                                read {{ alumni }}'s story

                            </button>
                            <!-- END button -->

                        </div>
                        <!-- END slide.meta -->

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
