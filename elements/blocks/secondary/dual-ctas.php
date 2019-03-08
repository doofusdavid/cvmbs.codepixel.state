<section class="dual-ctas bg--<?php the_sub_field('bg_color'); ?> dual-ctas--<?php the_sub_field('bg_color'); ?>">
	<div class="dual-ctas__inner">

		<?php
		if ( have_rows('ctas') ) :
			while ( have_rows('ctas') ) : the_row();
				$link = get_sub_field('link_array');
		?>

		<div class="dual-ctas__content">
			<div class="dual-ctas__content-inner">
				<h2 class="dual-ctas__title"><?php the_sub_field('heading'); ?></h2>

				<?php the_sub_field('content'); ?>

				<p class="dual-ctas__cta">
					<a class="dual-ctas__button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
				</p>
			</div><!-- .dual-ctas__content-inner -->
		</div><!-- .dual-ctas__content -->

		<?php
			endwhile;
		endif;
		?>

	</div><!-- .dual-ctas__inner -->
</section><!-- .dual-ctas -->
