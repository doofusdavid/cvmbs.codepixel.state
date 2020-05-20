<?php

    // setup REST API request
    $requestURL  = wp_remote_get( 'https://cvmbs.source.colostate.edu/wp-json/wp/v2/posts/?&per_page=3' );
    $data        = wp_remote_retrieve_body( $requestURL );
    $articles    = json_decode( $data );
    $tagURL      = get_sub_field( 'source_tag' ); ?>

<?php

    // number of posts
    $args = array(

        'per_page' => 3

    );

    // append tag to json request
    if ( $tag = get_sub_field( 'source_tag' ) ) {

        $args[ 'filter[tag]' ] = $tag;

    }

    // set request variables
    $response = wp_remote_get(

        add_query_arg(

            $args, 'https://cvmbs.source.colostate.edu/wp-json/wp/v2/posts'

        )

    );

    // get response
    if ( ! is_wp_error( $response ) && $response[ 'response' ][ 'code' ] == 200 ) :

        // check if posts
        if ( ! empty( $posts = json_decode( $response[ 'body' ] ) ) ) :

?>

<!-- news -->
<section class="homepage-section news">

    <!-- pattern -->
    <div class="pattern-overlay">

        <!--  -->

    </div>
    <!-- END pattern -->

    <!-- title -->
    <a href="https://cvmbs.source.colostate.edu/tag/<?php echo $tagURL; ?>">

        <!-- heading -->
        <h3 class="section-title">

            news and updates

            <!-- label -->
            <span class="title-link">

                view all

            </span>
            <!-- END label -->

        </h3>
        <!-- END heading -->

    </a>
    <!-- END title -->

    <!-- source-feed -->
    <div id="source-feed" class="source-feed">

        <?php foreach ( $posts as $post ) : ?>

        <a href="<?php echo $post->link; ?>" class="article card">

            <div class="header lazyload" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif');" data-src="<?php echo $post->featured_image->source_url; ?>"></div>

            <div class="content">

                <h4 class="title">

                    <?php echo $post->title->rendered; ?>

                </h4>

                <?php echo $post->excerpt->rendered; ?>

            </div>

        </a>

        <?php endforeach; ?>

    </div>
    <!-- END source-feed -->

</section>
<!-- END news -->

<?php endif; ?>

<?php endif; ?>
