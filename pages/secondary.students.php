<?php
/**
 * Template Name: Students
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part( 'template-parts/block', 'secondary-page-header' ); ?>

				<?php get_template_part( 'template-parts/block', 'fast-facts' ); ?>

				<?php get_template_part( 'template-parts/block', 'launch-pads' ); ?>

				<?php get_template_part( 'template-parts/block', 'highlight-group' ); ?>

				<?php get_template_part( 'template-parts/block', 'single-cta' ); ?>

				<?php get_template_part( 'template-parts/block', 'content-with-side-image' ); ?>

				<?php get_template_part( 'template-parts/block', 'junk-drawer' ); ?>

			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
