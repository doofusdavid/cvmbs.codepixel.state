
<!-- testimonial block -->
<div class="template-block testimonial <?php echo get_sub_field( 'theme' ); ?>" style="background-image:url(<?php echo esc_url( get_sub_field( 'background' ) ); ?>);">

	<?php $layout = get_sub_field( 'testimonial_layout' ); ?>

	<!-- inner -->
	<div class="testimonial__inner <?php echo $layout; ?>">

		<?php if ( $layout === 'single' ) : ?>

		<!-- testimonial -->
		<div class="testimonial__content">

			<!-- container -->
			<div class="testimonial__content-wrap">

				<!-- content -->
				<p class="testimonial__content">

					&ldquo; <?php the_sub_field( 'testimonial' ); ?> &rdquo;

				</p>
				<!-- END content -->

				<!-- attribution -->
				<p class="testimonial__attribution">

					- <?php the_sub_field( 'attribution' ); ?>

				</p>
				<!-- END attribution -->

				<!-- context -->
				<p class="testimonial__context">

					<?php the_sub_field( 'context' ); ?>

				</p>
				<!-- END context -->

			</div>
			<!-- END container -->

		</div>
		<!-- END testimonial -->

		<?php else : ?>

		<?php $testimonials = get_sub_field( 'testimonials' ); ?>

		<?php foreach( $testimonials as $testimonial ) : ?>

		<!-- testimonials -->
		<div class="testimonial__content">

			<!-- container -->
			<div class="testimonial__content-wrap">

				<!-- content -->
				<p class="testimonial__content">

					&ldquo; <?php echo $testimonial[ 'testimonial' ]; ?>&rdquo;

				</p>
				<!-- END content -->

				<!-- attribution -->
				<p class="testimonial__attribution">

					- <?php echo $testimonial[ 'attribution' ]; ?>

				</p>
				<!-- END attribution -->

				<!-- context -->
				<p class="testimonial__context">

					<?php echo $testimonial[ 'context' ]; ?>

				</p>
				<!-- END context -->

			</div>
			<!-- END container -->

		</div>
		<!-- END testimonials -->

		<?php endforeach; ?>

		<?php endif; ?>

	</div>
	<!-- END inner -->

</div>
<!-- END testimonial block -->
