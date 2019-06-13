<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // research content
    $outreach_content = $department_options[ 'outreach_content' ];

    // links
    $links = $outreach_content[ 'links' ];

?>

<!-- service.outreach -->
<section id="department-outreach" class="homepage-section">

    <!-- visual FX -->
    <div class="design-layer">

        <!-- image -->
        <div class="image fx-layer layer" style="background-image:url(<?php echo $outreach_content[ 'background' ]; ?>)">

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

        <span class="headline">

            <?php echo $outreach_content[ 'title' ]; ?>

        </span>

        <?php if ( $outreach_content[ 'text' ] ) : ?>

        <span class="text">

            <?php echo $outreach_content[ 'text' ]; ?>

        </span>

        <?php endif; ?>

        <div class="content-buttons">

        <?php

            foreach( $links as $link ) {

                $title = get_sub_field( 'title' );

                // $title   = $link[ 'title' ];
                $title   = $link[ 'service_outreach_link' ][ 'title' ];
                $linkURL = $link[ 'service_outreach_link' ][ 'url' ];

                $content .= '

                    <a href="' . $linkURL . '" class="content-button">

                        ' . $title . '

                    </a>

                ';

            }

            echo $content;

        ?>

        </div>

    </div>
    <!-- END content -->

</section>
<!-- END service.outreach -->
