<?php

// get site path
$siteinfo = get_blog_details();

// parse URL for site path
$siteurl = str_replace( '/', '', $siteinfo->path );

// set department ID for REST API tasks
if ( $siteurl == 'bms' ) {

    $department = 'biomedical-sciences';

} else if ( $siteurl == 'cs' ) {

    $department = 'clinical-sciences';

} else if ( $siteurl == 'erhs' ) {

    $department = 'environmental-and-radiological-health-sciences';

} else if ( $siteurl == 'mip' ) {

    $department = 'microbiology-immunology-and-pathology';

}

// setup REST API request
$requestURL  = wp_remote_get( 'https://cvmbs.source.colostate.edu/wp-json/wp/v2/posts/?filter[tag]=' . $department . '&per_page=3' );
$data        = wp_remote_retrieve_body( $requestURL );
$articles    = json_decode( $data );
$sourceURL   = 'https://cvmbs.source.colostate.edu/tag/' . $department;

?>

<!-- container -->
<div class="article-container" tabindex="-1">

    <!-- title -->
    <a href="<?php echo $sourceURL; ?>" class="section-title scroll-trigger" data-section="news">

        news and updates

        <!-- link -->
        <span class="title-link">

            view all

        </span>
        <!-- END link -->

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
