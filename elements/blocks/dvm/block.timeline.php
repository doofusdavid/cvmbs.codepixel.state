<?php

	$timeline_title = get_sub_field( 'heading' );
	$heading_option = get_sub_field( 'heading_option' );

?>

<!-- block container -->
<div class="template-block">

    <!-- block.inner -->
	<div class="template-block__inner">

        <!-- timeline -->
        <div class="timeline">

		<?php if ( $heading_option ) : ?>

		<<?php echo $timeline_title[ 'html_tag' ]; ?> class="timeline-title">

			<?php echo $timeline_title[ 'title' ]; ?>

		</<?php echo $timeline_title[ 'html_tag' ]; ?>>

		<?php endif; ?>

		<?php $setup_chronos = get_sub_field( 'timeline_entries' ); ?>

        <?php if ( have_rows( 'timeline_entries' ) ) : ?>

			<?php

				$base_array  = $setup_chronos[ 0 ];
				$config_base = explode( '-', $base_array[ 'entry_date' ] );
				$base_year   = $config_base[ 2 ]; ?>

			<!-- entries -->
			<div class="timeline-entries">

            <?php while( have_rows( 'timeline_entries' ) ) : the_row();

				$date_style      = get_sub_field( 'date_style' );
                $raw_entry_date  = get_sub_field( 'entry_date' );
				$entry_date_text = get_sub_field( 'entry_date_text' );
                $entry_title     = get_sub_field( 'entry_title' );
                $entry_content   = get_sub_field( 'entry_content' );

				// setup date icons and chronology
				$entry_date = explode( '-', $raw_entry_date );

				$month = $entry_date[ 0 ];
				$day   = $entry_date[ 1 ];
				$year  = $entry_date[ 2 ];

				if ( $year > $base_year ) {

					// echo 'happy new year';

				} ?>

				<div class="timeline-entry">

					<div class="timeline-entry-content">

						<?php if ( $date_style ) : ?>

						<div class="timeline-entry-date date__styled">

							<span class="entry-meta__month">

								<?php echo $month; ?>

							</span>

							<span class="entry-meta__day">

								<?php echo $day; ?>

							</span>

						</div>

						<?php else : ?>

						<span class="timeline-entry-date date__default">

							<?php echo $entry_date_text; ?>

						</span>

						<?php endif; ?>

	                    <span class="timeline-entry-title">

							<?php echo $entry_title; ?>

						</span>

						<?php if ( $entry_content ) : ?>

						<span class="timeline-entry-text">

							<?php echo $entry_content; ?>

						</span>

						<?php endif; ?>

					</div>

				</div>

                <?php endwhile; ?>

			</div>
			<!-- END entries -->

			<?php endif; ?>

        </div>
        <!-- END timeline -->

    </div>
    <!-- END block.inner -->

</div>
<!-- END block container -->
