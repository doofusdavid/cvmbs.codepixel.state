<?php

    $billboard_query = array(

        'post_type' => 'billboard',
        // 'orderby'   => 'rand',

    );

    $homepage_billboards = new WP_Query( $billboard_query );

    $site_image = get_field( 'site_background', 'options' );

?>

<!-- fx -->
<div id="billboard-fx" class="ui-fx">

    <!-- layer.base -->
    <div class="layer base" style="background-image:url(<?php echo $site_image; ?>);">

        <!--  -->

    </div>
    <!-- END layer.base -->

    <!-- layer.blur -->
    <div class="layer blur" style="background-image:url(<?php echo $site_image; ?>);">

        <!--  -->

    </div>
    <!-- END layer.blur -->

    <!-- layer.overlay -->
    <div class="layer overlay vertical">

        <!--  -->

    </div>
    <!-- END layer.overlay -->

    <!-- layer.overlay -->
    <div class="layer overlay horizontal">

        <!--  -->

    </div>
    <!-- END layer.overlay -->

</div>
<!-- END fx -->

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
        $subheadline     = get_field( 'subheadline_text' );
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
                <button class="button-link scroll-trigger" data-link="<?php echo $button_link; ?>" data-section="academics">

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
