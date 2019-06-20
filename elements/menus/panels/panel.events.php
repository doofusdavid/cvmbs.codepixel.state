<!-- panel.events -->
<section id="menu-panel-events" class="inactive ui-panel menu-panel" aria-hidden="true">

    <!-- panel.header -->
    <header id="menu-panel-events-header" class="panel-header">

        college event calendar

        <a id="view-calendar-link" href="https://calendar.colostate.edu/cvmbs/" title="view full event calendar" >

            <span class="label">

                view all

            </span>

        </a>

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
				$limit = 16;
				$i = 1;

				echo '<ul class="events-list scroll-fix">';

				foreach( $x->channel->item as $entry ) {

					$title 		  = $entry->title;
					$date 		  = $entry->children('x-trumba', true)->formatteddatetime;
					$rawLocal 	  = $entry->children('xCal', true)->location;
					$start 		  = $entry->children('xCal', true)->dtstart;
					$link 		  = $entry->link;
					$rawDesc      = str_replace('&nbsp;', '', $entry->children('xCal', true)->description);

					$location 	  = strtok($rawLocal, '[0-9][1-9]');
					$monthID  	  = date('m', strtotime($start));
					$month 	  	  = date('F', strtotime($start));
					$day 	  	  = date('j', strtotime($start));

                    if ( $rawDesc ) {

                        $description  = '<p class="entry-description" tabindex="0">' . $rawDesc . '</p>';

                    } else {

                        $description  = '';

                    }

					echo '<li class="event">

                        <div class="calendar-icon">

                            <span class="calendar-month month-' . $monthID . '">' . $month . '</span>
                            <span class="calendar-day">' . $day . '</span>

                        </div>
                        <div class="entry-info">

                            <a class="entry-link" href="' . $link . '">' . $title . '</a>
                            <p class="entry-date">' . $date . '</p>

                            ' . $description . '

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
