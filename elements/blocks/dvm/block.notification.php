<?php

    $page_notification = get_field( 'page_notification' );
    $notification = $page_notification[ 'notification' ];

?>

<!-- block -->
<div class="template-block notification-block">

    <!-- container -->
    <div class="template-block__inner notification-block__inner">

        <!-- notification -->
        <div class="notification <?php echo $notification[ 'notification_type' ]; ?>">

            <h3>

                <?php echo $notification[ 'notification_title' ]; ?>

            </h3>

            <?php echo $notification[ 'notification_content' ]; ?>

        </div>
        <!-- END notification -->

    </div>
    <!-- END container -->

</div>
<!-- END block -->
