<?php
if ( have_rows('program_intro') ) :
	while ( have_rows('program_intro') ) : the_row();
?>

<div class="degree-program-intro">
	<div class="degree-program-intro__sidebar">
		<?php if ( $deg_types = get_the_terms( $post->ID, 'degree_type' ) ) : ?>
			<span class="degree-type-label"><?php _e( 'Degree Type', 'cvmbsPress' ); ?></span>
			<!-- END title -->

			<span class="degree-type-text">
				<?php echo esc_attr( $deg_types[0]->name ); ?>
			</span>
			<!-- END type -->
		<?php endif; ?>

		<?php if ( $overview = get_sub_field('overview') ) : ?>
		<a class="degree-document-button" href="<?php echo esc_url( $overview ); ?>">
			<?php _e( 'Program Overview', 'cvmbsPress' ); ?>
		</a>
		<?php endif; ?>

		<?php if ( $curriculum = get_sub_field('curriculum') ) : ?>
		<a class="degree-document-button" href="<?php echo esc_url( $curriculum ); ?>">
			<?php _e( 'Curriculum', 'cvmbsPress' ); ?>
		</a>
		<?php endif; ?>
	</div>
	<!-- END sidebar -->

	<div class="degree-program-intro__desc">
		<?php the_sub_field('desc'); ?>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non dapibus lacus. Aenean sodales, mauris nec ornare eleifend, eros arcu molestie felis, id ornare est erat sed velit. Quisque hendrerit vitae justo a tristique. Nullam purus ipsum, venenatis ultricies dictum ac, lacinia eget dolor. Curabitur et rhoncus augue.</p>
	</div>
	<!-- END description -->
</div>

<?php
	endwhile;
endif;
