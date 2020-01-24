<?php
get_header();

$taxonomy = 'department';

$args = array(
	'taxonomy' => $taxonomy
);

$departments = get_terms( $args );
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

		<header class="places-archive__header">
			<div class="places-archive__header-inner">
				<h1 class="places-archive__header-title">
					<?php _e( 'centers + institutes', 'cvmbsPress' ); ?>
				</h1><!-- .places-archive__header-title -->
			</div><!-- .places-archive__header-inner -->
		</header><!-- .places-archive__header -->

		<div class="places-archive__filters">
			<p class="places-archive__filters-text">filter places</p>

			<div class="places-prse__option">
				<button class="places-prse__toggle" type="button" id="prse-toggle" aria-pressed="false" aria-label="Program of Research and Scholarly Excellence"><span class="places-prse__toggle-button" aria-hidden></span> PRSE</button>
			</div><!-- .places-prse__option -->

			<?php if ( ! is_wp_error( $departments ) ) : ?>
				<div class="places-dept__options">
					<button class="places-dept__option" type="button" aria-pressed="true">All Departments</button>

					<?php
					foreach ( $departments as $dept ) :
						$slug = $dept->slug;
						$name = $dept->name;
					?>
						<button class="places-dept__option" type="button" aria-pressed="false"><?php echo $name; ?></button>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div><!-- .places-archive__filters -->

		<div class="places-archive__grid">
			<div class="places-archive__grid-inner">
			<?php
			while ( have_posts() ) : the_post();
				$card_bg = 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'fp-small' ) . ');"';
				$link = ( get_field('place_link') ) ? get_field('place_website')['url'] : get_permalink();
				$prse = get_post_meta( $post->ID, '_cvmbs_place_prse', true );
				$dept_array = [];
				if ( $departments = get_the_terms( $post, 'department' ) ) {
					foreach ( $departments as $dept ) {
						$dept_array[] = $dept->slug;
					}
				}
				$dept_string = implode( ' ', $dept_array );
			?>

				<a class="places-archive__grid-item" href="<?php echo esc_url( $link ); ?>" data-dept="<?php echo $dept_string; ?>" <?php if ( $prse ) { echo 'data-prse="true"'; } ?>>
					<span class="places-archive__grid-item-bg" <?php echo $card_bg; ?> aria-hidden></span>
					<span class="places-archive__grid-item-overlay" aria-hidden></span>
					<div class="places-archive__grid-item-text">
						<span class="places-archive__grid-item-title">
							<?php if ( $prse ) { echo '<u><strong>PRSE</strong></u>'; } ?>
							<?php the_title(); ?>
						</span>
						<span class="places-archive__grid-item-link" aria-hidden><?php _e( 'learn more', 'cvmbsPress' ); ?></span>
					</div>
				</a>

			<?php endwhile; ?>
			</div><!-- .places-archive__grid-inner -->
		</div><!-- .places-archive__grid -->

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
