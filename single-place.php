<?php get_header(); ?>

<?php

	$place_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content places default" data-off-canvas-content style="background-image:url(<?php echo $place_image; ?>);">

	<!-- content container -->
	<div class="content-container places">

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<!-- overlay -->
        <div class="places-overlay">

            <!--  -->

        </div>
        <!-- END overlay -->

		<!-- content -->
	    <section class="places-content">

			<!-- title -->
			<h2 class="page-title">

				<?php the_title(); ?>

			</h2>
			<!-- END title -->

			<?php
			if ( get_field( 'place_description') ) {
				the_field( 'place_description');
			}
			?>

		</section>
	    <!-- END content -->

		<?php endwhile; ?>

		<?php endif; ?>

		<?php get_template_part( 'elements/layout/layout.footer' ); ?>

	</div>
	<!-- END content container -->

</main>
<!-- site.layout -->

<?php get_footer(); ?>
