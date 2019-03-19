<?php
/**
 * Template Name: Flexible Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

$block_path = 'elements/blocks/flexible/';
$title_width = get_field('page_title_width') ? '--full' : '--fixed';
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="template-block">
				<div class="template-block__inner<?php echo $title_width; ?>">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div><!--. template-block__inner<?php echo $title_width; ?> -->
			</div><!--. template-block -->

			<?php
			get_template_part( $block_path . 'page-header' );

			if ( have_rows('page_blocks') ) :

				while ( have_rows('page_blocks') ) : the_row();

					if ( get_row_layout() == 'text_editor' ) :

						get_template_part( $block_path . 'text-editor' );

					elseif ( get_row_layout() == 'contact_group' ) :

						get_template_part( $block_path . 'contact-group' );

					elseif ( get_row_layout() == 'content_area_with_image') :

						get_template_part( $block_path . 'floated-image' );

			// 		elseif ( get_row_layout() == 'dual_ctas' ) :

			// 			get_template_part( $block_path . 'dual-ctas' );

			// 		elseif ( get_row_layout() == 'fast_facts' ) :

			// 			get_template_part( $block_path . 'fast-facts' );

			// 		elseif ( get_row_layout() == 'group_bios' ) :

			// 			get_template_part( $block_path . 'group-bios' );

			// 		elseif ( get_row_layout() == 'highlight_group' ) :

			// 			get_template_part( $block_path . 'highlight-group' );

			// 		elseif ( get_row_layout() == 'junk_drawer' ) :

			// 			get_template_part( $block_path . 'junk-drawer' );

			// 		elseif ( get_row_layout() == 'launch_pads' ) :

			// 			get_template_part( $block_path . 'launch-pads' );

					elseif ( get_row_layout() == 'quotation' ) :

						get_template_part( $block_path . 'quotation' );

			// 		elseif ( get_row_layout() == 'single_cta' ) :

			// 			get_template_part( $block_path . 'single-cta' );

			// 		elseif ( get_row_layout() == 'source_stories' ) :

			// 			get_template_part( $block_path . 'source-stories' );

			// 		elseif ( get_row_layout() == 'spotlight' ) :

			// 			get_template_part( $block_path . 'spotlight' );

					else:

						// no blocks found

					endif;

				endwhile;

			endif;
			?>

		</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
