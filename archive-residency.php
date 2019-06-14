<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

		<header class="deg-progs-header">
			<div class="deg-progs-header__inner">
				<h1 class="deg-progs-header__title">
					<?php echo esc_attr( get_queried_object()->label ); ?>
				</h1><!-- .deg-progs-header__title -->
			</div><!-- .deg-progs-header__inner -->
		</header><!-- .deg-progs-header -->

		<div class="deg-progs-content">
			<div class="deg-progs__grid">

			<?php
			while ( have_posts() ) : the_post();
				$card_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'fp-medium' ) . ');"' : '';
				$link = ( get_field('student_org_link') ) ? get_field('student_org_link') : get_permalink();
			?>

				<a class="deg-progs__grid-item" href="<?php echo esc_url( $link ); ?>" <?php echo $card_bg; ?>>
					<span class="deg-progs__grid-item-name"><?php the_title(); ?>
				</a>

			<?php endwhile; ?>

			</div><!-- .deg-progs__grid -->
		</div><!-- .deg-progs-content -->

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
