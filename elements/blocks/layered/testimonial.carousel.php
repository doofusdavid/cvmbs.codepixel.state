
<section class="spotlight testimonial" style="background-image:url(<?php echo esc_url( get_sub_field( 'background' ) ); ?>);">

	<div class="testimonial__inner">

		<div class="testimonial__content">

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

			</div><!-- .testimonial__content-wrap -->

		</div><!-- .testimonial__content -->

	</div><!-- .spotlight__inner -->

</section><!-- .spotlight -->
