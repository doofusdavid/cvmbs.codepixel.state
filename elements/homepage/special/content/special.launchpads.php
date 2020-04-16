<?php

    // get data
    $launchpads = get_sub_field( 'launchpads' );

    // count items
    $count = count( $launchpads );

    // set layout class
    switch ( true ) {

        case $count < 3 :

            $layout = 'two';
            break;

        case $count == 3 :

            $layout = 'three';
            break;

        case $count == 4 :

            $layout = 'four';
            break;

        case $count >= 4 :

            $layout = 'multiples';
            break;

        default :

            $layout = 'layout';

    }

?>

<!-- launchpads -->
<section class="homepage-section">

    <!-- pattern -->
    <div class="pattern-overlay">

        <!--  -->

    </div>
    <!-- END pattern -->

    <!-- launchpads -->
    <div class="launchpads <?php echo $layout; ?>">

    <?php foreach( $launchpads as $launchpad ) : ?>

        <?php if ( $launchpad[ 'sticky' ] ) {

            $stickiness = 'sticky';
            $indicator  = '<span class="indicator"></span>';

        } else { $stickiness = 'default'; } ?>

        <?php echo '<a class="launchpad ' . $stickiness . '" href="' . $launchpad[ 'link' ] . '" style="background-image:url(' . $launchpad[ 'image' ] . ')">' . $indicator . '<span class="title">' . $launchpad[ 'title' ] . '</span></a>'; ?>

    <?php endforeach; ?>

    </div>
    <!-- END launchpads -->

</section>
<!-- END launchpads -->
