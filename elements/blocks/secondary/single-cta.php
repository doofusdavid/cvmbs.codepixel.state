<?php $link = get_sub_field('link_array'); ?>

<section class="single-cta" style="background-image:url(<?php the_sub_field('bg_img_url'); ?>);">
	<div class="single-cta__inner">
		<div class="single-cta__content">
			<h2 class="single-cta__title"><?php the_sub_field('heading'); ?></h2>

			<?php the_sub_field('content'); ?>

			<p><a href="<?php echo esc_url( $link['url'] ); ?>" class="single-cta__button"><?php echo esc_attr( $link['title'] ); ?></a></p>
		</div><!-- .single-cta__content -->
	</div><!-- .single-cta__inner -->
</section><!-- .single-cta -->
