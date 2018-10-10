<?php

    $site_title  = get_field( 'site_title', 'options' );
    $title_break = get_field( 'site_title_line_break', 'options' );
    $site_line_1 = get_field( 'site_title_line_1', 'options' );
    $site_line_2 = get_field( 'site_title_line_2', 'options' );

?>

<!-- department.content -->
<section id="department-content" class="homepage-content department">

    <!-- billboard.title -->
    <div id="homepage-title" class="homepage-section">

        <!-- site.title -->
        <span class="site-title">

            <?php

                if ( $title_break[ 0 ] == 'break' ) {

                    echo $site_line_1 . '<br />' . $site_line_2;

                } else {

                    echo $site_title;

                }

            ?>

        </span>
        <!-- END site.title -->

    </div>
    <!-- END billboard.title -->

    <!-- text -->
    <div id="homepage-intro-text" class="homepage-section">

        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet cursus sit amet dictum sit amet justo donec. Pellentesque dignissim enim sit amet venenatis. Cras pulvinar mattis nunc sed blandit libero volutpat sed cras.

    </div>
    <!-- END text -->

    <!-- degree.programs -->
    <div id="degree-programs" class="homepage-section">

        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet cursus sit amet dictum sit amet justo donec. Pellentesque dignissim enim sit amet venenatis. Cras pulvinar mattis nunc sed blandit libero volutpat sed cras.

    </div>
    <!-- END degree.programs -->

    <!-- alumni.spotlight -->
    <div id="alumni-spotlight" class="homepage-section">

        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet cursus sit amet dictum sit amet justo donec. Pellentesque dignissim enim sit amet venenatis. Cras pulvinar mattis nunc sed blandit libero volutpat sed cras.

    </div>
    <!-- END alumni.spotlight -->

    <!-- research.map -->
    <div id="global-research-map" class="homepage-section">

        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet cursus sit amet dictum sit amet justo donec. Pellentesque dignissim enim sit amet venenatis. Cras pulvinar mattis nunc sed blandit libero volutpat sed cras.

    </div>
    <!-- END research.map -->

    <!-- news -->
    <div id="department-news" class="homepage-section">

        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet cursus sit amet dictum sit amet justo donec. Pellentesque dignissim enim sit amet venenatis. Cras pulvinar mattis nunc sed blandit libero volutpat sed cras.

    </div>
    <!-- END news -->

</section>
<!-- END department.content -->
