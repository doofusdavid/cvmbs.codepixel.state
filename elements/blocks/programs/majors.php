<!-- similar majors -->
<div class="program-content program-row similar dark blue">

	<h3 class="title">
		<?php _e( 'Similar Majors', 'cvmbsPress' ); ?>
	</h3>

	<?php if ( have_rows('majors') ) : ?>
	<!-- buttons -->
	<div class="buttons">

		<?php
		while ( have_rows('majors' ) ) : the_row();
			$major = get_sub_field('major');
		?>
		<button class="similar-major-link" data-link="<?php echo esc_url( $major['url'] ); ?>">
			<span class="button-title">
				<?php echo esc_attr( $major['title'] ); ?>
			</span>
		</button>
		<?php endwhile; ?>

	</div>
	<!-- END buttons -->
	<?php endif; ?>

</div>
<!-- END similar majors -->
