<?php

    $billboard_query = array(

        'post_type' => 'billboard',
        // 'orderby'   => 'rand',

    );

    $homepage_billboards = new WP_Query( $billboard_query );

    $site_image = get_field( 'site_background', 'options' );

?>

<!-- billboard.slides -->
<section id="billboard-slides" class="ui-slides" data-section="slides" tabindex="-1">

    <?php

        while ( $homepage_billboards->have_posts() ) : $homepage_billboards->the_post();

        $slide_name      = $post->post_name;
        $slide_image     = get_field( 'billboard_image' );
        $slide_image_url = $slide_image[ 'url' ];
        $subheadline     = get_field( 'subheadline_text' );
        $headline        = get_field( 'headline_text' );
        $description     = get_field( 'description_text' );
        $button_link     = get_field( 'button_url' );
        $button_text     = get_field( 'button_text' );

    ?>

    <!-- slide -->
    <article class="ui-slide-article" data-slide="marketing" data-index="1" data-theme="academics" data-load="false">

        <!-- container -->
        <div class="slide-container">

            <!-- slide.billboard -->
            <div class="slide-artwork">

                <!-- billboard -->
                <div class="slide-billboard" data-background="<?php echo $slide_image_url; ?>">

                    <!--  -->

                </div>
                <!-- END billboard -->

                <!-- color.dark -->
                <div class="slide-color dark layer">

                    <!--  -->

                </div>
                <!-- END color.dark -->

                <!-- color.lite -->
                <div class="slide-color lite layer">

                    <!--  -->

                </div>
                <!-- END color.lite -->

            </div>
            <!-- END slide.billboard -->

            <!-- slide.content.container -->
            <div class="slide-content-container">

                <!-- slide.content -->
                <div class="slide-content">

                    <!-- subheadline -->
                    <span class="line subheadline">

                        <?php echo $subheadline; ?>

                    </span>
                    <!-- END subheadline -->

                    <!-- headline -->
                    <span class="line headline">

                        <?php echo $headline; ?>

                    </span>
                    <!-- END headline -->

                    <!-- description -->
                    <span class="line description">

                        <?php echo $description; ?>

                    </span>
                    <!-- END description -->

                    <!-- headline -->
                    <a href="<?php echo $button_link; ?>" class="button-link">

                        <?php echo $button_text; ?>

                    </a>
                    <!-- END headline -->

                </div>
                <!-- END slide.content -->

            </div>
            <!-- END slide.content.container -->

        </div>
        <!-- END container -->

    </article>
    <!-- END slide -->

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

</section>
<!-- END billboard.slides -->
