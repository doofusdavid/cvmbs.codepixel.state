<?php
/**
 * Template Name: Program Overview
 * Template Post Type: degree_program
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

$block_path = 'elements/blocks/programs/';

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';
?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content" data-off-canvas-content>

	<!-- content container -->
	<div class="degree-program-container">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>

		<header class="degree-program-header" <?php echo $header_bg; ?>>
			<div class="degree-program-header__inner">
				<h1 class="degree-program-header__title">
					<span class="program-navigation">Degree Program</span>
					<span class="program-title"><?php the_title(); ?></span>
				</h1><!-- .degree-program-header__title -->
			</div><!-- .degree-program-header__inner -->
		</header><!-- .degree-program-header -->

		<?php get_template_part( $block_path . 'intro' ); ?>

		<?php
		$children = get_children( array(
			'post_parent' => $post->ID,
			'post_status' => 'publish',
			'orderby'     => 'title',
			'order'       => 'ASC'
		) );

		if ( $children ) :
		?>

		<div style="background:#a1a1a1; padding:6vw 8vw;">
			<?php foreach ( $children as $child ) : ?>

			<div class="program-children" style="padding:2vw 0;">
				<h2 style="line-height:1"><?php echo esc_attr( $child->post_title ); ?></h2>

				<?php
				$grandchildren = get_children( array(
					'post_parent' => $child->ID,
					'post_status' => 'publish',
					'orderby'     => 'title',
					'order'       => 'ASC'
				) );

				if ( $grandchildren ) :
				?>

				<ul>
					<?php foreach ( $grandchildren as $grandchild ) : ?>
					<li>
						<?php echo esc_attr( $grandchild->post_title ); ?>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>

			</div>

			<?php endforeach; ?>

		</div>
		<?php endif; ?>

		<?php
				get_template_part( $block_path . 'financial' );

				get_template_part( $block_path . 'visit-foco' );

			endwhile;
		endif;

		get_template_part( 'elements/layout/layout.footer' );
		?>

	</div>
	<!-- END content container -->

</main>
<!-- site.layout -->

<?php

get_footer();
