<!-- panel.events -->
<section id="menu-panel-events" class="inactive ui-panel menu-panel">

    <!-- panel.header -->
    <header id="menu-panel-events-header" class="panel-header">

        college event calendar

    </header>
    <!-- END panel.header -->

    <?php $calendar_ID = get_current_blog_id(); ?>

	<!-- panel utility class -->
	<div class="panel-interior" id="calendar-panel" data-calendar-id="<?php echo $calendar_ID; ?>" tabindex="-1" aria-hidden="true">

		<?php

			$defaultFeedURL = 'http://www.trumba.com/calendars/cvmbs.rss';
			$deptFeedURL = get_field( 'events_feed_RSS', 'option' );
			$feedURL = '';

			if ( empty( $deptFeedURL ) ) {

				$feedURL = $defaultFeedURL;

			} else {

				$feedURL = $deptFeedURL;

			}

			$content = @file_get_contents( $feedURL );

			if ( $content === FALSE ) {

			    // error handling
				echo '

					<div class="calendar-fail">

						<div class="container">

							<span>

								The calendar feed failed to load.<br />Please try again later.

							</span>

						</div>

					</div>

				';

			} else {

				$x = new SimpleXmlElement( $content );
				$limit = 12;
				$i = 1;

				echo '<ul class="accordion events-list scroll-fix" data-accordion data-multi-expand="true" data-allow-all-closed="true">';

				foreach( $x->channel->item as $entry ) {

					$title 		  = $entry->title;
					$date 		  = $entry->children('x-trumba', true)->formatteddatetime;
					$rawLocal 	  = $entry->children('xCal', true)->location;
					$start 		  = $entry->children('xCal', true)->dtstart;
					$link 		  = $entry->link;
					$description  = str_replace('&nbsp;', '', $entry->children('xCal', true)->description);

					$location 	  = strtok($rawLocal, '[0-9][1-9]');
					$monthID  	  = date('m', strtotime($start));
					$month 	  	  = date('F', strtotime($start));
					$day 	  	  = date('j', strtotime($start));

					echo '<li class="event accordion-navigation accordion-item" data-accordion-item>

						<a class="accordion-title event-toggle" href="#event-' . $i . '">

							<div class="calendar-entry">

								<div class="calendar-icon">

									<span class="calendar-month month-' . $monthID . '">' . $month . '</span>
									<span class="calendar-day">' . $day . '</span>

								</div>
								<div class="entry-info">

									<span class="event-title">' . $title . '</span>
									<span class="event-date">' . $date . '</span>

								</div>

							</div>

						</a>

						<div id="event-' . $i . '" class="accordion-content content" data-tab-content>

							<span class="entry-description" tabindex="0">' . $description . '</span>

							<div class="calendar-footer">

								<span class="event-location" tabindex="0" title="Event Location">' . $location . '</span>
								<span class="event-link">
									<a href="' . $link . '" target="_blank" title="more event information">more info</a>
								</span>

							</div>

						</div>

					</li>';

					$i++;

					if ( $i >= $limit ) {

						break;

					}

				}

				echo "</ul>";

			}

		?>

	</div>
	<!-- END panel utility class -->

</section>
<!-- END panel.events -->
