<!-- program contacts -->
<div class="program-content program-row dark contacts program-block">

	<!-- content wrapper -->
	<div class="content-wrapper">

		<!-- title -->
		<h3 class="title program-block__title">

			program contacts

		</h3>
		<!-- END title -->

		<!-- content -->
		<div class="content">

			<?php if ( have_rows( 'program_contacts' ) ): ?>

				<!-- list -->
				<ul class="contact-list">

					<?php while ( have_rows( 'program_contacts' ) ): the_row();

						$contact_name  = get_sub_field( 'contact_name' );
						$contact_photo = get_sub_field( 'contact_photo' );
						$contact_type  = get_sub_field( 'contact_type' );
						$contact_phone = get_sub_field( 'contact_phone' );
						$contact_email = get_sub_field( 'contact_email' );

					?>

					<li class="contact-card">

						<img src="<?php echo $contact_photo; ?>" alt="">
						<?php echo $contact_name; ?><br/>
						<?php echo $contact_type; ?><br/>
						<?php echo $contact_phone; ?><br/>
						<?php echo $contact_email; ?>

					</li>

					<?php endwhile; ?>

				</ul>
				<!-- END list -->

			<?php endif; ?>

		</div>
		<!-- END content -->

	</div>
	<!-- END content wrapper -->

</div>
<!-- END program contacts -->
