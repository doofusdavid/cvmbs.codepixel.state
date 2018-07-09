<?php

    $billboard_query = array(

        'post_type' => 'billboard',
        'orderby'   => 'rand',

    );

    $homepage_billboards = new WP_Query( $billboard_query );

?>

<!-- headline -->
<span id="billboard-tagline">

    care for your world

</span>
<!-- END headline -->

<!-- billboard.slides -->
<section id="billboard-slides" class="ui-slides" data-section="slides" tabindex="-1">

    <?php

        while ( $homepage_billboards->have_posts() ) : $homepage_billboards->the_post();

        $slide_name      = $post->post_name;
        $slide_image     = get_field( 'billboard_image' );
        $slide_image_url = $slide_image[ 'url' ];
        $headline        = get_field( 'headline_text' );
        $description     = get_field( 'description_text' );
        $button_link     = get_field( 'button_link' );
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

                <!-- pattern -->
                <div class="slide-pattern vertical layer">

                    <!--  -->

                </div>
                <!-- END pattern -->

                <!-- pattern -->
                <div class="slide-pattern horizontal layer">

                    <!--  -->

                </div>
                <!-- END pattern -->

            </div>
            <!-- END slide.billboard -->

            <!-- slide.content -->
            <div class="slide-content">

                <!-- headline -->
                <span class="line headline">

                    <?php echo $headline; ?>

                </span>
                <!-- END headline -->

                <!-- description -->
                <span class="line subheadline">

                    <?php echo $description; ?>

                </span>
                <!-- END description -->

                <!-- headline -->
                <button class="button-link" data-link="<?php echo $button_link; ?>">

                    <?php echo $button_text; ?>

                </span>
                <!-- END headline -->

            </div>
            <!-- END slide.content -->

        </div>
        <!-- END container -->

    </article>
    <!-- END slide -->

    <?php endwhile; ?>

</section>
<!-- END billboard.slides -->

<?php get_template_part( 'elements/homepage/ui/scroll' ); ?>
