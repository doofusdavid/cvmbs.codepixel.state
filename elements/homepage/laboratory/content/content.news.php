<?php

    $lab_options = get_field( 'lab_homepage_options' );

    $news_query = array(

        'category_name'  => 'news',
        'posts_per_page' => 3

    );

    $news_articles = new WP_Query( $news_query );

?>

<!-- container -->
<section id="laboratory-news" class="laboratory-content homepage-section">

    <!-- section title -->
    <h2>

        news + updates

    </h2>
    <!-- END section title -->

    <!-- link -->
    <div class="articles">

        <?php while ( $news_articles->have_posts() ) : $news_articles->the_post(); ?>

        <?php

            $post_date  = get_the_date();
            $image_test = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            if ( $image_test ) {

                $news_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            } else {

                $news_image = get_stylesheet_directory_uri() . '/dist/assets/img/headers/header.00.jpg';

            }

        ?>

        <!-- link -->
        <a href="<?php the_permalink(); ?>" class="article">

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
