<!-- potential careers -->
<div class="program-content program-row careers">

	<?php

		$program_careers_text = get_field( 'program_careers_description' );

	?>

	<!-- text -->
	<div class="careers-text">

		<!-- title -->
		<h3 class="careers-title">
			<?php _e( 'Career Opportunties', 'cvmbsPress' ); ?>
		</h3>
		<!-- END title -->

		<?php if ( get_sub_field('desc') ) : ?>
		<!-- text -->
		<span class="careers-description">
			<?php the_sub_field('desc'); ?>
		</span>
		<!-- END text -->
		<?php endif; ?>

	</div>
	<!-- END text -->

	<!-- list -->
	<div class="careers-list">

		<?php
		if ( have_rows( 'careers' ) ) :
			while ( have_rows( 'careers' ) ) : the_row();
		?>

			<span class="item">
				<?php the_sub_field('career'); ?>
			</span>

		<?php
			endwhile;
		endif;
		?>

	</div>
	<!-- END list -->

</div>
<!-- END potential careers -->
