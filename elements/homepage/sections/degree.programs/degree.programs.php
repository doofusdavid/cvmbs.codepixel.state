
<!-- content -->
<div id="programs-static-panel" class="programs-view collapsed" data-display="default">

    <!-- button -->
    <button id="collapse-programs" class="collapse-content-button collapsed">

        <span>close</span>

    </button>
    <!-- END button -->

    <!-- content wrap -->
    <div id="programs-content" class="degree-programs-content-wrap">

        <!-- title -->
        <h3 class="content-title">

            explore degree programs

        </h3>
        <!-- END title -->

        <!-- text -->
        <span class="panel-text">

            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes ridiculus mus.

        </span>
        <!-- END text -->

        <!-- button -->
        <button id="explore-programs-button" class="degree-programs-button" data-controller="degree-programs-form">

            contact college admissions

        </button>
        <!-- END button -->

    </div>
    <!-- END content wrap -->

    <!-- dynamic content -->
    <div id="programs-content-UI" class="degree-programs-dynamic-content">

        <!--  -->

    </div>
    <!-- END dynamic content -->

</div>
<!-- END content -->

<!-- dynamic -->
<div id="programs-dynamic-panel" class="programs-view standby">

    <!-- degree type -->
    <div id="degree-programs" class="degree-programs-content collapsed" data-display="default">

        <!-- button -->
        <button id="collapse-degrees" class="collapse-content-button collapsed">

            <span>close</span>

        </button>
        <!-- END button -->

        <!-- content wrap -->
        <div class="degree-programs-content-wrap">

            <!-- title -->
            <h4>

                degree type

            </h4>
            <!-- END title -->

            <!-- text -->
            <span class="panel-text">

                discover academic opportunities<br />that best suit your academic or professional timeline

            </span>
            <!-- END text -->

            <!-- button -->
            <button id="explore-degrees-button" class="degree-programs-button explore-button" data-controller="degree-programs-degrees">

                explore degree types

            </button>
            <!-- END button -->

        </div>
        <!-- END content wrap -->

        <!-- dynamic content -->
        <div id="degrees-content-UI" class="degree-programs-dynamic-content">

            <!-- header -->
            <div class="header">

                <span class="headline">

                    explore degree programs by degree type

                </span>

                <span class="subheadline">

                    select an academic level to view all degree programs and lorem ipsum dolor sit amet, consectetuer adipiscing elit

                </span>

            </div>
            <!-- END header -->

            <!-- cards -->
            <div class="degree-types">

                <!-- card -->
                <a class="degree-type-link" href="">

                    <span class="degree-type">

                        undergraduate

                    </span>

                    <span class="degree-type-text">

                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </span>

                </a>
                <!-- END card -->

                <!-- card -->
                <a class="degree-type-link" href="">

                    <span class="degree-type">

                        graduate

                    </span>

                    <span class="degree-type-text">

                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa consequat.

                    </span>

                </a>
                <!-- END card -->

                <!-- card -->
                <a class="degree-type-link" href="">

                    <span class="degree-type">

                        residency

                    </span>

                    <span class="degree-type-text">

                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cupidatat non proident.

                    </span>

                </a>
                <!-- END card -->

                <!-- card -->
                <a class="degree-type-link" href="">

                    <span class="degree-type">

                        professional

                    </span>

                    <span class="degree-type-text">

                        Quis auctor elit sed vulputate mi sit amet. Enim venenatis urna cursus. Actincidunt vitae semper lectus nulla at volutpat.

                    </span>

                </a>
                <!-- END card -->

            </div>
            <!-- END cards -->

        </div>
        <!-- END dynamic content -->

    </div>
    <!-- END degree type -->

    <!-- career interests -->
    <div id="career-interests" class="degree-programs-content collapsed" data-display="default">

        <!-- button -->
        <button id="collapse-careers" class="collapse-content-button collapsed">

            <span>close</span>

        </button>
        <!-- END button -->

        <!-- content wrap -->
        <div class="degree-programs-content-wrap">

            <!-- title -->
            <h4>

                career interests

            </h4>
            <!-- END title -->

            <!-- text -->
            <span class="panel-text">

                discover academic opportunities<br />that best suit your skill set and interests

            </span>
            <!-- END text -->

            <!-- button -->
            <button id="explore-careers-button" class="degree-programs-button explore-button" data-controller="degree-programs-careers">

                explore potential careers

            </button>
            <!-- END button -->

        </div>
        <!-- END content wrap -->

        <!-- dynamic content -->
        <div id="careers-content-UI" class="degree-programs-dynamic-content">

            <?php

                $careers = get_terms( array(

                    'taxonomy' => 'career_interests'

                ));

                foreach ( $careers as $career ) {

                    echo '<span class="tag">' . $career->name . '</span>';

                }

            ?>

        </div>
        <!-- END dynamic content -->

    </div>
    <!-- END career interests -->

</div>
<!-- END dynamic -->
