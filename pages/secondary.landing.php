<?php
/**
 * Template Name: Secondary Landing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php
				get_template_part( 'template-parts/block', 'secondary-page-header' );

				if ( have_rows('page_blocks') ) :

					while ( have_rows('page_blocks') ) : the_row();

						if ( get_row_layout() == 'call_out' ) :

							get_template_part( 'template-parts/block', 'call-out' );

						elseif ( get_row_layout() == 'content_area_with_image') :

							get_template_part( 'template-parts/block', 'content-area-with-image' );

						elseif ( get_row_layout() == 'dual_ctas' ) :

							get_template_part( 'template-parts/block', 'dual-ctas' );

						elseif ( get_row_layout() == 'fast_facts' ) :

							get_template_part( 'template-parts/block', 'fast-facts' );

						elseif ( get_row_layout() == 'group_bios' ) :

							get_template_part( 'template-parts/block', 'group-bios' );

						elseif ( get_row_layout() == 'highlight_group' ) :

							get_template_part( 'template-parts/block', 'highlight-group' );

						elseif ( get_row_layout() == 'junk_drawer' ) :

							get_template_part( 'template-parts/block', 'junk-drawer' );

						elseif ( get_row_layout() == 'launch_pads' ) :

							get_template_part( 'template-parts/block', 'launch-pads' );

						elseif ( get_row_layout() == 'page_quote' ) :

							get_template_part( 'template-parts/block', 'page-quote' );

						elseif ( get_row_layout() == 'single_cta' ) :

							get_template_part( 'template-parts/block', 'single-cta' );

						elseif ( get_row_layout() == 'source_stories' ) :

							get_template_part( 'template-parts/block', 'source-stories' );

						elseif ( get_row_layout() == 'spotlight' ) :

							get_template_part( 'template-parts/block', 'spotlight' );

						else:

							// no blocks found

						endif;

					endwhile;

				endif;
				?>

			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
