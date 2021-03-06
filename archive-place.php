<?php

	$taxonomy = 'department';

	$args = array(

		'taxonomy' => $taxonomy

	);

	$departments = get_terms( $args );

	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<?php get_header(); ?>

<!-- primary -->
<div id="primary" class="content-area">

	<!-- main -->
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

		<!-- header -->
		<header class="places__header">

			<div class="places__header-inner">

				<h1 class="places__header-title">

					<?php _e( 'centers + institutes', 'cvmbsPress' ); ?>

				</h1><!-- .places__header-title -->

			</div><!-- .places__header-inner -->

		</header>
		<!-- END header -->

		<div class="places-archive__filters">

			<h2 class="places-archive__filters-text"><?php _e( 'Filter Centers + Institutes', 'cvmbsPress' ); ?></h2>

			<div class="places-archive__filters-wrap">

				<div class="places-prse__option">

					<button class="places-prse__toggle filter_control" type="button" data-filter=".cvmbs--prse" aria-pressed="false" aria-label="Programs of Research and Scholarly Excellence"><?php _e( 'Programs of Research and Scholarly Excellence (PRSE)', 'cvmbsPress' ); ?></button>

				</div><!-- .places-prse__option -->

				<!-- <h3 class="places-archive__filters-text"><?php // _e( 'Filter by Department', 'cvmbsPress' ); ?></h3> -->

				<div class="places-dept__options">

					<button class="places-dept__option filter_control" type="button" data-filter="" aria-pressed="true">

						<?php _e( 'All Departments', 'cvmbsPress' ); ?>

					</button>

					<?php foreach ( $departments as $dept ) :

						$slug = $dept->slug;
						$name = $dept->name; ?>

						<button class="places-dept__option filter_control" type="button" data-filter=".cvmbs-dept__<?php echo $slug; ?>" aria-pressed="false"><?php echo $name; ?></button>

					<?php endforeach; ?>

				</div><!-- .places-dept__options -->

			</div><!-- .places-archive__filters-wrap -->

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
						$dept_array[] = 'cvmbs-dept__' . $dept->slug;
					}
				}
				$dept_string = implode( ' ', $dept_array );
			?>

				<a class="places-archive__grid-item <?php if ( $prse ) { echo 'cvmbs--prse'; } ?> <?php echo $dept_string; ?>" href="<?php echo esc_url( $link ); ?>">
					<span class="places-archive__grid-item-bg" <?php echo $card_bg; ?> aria-hidden></span>
					<span class="places-archive__grid-item-overlay" aria-hidden></span>
					<?php if ( $prse ) : ?>

					<span class="places-archive__grid-item-prse">PRSE</span>

					<?php endif; ?>

					<div class="places-archive__grid-item-text">
						<span class="places-archive__grid-item-title">
							<?php the_title(); ?>
						</span>
						<span class="places-archive__grid-item-link" aria-hidden><?php _e( 'learn more', 'cvmbsPress' ); ?></span>
					</div>
				</a>

			<?php endwhile; ?>
			</div><!-- .places-archive__grid-inner -->
		</div><!-- .places-archive__grid -->

		<?php endif; ?>

	</main>
	<!-- END main -->

</div>
<!-- END primary -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
