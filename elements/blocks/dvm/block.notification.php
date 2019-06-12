<?php

    $page_notification = get_field( 'page_notification' );
    $notification = $page_notification[ 'notification' ];

?>

<!-- notification -->
<div class="notification <?php echo $notification[ 'notification_type' ]; ?>">

    <h3>

        <?php echo $notification[ 'notification_title' ]; ?>

    </h3>

    <?php echo $notification[ 'notification_content' ]; ?>

</div>
<!-- END notification -->
