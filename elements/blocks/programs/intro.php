<?php
if ( have_rows('program_intro') ) :
	while ( have_rows('program_intro') ) : the_row();

	$deg_types = get_the_terms( $post->ID, 'degree_type' );
	$overview = get_sub_field('overview');
	$curriculum = get_sub_field('curriculum');
?>

<div class="degree-program-intro">
	<div class="degree-program-intro__inner">

		<?php if ( $deg_types || $overview || $curriculum ) : ?>
		<div class="degree-program-intro__sidebar">
			<?php if ( $deg_types ) : ?>
				<span class="degree-type-label"><?php _e( 'Degree Type', 'cvmbsPress' ); ?></span>
				<!-- END title -->

				<span class="degree-type-text">
					<?php echo esc_attr( $deg_types[0]->name ); ?>
				</span>
				<!-- END type -->
			<?php endif; ?>

			<?php if ( $overview ) : ?>
			<a class="degree-document-button" href="<?php echo esc_url( $overview ); ?>">
				<?php _e( 'Program Overview', 'cvmbsPress' ); ?>
			</a>
			<?php endif; ?>

			<?php if ( $curriculum ) : ?>
			<a class="degree-document-button" href="<?php echo esc_url( $curriculum ); ?>">
				<?php _e( 'Curriculum', 'cvmbsPress' ); ?>
			</a>
			<?php endif; ?>
		</div><!-- .degree-program-intro__sidebar -->
		<?php endif; ?>

		<div class="degree-program-intro__desc">
			<?php if ( get_sub_field('desc') ) : ?>
				<?php the_sub_field('desc'); ?>
			<?php else : ?>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non dapibus lacus. Aenean sodales, mauris nec ornare eleifend, eros arcu molestie felis, id ornare est erat sed velit. Quisque hendrerit vitae justo a tristique. Nullam purus ipsum, venenatis ultricies dictum ac, lacinia eget dolor. Curabitur et rhoncus augue.</p>
			<?php endif; ?>
		</div><!-- .degree-program-intro__desc -->
	</div><!-- .degree-program-intro__inner -->
</div>

<?php
	endwhile;
endif;
