<?php

    // get site path
    $siteinfo = get_blog_details();

    // parse URL for site path
    $siteurl = str_replace( '/', '', $siteinfo->path );

    // set department ID for REST API tasks
    if ( $siteurl == 'bms' ) {

        $department = '53';

    } else if ( $siteurl == 'cs' ) {

        $department = '54';

    } else if ( $siteurl == 'erhs' ) {

        $department = '55';

    } else if ( $siteurl == 'mip' ) {

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

                foreach( $places as $place ) {

                    $permalink = $place->link;

                    if ( $place->featured_media ) {

                        $thumbnail = $place->featured_media;

                    } else {

                        $thumbnail = 'null';

                    }

                    $placename = $place->title->rendered;

                    if ( strlen( $placename ) > 40 ) {

                        $lines = 'multiple-lines';

                    } else {

                        $lines = 'single-line';

                    }

                    // echo $permalink . '<br />' . $placename . '<br />' . $thumbnail . '<br />';

                    $placesdata .= '<article class="article" data-place="' . $permalink . '"><div class="thumb-artwork" style="background-image:url( ' . $thumbnail . ' )"></div><div class="thumb-overlay"></div><header><span class="place-title ' . $lines . '">' . $placename . '</span><a href=" ' . $permalink . ' " class="place-link">learn more</a></header></article>';

                }

                echo $placesdata;

            ?>

        </section>
        <!-- END news.feed -->

    </div>
    <!-- END feature + sidebar -->

</div>
<!-- END container -->
