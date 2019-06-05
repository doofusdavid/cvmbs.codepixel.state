<?php

    $posts = get_field( 'site_homepage_places', 'options' );

?>

<section id="facilities" class="section-places">

    <!-- container -->
    <div class="article-container section-places__inner">

        <!-- title -->
        <a href="/places" data-section="facilities">

            <!-- heading -->
            <h2 class="section-places__heading">

                <?php _e( 'Centers and Institutes', 'cvmbsPress' ); ?>

                <!-- link -->
                <span class="title-link">

                    <?php _e( 'View All', 'cvmbsPress' ); ?>

                </span>
                <!-- END link -->

            </h2>
            <!-- END heading -->

        </a>
        <!-- END title -->

        <!-- news.feed -->
        <div id="facilities-carousel" class="places__grid article-cards ui-news">

            <?php
            foreach( $posts as $post ) : // variable must be called $post (IMPORTANT)
                setup_postdata( $post );

                $place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
                $placelink = ( get_field('place_link') ) ? get_field( 'place_website' )['url'] : get_the_permalink();
            ?>

            <!-- post -->
            <a class="article places__grid-item" href="<?php echo $placelink; ?>">

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
                <header class="header">

                    <!-- title -->
                    <h4 class="place-title">

                        <?php the_title(); ?>

                    </h4>
                    <!-- END title -->

                    <!-- link -->
                    <span class="place-link">learn more</span>
                    <!-- END link -->

                </header>
                <!-- END header -->

            </a>
            <!-- END post -->

            <?php
                wp_reset_postdata();
            endforeach;
            ?>

        </div>
        <!-- END news.feed -->

    </div>
    <!-- END container -->

</section><!-- #facilities -->
