<!-- concentrations -->
<div class="program-content program-row concentrations lite">

	<!-- title -->
	<h3 class="title">

		concentrations

	</h3>
	<!-- END title -->

	<div class="concentrations-content">

		<?php if ( have_rows( 'program_concentrations' ) ): ?>

			<?php while ( have_rows( 'program_concentrations' ) ): the_row();

				$concentration_name = get_sub_field( 'concentration_title' );
				$concentration_text = get_sub_field( 'concentration_description' );
				$concentration_file = get_sub_field( 'concentration_curriculum' );

			?>

			<button class="concentration-button" data-file="<?php echo $concentration_file[ 'filename' ]; ?>">

				<span class="button-title">

					<?php echo $concentration_name; ?>

				</span>

				<span class="button-text">

					<?php echo $concentration_text; ?>

				</span>

				<span class="button-button">

					explore concentration

				</span>

			</button>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>

</div>
<!-- END concentrations -->
