<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content default" data-off-canvas-content style="background-image:url(<?php echo $place_image; ?>);">

	<!-- content container -->
	<div class="content-container">

		<?php while ( have_posts() ) : the_post(); ?>

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

	</div>
	<!-- END content container -->

	<?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_footer(); ?>
