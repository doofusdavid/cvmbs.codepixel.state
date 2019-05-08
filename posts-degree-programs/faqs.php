<?php
/**
 * Template Name: FAQ's
 * Template Post Type: degree_program
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

$block_path = 'elements/blocks/programs/';

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';
?>

<main id="site-layout" class="off-canvas-content" data-off-canvas-content>

	<div class="degree-program-container">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>

			<header class="degree-program-header" <?php echo $header_bg; ?>>
				<div class="degree-program-header__inner">
					<h1 class="degree-program-header__title">
						<?php the_title(); ?>
					</h1><!-- .degree-program-header__title -->
				</div><!-- .degree-program-header__inner -->
			</header><!-- .degree-program-header -->

			<div class="program-blocks">

				<?php
				if ( have_rows('faq_group') ) :
					while ( have_rows('faq_group') ) : the_row();
						if ( get_row_layout('faq_cat') ) :
				?>

				<div class="faq-group program-block">
					<div class="faq-group__inner">

						<h2 class="faq-group__title program-block__title"><?php the_sub_field('cat_name'); ?></h2>


							<?php if ( have_rows('questions') ) : ?>

							<div class="cvmbs-accordions">

								<?php while ( have_rows('questions') ) : the_row(); ?>

								<div class="cvmbs-accordion">
									<h3 class="cvmbs-accordion__title"><?php the_sub_field( 'question' ); ?></h3>

									<div class="cvmbs-accordion__content">
										<?php the_sub_field('answer'); ?>
									</div>
								</div><!-- .cvmbs-accordion -->

								<?php endwhile; ?>

							</div><!-- .cvmbs-accordions -->

							<?php endif; ?>

					</div><!--.faq-group__inner -->
				</div><!-- .faq-group -->

				<?php
						endif;
					endwhile;
				endif;
				?>

			</div><!-- .program-blocks -->

		<?php
			get_template_part( $block_path . 'visit-foco' );

			endwhile;
		endif;
		?>

	</div><!-- .degree-program-container -->

</main><!-- END site.layout -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
