<?php
if ( have_rows('program_intro') ) :
	while ( have_rows('program_intro') ) : the_row();

	// $deg_types  = get_the_terms( $post->ID, 'degree_type' );
	$apply      = get_sub_field('apply');
	$curriculum = get_sub_field('curriculum');
?>

<div class="degree-program-intro program-block">
	<div class="degree-program-intro__inner">

		<?php if ( $apply || $curriculum ) : ?>
		<div class="degree-program-intro__sidebar">
			<?php // if ( $deg_types ) : ?>
				<!-- <span class="degree-type-label"><?php // _e( 'Degree Type', 'cvmbsPress' ); ?></span> -->
				<!-- END title -->

				<!-- <span class="degree-type-text">
					<?php // echo esc_attr( $deg_types[0]->name ); ?>
				</span> -->
				<!-- END type -->
			<?php // endif; ?>

			<?php if ( $apply ) : ?>
			<a class="degree-document-button" href="<?php echo esc_url( $apply ); ?>">
				<?php _e( 'Apply Now', 'cvmbsPress' ); ?>
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
			<?php the_sub_field('desc'); ?>
		</div><!-- .degree-program-intro__desc -->
	</div><!-- .degree-program-intro__inner -->
</div>

<?php
	endwhile;
endif;
