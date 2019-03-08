<section class="spotlight" style="background-image:url(<?php echo esc_url( get_sub_field( 'bg_img_url' ) ); ?>);">
	<div class="spotlight__inner">
		<div class="spotlight__content">
			<div class="spotlight__content-wrap">
				<h2 class="spotlight__title"><?php the_sub_field('heading'); ?></h2>

				<?php the_sub_field('content'); ?>

				<?php if ( $cta = get_sub_field('cta_array') ) : ?>

				<p><a href="<?php echo esc_url( $cta['url'] ); ?>" class="spotlight__button"><?php echo esc_attr( $cta['title'] ); ?></a></p>

				<?php endif; ?>

			</div><!-- .spotlight__content-wrap -->
		</div><!-- .spotlight__content -->

		<div class="spotlight__img">
			<?php echo wp_get_attachment_image( get_sub_field( 'focus_img_id' ), 'full' ); ?>
		</div><!-- .spotlight__img -->
	</div><!-- .spotlight__inner -->
</section><!-- .spotlight -->
