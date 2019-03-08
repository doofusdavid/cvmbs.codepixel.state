<?php $layout = get_sub_field('layout'); ?>

<section class="launch-pads bg--none">
	<div class="launch-pads__intro bg--<?php the_sub_field('intro_bg'); ?>">
		<div class="launch-pads__intro-wrap">
			<h2 class="launch-pads__title"><?php the_sub_field('heading'); ?></h2>

			<?php the_sub_field('intro'); ?>
		</div><!-- .launch-pads__intro-wrap -->
	</div><!-- .launch-pads__intro -->

	<?php if ( have_rows('grid') ) : ?>

	<div class="launch-pads__grid grid--<?php echo esc_attr( $layout ); ?>-columns">

		<?php
		while( have_rows('grid') ) : the_row();
			$link = get_sub_field('link_array');
			$bg_img_url = get_sub_field('bg_img_url');
		?>

		<a href="<?php echo esc_url( $link['url'] ); ?>" class="launch-pads__grid-item" style="background-image:url(<?php echo esc_url( $bg_img_url ); ?>);">
			<span class="launch-pads__grid-item-name"><?php echo esc_attr( $link['title'] ); ?></span>
		</a><!-- .launch-pads__grid-item -->

		<?php endwhile; ?>

	</div><!-- .launch-pads__grid -->

	<?php endif; ?>

</section><!-- .launch-pads -->
