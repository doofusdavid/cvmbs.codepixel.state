<?php

    // set global blog variable
    global $blog_id;

    // set dynamic blog id
    $currentsite = $blog_id;

    // department homepage options
    $department_options   = get_field( 'department_homepage_options' );

    // text content
    $degree_programs_content = $department_options[ 'degree_programs_content' ];

    // get site path
    $siteinfo = get_blog_details();

    // parse URL for site path
    $dept_slug = str_replace( '/', '', $siteinfo->path );

?>

<!-- visual FX -->
<div class="design-layer">

    <!-- image -->
    <div class="image fx-layer layer">

        <!-- -->

    </div>
    <!-- END image -->

    <!-- color -->
    <div class="color fx-layer layer">

        <!--  -->

    </div>
    <!-- END color -->

</div>
<!-- END visual FX -->

<!-- title -->
<h3 class="section-heading">

    degree programs

</h3>
<!-- END title -->

<?php if ( $degree_programs_content ) : ?>

<!-- description -->
<div id="department-degree-programs-description" class="degree-program-content">

    <!-- text -->
    <p>

        <?php echo $degree_programs_content; ?>

    </p>
    <!-- END text -->

    <!-- button -->
    <a href="/degree_programs" class="link-button">

        learn more

    </a>
    <!-- END button -->

</div>
<!-- END description -->

<?php endif; ?>

<!-- programs -->
<div id="department-degree-programs-list" class="degree-program-content">

    <!-- undergraduate -->
    <div class="program-list undergraduate-programs">

        <?php
        // switch to main site for query
        switch_to_blog( 1 );

        $args = array(
            'post_type' => 'degree_program',
            'orderby'   => 'order',
            'order'     => 'ASC',
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'department',
                    'field'    => 'slug',
                    'terms'    =>  array( $dept_slug )
                ),
                array(
                    'taxonomy' => 'academic_level',
                    'field'    => 'slug',
                    'terms'    =>  array( 'graduate' )
                ),
                array(
                    'taxonomy' => 'degree_type',
                    'operator' => 'EXISTS'
                )
            )
        );

        $programs = new WP_Query( $args );

        if ( $programs->have_posts() ) :
            while ( $programs->have_posts() ) : $programs->the_post();
                $ancestors = get_post_ancestors( $post->ID );
        ?>

        <a class="program-link" href="<?php the_permalink(); ?>">
            <?php
            if ( $ancestors[1] ) {
                echo get_post( $ancestors[0] )->post_title . ' &mdash; ';
            }

            the_title();
            ?>
        </a><!-- .program-link -->

        <?php
            endwhile; wp_reset_postdata();
        endif;

        // return to getting data from current site
        switch_to_blog( $currentsite );
        ?>

    </div>
    <!-- END undergraduate -->

</div>
<!-- END programs -->
