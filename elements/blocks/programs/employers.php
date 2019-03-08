<!-- potential employers -->
<div class="program-content program-row employers">

	<!-- list -->
	<div class="employers-list">

		<?php
		if ( have_rows( 'employers' ) ) :
			while ( have_rows( 'employers' ) ): the_row();
		?>

			<span class="item">
				<?php the_sub_field('employer'); ?>
			</span>

		<?php
			endwhile;
		endif;
		?>

	</div>
	<!-- END list -->

	<!-- text -->
	<div class="employers-text">

		<!-- title -->
		<h3 class="employers-title">
			<?php _e( 'Potential Employers', 'cvmbsPress' ); ?>
		</h3>
		<!-- END title -->

		<?php if ( get_sub_field('desc') ) : ?>
		<!-- text -->
		<span class="employers-description">
			<?php the_sub_field('desc'); ?>
		</span>
		<!-- END text -->
		<?php endif; ?>

	</div>
	<!-- END text -->

</div>
<!-- END potential employers -->
