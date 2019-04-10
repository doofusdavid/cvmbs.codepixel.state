<!-- student organizations -->
<div class="program-content program-row organizations dark">

	<!-- title -->
	<h3 class="title">
		<?php the_sub_field('heading'); ?>
	</h3>
	<!-- END title -->

	<!-- buttons -->
	<div class="buttons">

		<?php
		if ( have_rows( 'orgs' ) ) :
			while ( have_rows( 'orgs' ) ) : the_row();
				$org = get_sub_field('org');
		?>

				<button class="organization-button" data-url="<?php echo esc_url( get_permalink( $org ) ); ?>">
					<?php echo esc_attr( get_the_title( $org ) ); ?>
				</button>

		<?php
			endwhile;
		endif;
		?>

	</div>
	<!-- END buttons -->

</div>
<!-- END student organizations -->
