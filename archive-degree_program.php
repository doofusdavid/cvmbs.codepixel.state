<?php get_header(); ?>

<?php

	// the query
	$args = array(

		'post_type'      => 'degree_program',
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
		'posts_per_page' =>  99,
		'tax_query'      =>  array(

			array(
				'taxonomy' => 'degree_type',
				'operator' => 'EXISTS'
			)
		)

	);

	$programs = new WP_Query( $args );

?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<header class="deg-progs-header">
			<div class="deg-progs-header__inner">
				<h1 class="deg-progs-header__title">
					<?php echo esc_attr( get_queried_object()->label ); ?>
				</h1><!-- .deg-progs-header__title -->
			</div><!-- .deg-progs-header__inner -->
		</header><!-- .deg-progs-header -->

		<?php if ( $programs->have_posts() ) : ?>

		<div class="deg-progs-content">
			<div class="deg-progs__grid">

				<?php
				while ( $programs->have_posts() ) : $programs->the_post();
					$card_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'fp-medium' ) . ');"' : '';
					$link = ( get_field('student_org_link') ) ? get_field('student_org_link') : get_permalink();
				?>

				<a class="deg-progs__grid-item" href="<?php echo esc_url( $link ); ?>" <?php echo $card_bg; ?>>
					<span class="deg-progs__grid-item-name">
						<?php
						$ancestors = get_post_ancestors( $post->ID );

						if ( $ancestors[1] ) {
							echo get_post( $ancestors[0] )->post_title . ' &mdash;';
						}
						?>
						<?php the_title(); ?>
					</span>
				</a>

				<?php
				endwhile;

				wp_reset_postdata();
				?>

			</div><!-- .deg-progs__grid -->

		</div><!-- .deg-progs-content -->

		<?php endif; ?>

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_template_part( 'elements/layout/layout.footer' ); ?>

<?php get_footer(); ?>
