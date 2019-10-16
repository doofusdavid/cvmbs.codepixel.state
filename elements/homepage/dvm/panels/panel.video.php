<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $video_content = $homepage_options[ 'video_content' ];

?>

<!-- overlay -->
<div class="panel-overlay">

    <!--  -->

</div>
<!-- END overlay -->

<!-- content -->
<div class="panel-content">

    <h2>

        <?php echo $video_content[ 'title' ]; ?>

    </h2>

    <!-- container -->
    <div class="video-container">

        <!-- embed -->
        <div class="program-video">

            <iframe src="<?php echo $video_content[ 'video_url' ]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <!-- END embed -->

    </div>
    <!-- END container -->

    <p>

        <?php echo $video_content[ 'text' ]; ?>

    </p>

</div>
<!-- END content -->
