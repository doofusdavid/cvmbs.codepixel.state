<?php

    // options
    $unit_options = get_field( 'special_homepage_options' );

    // get data
    $announcement = $unit_options[ 'announcement' ];

?>

<!-- announcements -->
<aside class="homepage-section announcements">

    <!-- label  -->
    <span class="announcement-content label">

        announcement

    </span>
    <!-- END label  -->

    <!-- title -->
    <span class="announcement-content title">

        <?php echo $announcement[ 'title' ]; ?>

    </span>
    <!-- END title -->

    <!-- text -->
    <div class="announcement-content text">

        <?php echo $announcement[ 'content' ]; ?>

    </div>
    <!-- END text -->

    <?php if ( $announcement[ 'link' ] ) : ?>

    <!-- link -->
    <a class="announcement-content link" href="<?php echo $announcement[ 'link' ][ 'url' ]; ?>">

        <?php echo $announcement[ 'link' ][ 'title' ]; ?>

    </a>
    <!-- END link -->

    <?php endif; ?>

</aside>
<!-- END announcements -->
