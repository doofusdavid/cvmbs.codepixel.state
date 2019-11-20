<?php

    // content
    $events = get_sub_field( 'events' );

?>

<!-- events -->
<section class="homepage-section events">

    <!-- title block -->
    <div class="section-title">

        upcoming events

    </div>
    <!-- END title block -->

    <!-- events list -->
    <div class="events-list">

        <?php foreach( $events as $event ) :

            $event_title = $event[ 'event_title' ];
            $event_text  = $event[ 'event_text' ];
            $event_link  = $event[ 'event_link' ];

            $events_list = '<a class="event-link" href="' . $event_link . '"><span class="event-title">' . $event_title . '</span><span class="event-text">' . $event_text . '</span></a>';

            echo $events_list;

        endforeach; ?>

    </div>
    <!-- END events list -->

</section>
<!-- END events -->
