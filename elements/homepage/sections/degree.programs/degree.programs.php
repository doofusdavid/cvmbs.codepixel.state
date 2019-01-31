
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

            <!-- accordion -->
            <ul id="degrees-content-accordion" class="programs-content-accordion accordion" data-accordion data-allow-all-closed="true">

                <?php

                    $degrees = get_terms( array(

                        'taxonomy' => 'degree_types',
                        'orderby'  => 'term_id'

                    ));

                    foreach ( $degrees as $degree ) {

                        $degree_types_query = array(

                            'post_type' => 'degree-program',
                            'tax_query' => array(

                                array(

                                    'taxonomy' => $degree->taxonomy,
                                    'field'    => 'slug',
                                    'terms'    => $degree->slug

                                )

                            )

                        );

                        $degree_types = new WP_Query( $degree_types_query );

                        echo '

                            <li class="accordion-item" data-accordion-item>

                                <a href="#" class="accordion-title">

                                    ' . $degree->name . '

                                    <span class="count">

                                        [ ' . $degree->count . ' ]

                                    </span>

                                </a>

                                <div class="accordion-content" data-tab-content>';

                        while ( $degree_types->have_posts() ) : $degree_types->the_post();

                        echo '<span class="degree-program">' . get_the_title() . '</span>';

                        endwhile;

                        echo '

                                </div>

                            </li>

                        ';

                    }

                ?>

            </ul>
            <!-- END accordion -->

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
