<?php

    $places_query = array(

        'post_type' => 'place',
        'orderby'   => 'rand',

    );

    $places = new WP_Query( $places_query );

?>

<!-- container -->
<div class="article-container">

    <!-- background.color -->
    <div class="section-base">

        <!-- empty -->

    </div>
    <!-- END background.color -->

    <!-- background.image -->
    <div class="section-image scroll-trigger" data-section="facilities">

        <!-- empty -->

    </div>
    <!-- END background.image -->

    <!-- title -->
    <a href="/places" class="section-title" data-section="facilities">

        centers + institutes

        <!-- link -->
        <span class="title-link">

            view all

        </span>
        <!-- END link -->

    </a>
    <!-- END title -->

    <!-- feature + sidebar -->
    <div id="facilities-content">

        <!-- news.feed -->
        <section id="facilities-carousel" class="article-cards ui-news">

            <?php

                while ( $places->have_posts() ) : $places->the_post();

                $place_name  = get_the_title();
                $place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
                $place_link  = get_the_permalink();

            ?>

            <!-- post -->
            <article class="article" data-place="<?php the_permalink(); ?>">

                <!-- artwork -->
                <div class="thumb-artwork" style="background-image:url(<?php echo $place_image; ?>)">

                    <!-- the emptiness -->

                </div>
                <!-- END artwork -->

                <!-- overlay -->
                <div class="thumb-overlay">

                    <!-- the emptiness -->

                </div>
                <!-- END overlay -->

                <!-- header -->
                <header>

                    <!-- title -->
                    <span class="place-title">

                        <?php echo $place_name; ?>

                    </span>
                    <!-- END title -->

                    <!-- link -->
                    <a href="<?php the_permalink(); ?>" class="place-link">

                        view facility

                    </a>
                    <!-- END link -->

                </header>
                <!-- END header -->

            </article>
            <!-- END post -->

            <?php endwhile; ?>

        </section>
        <!-- END news.feed -->

    </div>
    <!-- END feature + sidebar -->

</div>
<!-- END container -->
