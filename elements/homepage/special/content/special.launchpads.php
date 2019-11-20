<?php

    // get data
    $launchpads = get_sub_field( 'launchpads' );

    // count items
    $count = count( $launchpads );

    // set layout class
    switch ( true ) {

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
<section class="homepage-section launchpads <?php echo $layout; ?>">

    <!-- pattern -->
    <div class="pattern-overlay">

        <!--  -->

    </div>
    <!-- END pattern -->

    <?php

        foreach( $launchpads as $launchpad ) {

            echo '<a class="launchpad" href="' . $launchpad[ 'link' ] . '" style="background-image:url(' . $launchpad[ 'image' ] . ')"><span class="title">' . $launchpad[ 'title' ] . '</span></a>';

        }

    ?>

</section>
<!-- END launchpads -->
