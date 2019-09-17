<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content default" data-off-canvas-content style="background-image:url(<?php echo $place_image; ?>);">

	<!-- content container -->
	<div class="content-container">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="post-header">

				<h1 class="entry-title">

					<?php the_title(); ?>

				</h1>

			</div>

			<div class="post-content">

				<?php the_content(); ?>

			</div>

		</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; ?>

		<?php get_template_part( 'elements/layout/layout.footer' ); ?>

	</div>
	<!-- END content container -->

</main>
<!-- site.layout -->

<?php get_footer(); ?>
