<?php

    // $places = get_field( 'site_homepage_places', 'options' );
    $post_objects = get_field( 'site_homepage_places', 'options' );

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

            <?php foreach( $post_objects as $post ) : ?>

            <?php setup_postdata( $post ); ?>

            <?php

                $placelink_status = get_field( 'place_link' );

                $placename = get_the_title();
                $place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

                if ( $placelink_status ) {

                    $place_link_url = get_field( 'place_website' );
                    $placelink      = $place_link_url[ 'url' ];

                } else {

                    $placelink  = get_the_permalink();

                }

            ?>

            <!-- post -->
            <a href="<?php echo $placelink; ?>" class="article">

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

                        <?php

                            echo $placename;

                        ?>

                    </span>
                    <!-- END title -->

                    <!-- link -->
                    <span class="place-link">

                        learn more

                    </span>
                    <!-- END link -->

                </header>
                <!-- END header -->

            </a>
            <!-- END post -->

            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>

        </section>
        <!-- END news.feed -->

    </div>
    <!-- END feature + sidebar -->

</div>
<!-- END container -->
