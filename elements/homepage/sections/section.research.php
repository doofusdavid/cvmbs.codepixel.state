<?php

    // college homepage options
    $college_options = get_field( 'college_homepage_options' );

    // research content
    $research_content = $college_options[ 'research_content' ];

?>

<!-- container -->
<div class="article-container">

    <!-- background.color -->
    <div class="section-base">

        <!-- empty -->

    </div>
    <!-- END background.color -->

    <!-- section.content -->
    <div class="section-content" data-load="pending">

        <!-- content.layers -->
        <div class="content-layers">

            <!-- visual FX -->
            <div class="design-layer">

                <!-- color + gradient -->
                <div class="image-layer fx-layer layer" style="background-image:url(<?php echo $research_content[ 'background' ][ 'url' ]; ?>)">

                    <!-- ball so hard -->

                </div>
                <!-- END color + gradient -->

                <!-- pattern -->
                <div class="pattern-layer fx-layer layer">

                    <!-- map -->
                    <div id="research-map" class="map">

                        <!-- ball so hard -->

                    </div>
                    <!-- END map -->

                </div>
                <!-- END pattern -->

            </div>
            <!-- END visual FX -->

            <!-- content -->
            <div class="content-layer">

                <h3 class="headline">

                    <?php echo $research_content[ 'title' ]; ?>

                </h3>

                <p class="text">

                    <?php echo $research_content[ 'text' ]; ?>

                </p>

                <a href="/research" class="content-button">

                    <?php echo $research_content[ 'link' ][ 'title' ]; ?>

                </a>

            </div>
            <!-- END content -->

        </div>
        <!-- END content.layers -->

    </div>
    <!-- END section.content -->

</div>
<!-- END container -->
