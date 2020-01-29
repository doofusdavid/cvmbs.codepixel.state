<?php

    $lab_options = get_field( 'lab_homepage_options' );

    $news_query = array(

        'category_name'  => 'news',
        'posts_per_page' => 3,
        'tax_query'      => array(

            array(

                'taxonomy' => 'post_format',
                'field'    => 'slug',
                'terms'    => array(

                    'post-format-link',
                    'post-format-aside',
                    'post-format-standard'

                )

            )

        )

    );

    $newsies_query = array(

        'category_name'  => 'news',
        'posts_per_page' => 3

    );

    $news_articles = new WP_Query( $newsies_query );

    $news_category = get_cat_ID( 'News' );
    $news_archive  = get_category_link( $news_category );

?>

<!-- container -->
<section id="laboratory-news" class="laboratory-content homepage-section">

    <!-- title -->
    <a class="title-link" href="<?php echo $news_archive; ?>">

        <!-- heading -->
        <h2 class="section-title">

            news and updates

            <!-- label -->
            <span class="link-label">

                view all

            </span>
            <!-- END label -->

        </h2>
        <!-- END heading -->

    </a>
    <!-- END title -->

    <!-- link -->
    <div class="articles">

        <?php while ( $news_articles->have_posts() ) : $news_articles->the_post(); ?>

        <?php

            // get post format
            $post_format = get_post_format();

            // link URL
            if ( $post_format == 'link' ) {

                $post_link   = get_field( 'news_link' );
                $post_format = 'link';

            } elseif ( $post_format == 'gallery' ) {

                $post_link   = get_the_permalink();
                $post_format = 'gallery';

            } else {

                $post_link   = get_the_permalink();
                $post_format = 'standard';

            }

            $post_date  = get_the_date();
            $image_test = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            // set fallback featured image
            if ( $image_test ) {

                $news_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            } else {

                $news_image = get_stylesheet_directory_uri() . '/dist/assets/img/headers/header.00.jpg';

            }

        ?>

        <!-- link -->
        <a href="<?php echo $post_link; ?>" class="article <?php echo $post_format; ?>">

            <!-- artwork -->
            <div class="header lazyload" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/utilities/pixel.gif);" data-src="<?php echo $news_image; ?>">

                <?php echo $feedback; ?>

            </div>
            <!-- END artwork -->

            <!-- article content -->
            <div class="content">

                <span class="date"><?php echo $post_date; ?></span>

                <span class="title"><?php the_title(); ?></span>

                <span class="excerpt"><?php the_excerpt(); ?></span>

            </div>
            <!-- END article content -->

        </a>
        <!-- END link -->

        <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    </div>
    <!-- END stories -->

</section>
<!-- END container -->
