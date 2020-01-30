<?php
get_header();

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="places__header" <?php echo $header_bg; ?>>
				<div class="places__header-inner">
					<h1 class="places__header-title">
						<?php the_title(); ?>
					</h1><!-- .places__header-title -->
				</div><!-- .places__header-inner -->
			</header><!-- .places__header -->

			<div class="single-place__content">
				<div class="single-place__content-inner">
					<?php
						if ( get_field( 'place_description') ) {
							the_field( 'place_description');
						}
					?>
				</div><!-- .single-place__content-inner -->
			</div><!-- .single-place__content -->

		</article><!-- #post-<?php the_ID(); ?> -->

	<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
