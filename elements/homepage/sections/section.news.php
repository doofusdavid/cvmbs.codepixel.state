<?php

// setup REST API request
$requestURL  = wp_remote_get( 'https://cvmbs.source.colostate.edu/wp-json/wp/v2/posts/?&per_page=3' );
$data        = wp_remote_retrieve_body( $requestURL );
$articles    = json_decode( $data );

?>

<section id="news">

    <!-- container -->
    <div class="article-container" tabindex="-1">

        <!-- title -->
        <a href="https://cvmbs.source.colostate.edu/" data-section="news">

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

        <!-- feature + sidebar -->
        <div id="main-source-content">

            <!-- news.feed -->
            <section id="source-feed" class="article-cards ui-news">

                <?php

                foreach( $articles as $article ) {

                    $permalink = $article->link;
                    $thumbnail = $article->featured_image->source_url;
                    $title     = $article->title->rendered;
                    $excerpt   = $article->excerpt->rendered;

                    $content .= '

                        <a href="' . $permalink . '" class="article card" data-url="' . $permalink . '">

                            <header class="header">

                                <span class="image" style="background-image:url( ' . $thumbnail . ' )"></span>

                            </header>

                            <section class="content">

                                <h4 class="title">' . $title . '</h4>

                                ' . $excerpt . '

                            </section>

                        </a>

                    ';

                }

                echo $content;

                ?>

            </section>
            <!-- END news.feed -->

        </div>
        <!-- END feature + sidebar -->

    </div>
    <!-- END container -->

</section><!-- #news -->
