<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // content variable(s) [ DEPRECATED ]
    $department_intro_text = $department_options[ 'department_intro_text' ];

    // get site path
    $siteinfo = get_blog_details();

    // parse URL for site path
    $siteurl = str_replace( '/', '', $siteinfo->path );

    // access custom taxonomy on main site
    switch_to_blog( 1 );

        // get department taxonomy based on siteurl
        $department = get_term_by( 'slug', $siteurl, 'department' );

        // get department description
        $department_description = $department->description;

    restore_current_blog();

?>

<!-- homepage.intro -->
<section id="department-banner" class="homepage-section">

    <!-- introduction -->
    <div class="introduction-text">

        <?php echo $department_description; ?>

    </div>
    <!-- END introduction -->

</section>
<!-- END homepage.intro -->
