<?php

    // base group
    $homepage_options = get_field( 'vth_homepage_options' );

    // get data
    $launchpads = $homepage_options[ 'launchpads' ];

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
<section id="vth-homepage-content" class="<?php echo $layout; ?>">

    <!-- pattern -->
    <div class="pattern-overlay">

        <!--  -->

    </div>
    <!-- END pattern -->

    <?php

        foreach ( $launchpads as $launchpad ) {

            echo '<a class="launchpad" href="' . $launchpad[ 'link' ] . '" style="background-image:url(' . $launchpad[ 'image' ] . ')"><span class="title">' . $launchpad[ 'title' ] . '</span></a>';

        }

    ?>

</section>
<!-- END launchpads -->
