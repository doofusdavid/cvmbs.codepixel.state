<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // research content
    $expertise_content = $department_options[ 'expertise_content' ];

    // resources
    $areas = $expertise_content[ 'areas' ];

?>

<!-- homepage.section -->
<section id="department-expertise" class="homepage-section">

    <!-- visual FX -->
    <div class="design-layer">

        <!-- image -->
        <div class="image fx-layer layer" style="background-image:url(<?php echo $expertise_content[ 'background' ]; ?>)">

            <!-- empty -->

        </div>
        <!-- END image -->

        <!-- color -->
        <div class="color fx-layer layer">

            <!--  -->

        </div>
        <!-- END color -->

    </div>
    <!-- END visual FX -->

    <!-- content -->
    <div class="content-layer">

        <?php if ( $expertise_content[ 'title' ] ) : ?>

        <span class="headline">

            <?php echo $expertise_content[ 'title' ]; ?>

        </span>

        <?php endif; ?>

        <?php if ( $expertise_content[ 'text' ] ) : ?>

        <span class="text">

            <?php echo $expertise_content[ 'text' ]; ?>

        </span>

        <?php endif; ?>

        <div class="expertise-content">

            <?php

                foreach( $areas as $area ) {

                    $title  = $area[ 'area' ];

                    $content .= '

                        <span class="expertise-area">

                            ' . $title . '

                        </span>

                    ';

                }

                echo $content;

            ?>

        </div>

    </div>
    <!-- END content -->

</section>
<!-- END homepage.section -->
