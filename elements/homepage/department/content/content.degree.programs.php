<?php

    // department homepage options
    $department_options   = get_field( 'department_homepage_options' );

    // text content
    $degree_programs_text = $department_options[ 'degree_programs_content' ];

    // get site path
    $siteinfo = get_blog_details();

    // parse URL for site path
    $siteurl = str_replace( '/', '', $siteinfo->path );

    // set department ID for REST API tasks
    if ( $siteurl == 'bms' ) {

        $department = '53';

    } else if ( $siteurl == 'cs' ) {

        $department = '54';

    } else if ( $siteurl == 'erhs' ) {

        $department = '55';

    } else if ( $siteurl == 'mip' ) {

        $department = '56';

    }

    // setup REST API request
    $requestURL = wp_remote_get( 'https://vetmedbiosci.colostate.edu/wp-json/wp/v2/degree_program?department=' . $department );
    $data       = wp_remote_retrieve_body( $requestURL );
    $programs   = json_decode( $data );

?>

<!-- description -->
<div id="department-degree-programs-description" class="degree-program-content">

    <!-- title -->
    <h3 class="section-heading">

        degree programs

    </h3>
    <!-- END title -->

    <!-- text -->
    <p>

        <?php echo $degree_programs_text; ?>

    </p>
    <!-- END text -->

    <!-- button -->
    <a href="/degree_programs" class="link-button">

        learn more

    </a>
    <!-- END button -->

</div>
<!-- END description -->

<!-- programs -->
<div id="department-degree-programs" class="degree-program-content">

    <!-- undergraduate -->
    <div class="program-list undergraduate-programs">

        <?php

            foreach( $programs as $program ) {

                $title = $program->title->rendered;
                $link  = $program->link;

                $degree_programs .= '<a class="program-link" href="' . $link . '">' . $title . '</a>';

            }

            echo $degree_programs;

        ?>

    </div>
    <!-- END undergraduate -->

</div>
<!-- END programs -->
