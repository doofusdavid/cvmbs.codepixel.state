<?php

    $homepage_panels = get_field( 'homepage_panels' );

    $billboard_panel = $homepage_panels[ 'panel_billboard' ];

    $billboard   = get_field( 'homepage_billboard', 'options' );
    $background  = $billboard[ 'image' ][ 'url' ];

    // $background  = $billboard_panel[ 'billboard_image' ][ 'url' ];
    $headline    = $billboard_panel[ 'headline' ];
    $subheadline = $billboard_panel[ 'subheadline' ];

?>

<!-- special.billboard -->
<section id="special-billboard" class="ui-billboard pattern" tabindex="-1" style="background-image:url(<?php echo $background; ?>);">

    <!-- overlay -->
    <div class="billboard-overlay">

        <!--  -->

    </div>
    <!-- END overlay -->

    <!-- content -->
    <div id="billboard-container">

        <!-- content -->
        <div id="billboard-content">

            <!-- headline -->
            <span class="headline">

                <?php echo $headline; ?>

            </span>
            <!-- END headline -->

            <!-- text -->
            <span class="text">

                <?php echo $subheadline; ?>

            </span>
            <!-- END text -->

            <!-- button -->
            <button id="explore-button" class="link" data-panel-link="panel-overview">

                explore our program

            </button>
            <!-- END button -->

        </div>
        <!-- END content -->

        <!-- buttons -->
        <div id="billboard-buttons">

            <!-- link -->
            <a id="button-explore" class="button-link" href="apply-to-our-program">

                <!-- title -->
                <span class="button-title">

                    apply to our program

                </span>
                <!-- END title -->

                <!-- text -->
                <span class="button-text">

                    required materials, application process and timeline, information for transfer students, and additional resources

                </span>
                <!-- END text -->

            </a>
            <!-- END link -->

            <!-- link -->
            <a id="button-admissions" class="button-link" href="application-criteria">

                <!-- title -->
                <span class="button-title">

                    admission requirements

                </span>
                <!-- END title -->

                <!-- text -->
                <span class="button-text">

                    application criteria, evaluation factors, and tips for creating a strong application

                </span>
                <!-- END text -->

            </a>
            <!-- END link -->

            <!-- link -->
            <a id="button-contact" class="button-link" href="contact">

                <!-- title -->
                <span class="button-title">

                    contact us

                </span>
                <!-- END title -->

                <!-- text -->
                <span class="button-text">

                    get in touch with our program staff with questions or concerns

                </span>
                <!-- END text -->

            </a>
            <!-- END link -->

        </div>
        <!-- END buttons -->

    </div>
    <!-- END content -->

</section>
<!-- END special.billboard -->
