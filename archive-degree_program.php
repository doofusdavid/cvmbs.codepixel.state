<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

		<header class="deg-progs__header">
			<div class="deg-progs__header-inner">
				<h1 class="deg-progs__header-title">
					<?php _e( get_queried_object()->label, 'csu-career-center' ); ?>
				</h1><!-- .deg-progs__header-title -->
			</div><!-- .deg-progs__header-inner -->
		</header><!-- .deg-progs__header -->

		<div class="deg-progs__grid">
			<div class="deg-progs__grid-inner">

			<?php
			while ( have_posts() ) : the_post();
				$card_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'fp-medium' ) . ');"' : '';
				$link = ( get_field('student_org_link') ) ? get_field('student_org_link') : get_permalink();
			?>

				<a class="deg-progs__grid-item" href="<?php echo esc_url( $link ); ?>" <?php echo $card_bg; ?>>
					<span class="deg-progs__grid-item-name">
						<?php
						$ancestors = get_post_ancestors( $post->ID );

						if ( $ancestors[1] ) {
							echo get_post( $ancestors[0] )->post_title . ':';
						}
						?>
						<?php the_title(); ?>
					</span>
				</a>

			<?php endwhile; ?>

			</div><!-- .deg-progs__grid-inner -->
		</div><!-- .deg-progs__grid -->

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
