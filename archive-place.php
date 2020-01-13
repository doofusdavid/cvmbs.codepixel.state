
<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content places archive" data-off-canvas-content>

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

			<!-- toolbar -->
			<div id="places-toolbar">

				<span>

					filter places

				</span>

			</div>
			<!-- END toolbar -->

			<?php

				while ( have_posts() ) : the_post();

				$place_name  = get_the_title();
				$place_image = get_the_post_thumbnail_url( $post->ID, 'fp-small' );

				$place_link_status = get_field( 'place_link' );

                if ( $place_link_status ) {

                    $place_link_url = get_field( 'place_website' );
                    $place_link     = $place_link_url[ 'url' ];

                } else {

                    $place_link  = get_the_permalink();

                }

			?>

			<!-- card -->
			<a class="place-card" href="<?php echo $place_link; ?>">

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

                        learn more

                    </span>
                    <!-- END link -->

                </header>
                <!-- END header -->

			</a>
			<!-- END card -->

			<?php endwhile; ?>

	    </section>
	    <!-- END content -->

	</div>
	<!-- END container -->

	<?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_footer(); ?>
