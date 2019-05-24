<?php

    // set global blog variable
    global $blog_id;

    // set dynamic blog id
    $currentsite = $blog_id;

    // get site path
    $siteinfo = get_blog_details();

    // parse URL for site path
    $dept_slug = str_replace( '/', '', $siteinfo->path );

    // set department ID for REST API tasks
    if ( $dept_slug == 'bms' ) {

        $department = '53';

    } else if ( $dept_slug == 'cs' ) {

        $department = '54';

    } else if ( $dept_slug == 'erhs' ) {

        $department = '55';

    } else if ( $dept_slug == 'mip' ) {

        $department = '56';

    }

    // setup REST API request
    $requestURL  = wp_remote_get( 'https://vetmedbiosci.colostate.edu/wp-json/wp/v2/place?department=' . $department . '&per_page=4&_embed' );
    $data        = wp_remote_retrieve_body( $requestURL );
    $places      = json_decode( $data );

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
        // switch to main site for query
        switch_to_blog( 1 );

        $args = array(
            'post_type' => 'place',
            'tax_query' => array( array(
                'taxonomy' => 'department',
                'field'    => 'slug',
                'terms'    =>  array( $dept_slug )
            ) )
        );

        $places = new WP_Query( $args );

        if ( $places->have_posts() ) :
            while ( $places->have_posts() ) : $places->the_post();
                $place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
                $lines = ( strlen( get_the_title() ) > 25 ) ? 'multiple-lines' : 'single-line';
                $place_link = ( get_field('place_link') ) ? get_field( 'place_website' )['url'] : get_the_permalink();
        ?>

        <a class="article place-link" href="<?php echo esc_url( $place_link ) ?>">

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
            <header class="header <?php echo $lines; ?>">

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

        </section>
        <!-- END news.feed -->

    </div>
    <!-- END feature + sidebar -->

</div>
<!-- END container -->
