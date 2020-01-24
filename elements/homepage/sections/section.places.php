<?php

    $homepage_options = get_field( 'college_homepage_options' );
    $posts            = $homepage_options[ 'featured_places' ];

?>

<section id="facilities" class="section-places">

    <!-- background.image -->
    <div class="section-image lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/billboard.10.jpg">
        <!-- empty -->
    </div>
    <!-- END background.image -->

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

            <pre class="developer" style="z-index:1000;">

                <?php

                    print_r( $homepage_options );

                ?>

            </pre>

            <?php

                foreach( $posts as $post ) : // variable must be called $post (IMPORTANT)

                    setup_postdata( $post );

                    $place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
                    $placelink = ( get_field('place_link') ) ? get_field( 'place_website' )['url'] : get_the_permalink();

            ?>

            <!-- post -->
            <a class="article places__grid-item" href="<?php echo $placelink; ?>">

                <!-- artwork -->
                <div class="thumb-artwork lazyload" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif);" data-src="<?php echo $place_image; ?>">

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
                    <h3 class="place-title">

                        <?php the_title(); ?>

                    </h3>
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
