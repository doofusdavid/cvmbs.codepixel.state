<?php

    $lab_options = get_field( 'lab_homepage_options' );
    $slides      = $lab_options[ 'slideshow_content' ];

?>

<!-- container -->
<section id="slideshow" class="laboratory-content laboratory-slideshow build">

    <?php foreach ( $slides as $slide ) :

    $slide_image   = $slide[ 'slide_image' ];
    $slide_content = $slide[ 'slide_content' ]; ?>

    <!-- slide -->
    <article class="ui-slide">

        <!-- image -->
        <div class="image-container" style="background-image:url(<?php echo $slide_image; ?>)">

            <!-- empty -->

        </div>
        <!-- END image -->

        <!-- content -->
        <div class="content-wrapper">

            <!-- text -->
            <p class="slideshow-layer">

                <?php echo $slide_content; ?>

            </p>
            <!-- END text -->

        </div>
        <!-- END content -->

    </article>
    <!-- END slide -->

    <?php endforeach; ?>

</section>
<!-- END container -->
