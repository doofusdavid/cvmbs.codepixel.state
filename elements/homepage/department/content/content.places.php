<?php

    // set global blog variable
    global $blog_id;

    // set dynamic blog id
    $currentsite = $blog_id;

    // get site path
    $siteinfo = get_blog_details();

    // parse URL for site path
    $dept_slug = str_replace( '/', '', $siteinfo->path );

?>

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
        // switch to main site for query
        switch_to_blog( 1 );

        $args = array(
            'post_type'      => 'place',
            'posts_per_page' =>  4,
            'tax_query'      => array( array(
                'taxonomy' => 'department',
                'field'    => 'slug',
                'terms'    =>  array( $dept_slug )
            ) )
        );

        $places = new WP_Query( $args );

        if ( $places->have_posts() ) :
            while ( $places->have_posts() ) : $places->the_post();
                $place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
                $place_link = ( get_field('place_link') ) ? get_field( 'place_website' )['url'] : get_the_permalink();
        ?>

        <a class="article places__grid-item" href="<?php echo esc_url( $place_link ) ?>">

            <!-- artwork -->
            <div class="thumb-artwork" style="background-image:url(<?php echo esc_url( $place_image ); ?>)">
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
                <span class="place-title">
                    <?php the_title(); ?>
                </span>
                <!-- END title -->

                <!-- link -->
                <span class="place-link">learn more</span>
                <!-- END link -->

            </header>
            <!-- END header -->
        </a><!-- .place-link -->

        <?php
            endwhile; wp_reset_postdata();
        endif;

        // return to getting data from current site
        switch_to_blog( $currentsite );
        ?>

    </div>
    <!-- END news.feed -->

</div>
<!-- END container -->
