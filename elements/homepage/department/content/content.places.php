<?php

    $places_query = array(

        'post_type' => 'place',
        // 'orderby'   => 'rand',
        'posts_per_page' => 4

    );

    // $places = new WP_Query( $places_query );

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

                $request  = wp_remote_get( 'https://vetmedbiosci.colostate.edu/wp-json/wp/v2/place/?filter[department]=environmental-health-and-radiological-sciences&per_page=4' );
                $data     = wp_remote_retrieve_body( $request );
                $places   = json_decode( $data );

            ?>

            <!-- <pre> -->

                <?php

                    // print_r( $places );

                ?>

            <!-- </pre> -->

            <?php

                foreach( $places as $place ) {

                    $permalink = $place->link;
                    if ( $place->featured_media ) {

                        $thumbnail = $place->featured_media;

                    } else {

                        $thumbnail = 'null';

                    }
                    $placename = $place->title->rendered;

                    // echo $permalink . '<br />' . $placename . '<br />' . $thumbnail . '<br />';

                    $placesdata .= '<article class="article" data-place="' . $permalink . '"><div class="thumb-artwork" style="background-image:url( ' . $thumbnail . ' )"></div><div class="thumb-overlay"></div><header><span class="place-title">' . $placename . '</span><a href=" ' . $permalink . ' " class="place-link">view facility</a></header></article>';

                }

                echo $placesdata;

            ?>

        </section>
        <!-- END news.feed -->

    </div>
    <!-- END feature + sidebar -->

</div>
<!-- END container -->
