
<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary places archive" data-off-canvas-content>

	<!-- container -->
	<div class="content-container places">

		<!-- overlay -->
        <div class="places-overlay">

            <!--  -->

        </div>
        <!-- END overlay -->

	    <!-- content -->
	    <section class="places-content">

			<!-- title -->
	        <h2 class="page-title">

				centers + institutes

			</h2>
	        <!-- END title -->

			<?php

				while ( have_posts() ) : the_post();

				$place_name  = get_the_title();
                $place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
                $place_link  = get_the_permalink();

			?>

			<!-- card -->
			<a class="place-card" href="<?php the_permalink(); ?>">

				<!-- artwork -->
                <div class="thumb-artwork" style="background-image:url(<?php echo $place_image; ?>)">

                    <!-- the emptiness -->

                </div>
                <!-- END artwork -->

                <!-- overlay -->
                <div class="thumb-overlay">

                    <!-- the emptiness -->

                </div>
                <!-- END overlay -->

				<!-- header -->
                <header>

                    <!-- title -->
                    <span class="place-title">

                        <?php echo $place_name; ?>

                    </span>
                    <!-- END title -->

					<!-- link -->
                    <span class="place-link">

                        view facility

                    </span>
                    <!-- END link -->

                </header>
                <!-- END header -->

			</a>
			<!-- END card -->

			<?php endwhile; ?>

	    </section>
	    <!-- END content -->

        <?php get_template_part( 'elements/layout/layout.footer' ); ?>

	</div>
	<!-- END container -->

</main>
<!-- site.layout -->

<?php get_footer(); ?>
