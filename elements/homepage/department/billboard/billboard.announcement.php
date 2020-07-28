<?php

    // department homepage options
    $department_homepage_options = get_field( 'department_homepage_options' );

    // billboard
    $billboard_options = $department_homepage_options[ 'billboard_options' ];

    // get data
    $announcement = $billboard_options[ 'announcement' ];

?>

<!-- announcements -->
<aside id="billboard_announcement">

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
