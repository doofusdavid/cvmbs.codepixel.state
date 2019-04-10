<?php
$bg_img = get_sub_field('img') ? 'style="background-image:url(' . get_sub_field('img') .')";' : '';
?>

<!-- research opportunities -->
<div class="program-content program-row research lite">

	<!-- content wrapper -->
	<div class="content-wrapper">

		<!-- content half -->
		<div class="content left">

			<!-- title -->
			<h3 class="title">
				<?php _e( 'Research Opportunities', 'cvmbsPress' ); ?>
			</h3>
			<!-- END title -->

			<!-- content  -->
			<div class="content">
				<?php the_sub_field('desc'); ?>

				<?php if ( have_rows('opportunities') ) : ?>

				<ul>

					<?php while ( have_rows('opportunities') ) : the_row(); ?>

					<li>
						<?php if ( $link = get_sub_field('link') ) : ?>
							<a href="<?php echo esc_url( $link ); ?>"><?php the_sub_field('name'); ?></a>
						<?php else : ?>
							<?php the_sub_field('name'); ?>
						<?php endif; ?>
					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>
			<!-- END content  -->

		</div>
		<!-- END content half -->

		<!-- content half -->
		<div class="content right" <?php echo $bg_img; ?>>
		</div>
		<!-- END content half -->

	</div>
	<!-- END content wrapper -->

</div>
<!-- END research opportunities -->
