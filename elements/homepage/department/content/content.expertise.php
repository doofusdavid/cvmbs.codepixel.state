<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // research content
    $expertise_content = $department_options[ 'expertise_content' ];

    // resources
    $areas = $expertise_content[ 'areas' ];

?>

<!-- homepage.section -->
<section id="department-expertise" class="department-expertise homepage-section">

    <!-- visual FX -->
    <div class="design-layer">

        <!-- image -->
        <div class="image fx-layer layer" style="background-image:url(<?php echo $expertise_content[ 'background' ]; ?>)">
            <!-- empty -->
        </div>
        <!-- END image -->

        <!-- color -->
        <div class="color fx-layer layer">
            <!-- empty -->
        </div>
        <!-- END color -->

    </div>
    <!-- END visual FX -->

    <!-- content -->
    <div class="content-layer">

        <?php if ( $expertise_content[ 'title' ] ) : ?>

        <h3 class="headline"><?php echo $expertise_content[ 'title' ]; ?></h3>

        <?php endif; ?>

        <?php if ( $expertise_content[ 'text' ] ) : ?>

        <p class="text">

            <?php echo $expertise_content[ 'text' ]; ?>

        </p>

        <?php endif; ?>

        <div class="expertise-content">

            <?php

                foreach( $areas as $area ) {

                    $title = $area[ 'area' ];
                    $link  = $area[ 'link' ];

                    $content .= '

                        <a href="' . $link . '" class="expertise-area">

                            ' . $title . '

                        </a>

                    ';

                }

                echo $content;

            ?>

            <?php

                // research_topic_menu();

            ?>

        </div>

    </div>
    <!-- END content -->

</section>
<!-- END homepage.section -->
