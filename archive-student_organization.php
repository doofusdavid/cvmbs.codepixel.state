<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

		<header class="student-orgs__header">
			<div class="student-orgs__header-inner">
				<h1 class="student-orgs__header-title">
					<?php _e( get_queried_object()->label, 'csu-career-center' ); ?>
				</h1><!-- .student-orgs__header-title -->
			</div><!-- .student-orgs__header-inner -->
		</header><!-- .student-orgs__header -->

		<div class="student-orgs__grid">
			<div class="student-orgs__grid-inner">

			<?php
			while ( have_posts() ) : the_post();
				$card_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'fp-medium' ) . ');"' : '';
				$link = ( get_field('student_org_link') ) ? get_field('student_org_link') : get_permalink();
			?>

				<a class="student-orgs__grid-item" href="<?php echo esc_url( $link ); ?>" <?php echo $card_bg; ?>>
					<span class="student-orgs__grid-item-name"><?php the_title(); ?>
				</a>

			<?php endwhile; ?>

			</div><!-- .student-orgs__grid-inner -->
		</div><!-- .student-orgs__grid -->

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
