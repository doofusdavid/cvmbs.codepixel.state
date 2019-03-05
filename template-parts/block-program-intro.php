<?php
if ( have_rows('program_intro') ) :
	while ( have_rows('program_intro') ) : the_row();
?>
<!-- description -->
<div class="program-content program-row description lite">
	<!-- description -->
	<div class="description-text">
		<?php the_sub_field('desc'); ?>
	</div>
	<!-- END description -->

	<!-- sidebar -->
	<aside class="program-sidebar">
		<?php if ( $deg_types = get_the_terms( $post->ID, 'degree_type' ) ) : ?>
			<!-- title -->
			<span class="degree-type-label"><?php _e( 'Degree Type', 'cvmbsPress' ); ?></span>
			<!-- END title -->

			<!-- type -->
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
	</aside>
	<!-- END sidebar -->
</div>
<!-- END description -->
<?php
	endwhile;
endif;
