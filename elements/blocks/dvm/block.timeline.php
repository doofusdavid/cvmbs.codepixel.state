<?php

	$timeline_title = get_sub_field( 'heading' );

?>

<!-- block container -->
<div class="template-block">

    <!-- block.inner -->
	<div class="template-block__inner">

        <!-- timeline -->
        <div class="timeline">

		<<?php echo $timeline_title[ 'html_tag' ]; ?> class="timeline-title">

			<?php echo $timeline_title[ 'title' ]; ?>

		</<?php echo $timeline_title[ 'html_tag' ]; ?>>

        <?php

            if ( have_rows( 'timeline_entries' ) ) :

                while( have_rows( 'timeline_entries' ) ) : the_row();

					$date_style      = get_sub_field( 'date_style' );
                    $entry_date      = get_sub_field( 'entry_date' );
					$entry_date_text = get_sub_field( 'entry_date_text' );
                    $entry_title     = get_sub_field( 'entry_title' );
                    $entry_content   = get_sub_field( 'entry_content' ); ?>

					<div class="timeline-entry">

						<div class="timeline-entry-content">

							<span class="timeline-entry-date">

								<?php

									if ( $date_style ) {

										echo $entry_date;

									} else {

										echo $entry_date_text;

									}

								?>

							</span>

		                    <span class="timeline-entry-title">

								<?php echo $entry_title; ?>

							</span>

							<span class="timeline-entry-text">

								<?php echo $entry_content; ?>

							</span>

						</div>

					</div>

                <?php endwhile;

            endif;

        ?>

        </div>
        <!-- END timeline -->

    </div>
    <!-- END block.inner -->

</div>
<!-- END block container -->
