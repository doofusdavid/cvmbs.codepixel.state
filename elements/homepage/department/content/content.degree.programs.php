<?php

    // set global blog variable
    global $blog_id;

    // get global WP taxonomies
    global $wp_taxonomies;

    // taxonomies used for queries
    $tax_terms = array( 'department', 'academic_level', 'degree_type' );

    // set dynamic blog id
    $currentsite = $blog_id;

    // get site path
    $siteinfo = get_blog_details();

    // parse URL for site path
    $dept_slug = str_replace( '/', '', $siteinfo->path );

?>

<!-- degree.programs -->
<section id="department-degree-programs" class="dept-deg-progs homepage-section">

    <!-- visual FX -->
    <div class="design-layer">

        <!-- color -->
        <div class="color fx-layer layer">
            <!--  -->
        </div>
        <!-- END color -->

        <!-- image -->
        <div class="image fx-layer layer">
            <!-- -->
        </div>
        <!-- END image -->

    </div>
    <!-- END visual FX -->

    <!-- programs -->
    <div id="department-degree-programs-content" class="dept-deg-progs__content">

        <h2 class="section-heading">Degree Programs</h2>

        <?php
        // switch to main site for query
        switch_to_blog( 1 );

        // grant switch_to_blog() access to query taxonomies
        foreach ( $tax_terms as $term ) {
            if ( !taxonomy_exists( $term ) ) {
                $wp_taxonomies[$term] = '';
            }
        }
        ?>

        <?php
        $grad_args = array(
            'post_type'      => 'degree_program',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'posts_per_page' =>  99,
            'tax_query'      => array(
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

        $grad_degs = new WP_Query( $grad_args );

        if ( $grad_degs->have_posts() ) :
        ?>

        <div class="dept-deg-progs__type">

            <h3 class="dept-deg-progs__type-heading">Graduate Programs</h3>

            <div class="programs-container">

            <?php
            while ( $grad_degs->have_posts() ) : $grad_degs->the_post();
                $ancestors = get_post_ancestors( $post->ID );
            ?>

            <a class="program-link" href="<?php the_permalink(); ?>">
                <?php
                if ( $ancestors[1] ) {
                    echo '<span>' . get_post( $ancestors[0] )->post_title . '</span>';
                }

                the_title();
                ?>
            </a><!-- .program-link -->

            <?php endwhile; wp_reset_postdata(); ?>

            </div>

        </div><!-- .dept-deg-progs__type -->

        <?php endif; ?>


        <?php
        $undergrad_args = array(
            'post_type'      => 'degree_program',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'posts_per_page' =>  99,
            'tax_query'      => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'department',
                    'field'    => 'slug',
                    'terms'    =>  array( $dept_slug )
                ),
                array(
                    'taxonomy' => 'academic_level',
                    'field'    => 'slug',
                    'terms'    =>  array( 'undergraduate' )
                ),
                array(
                    'taxonomy' => 'degree_type',
                    'field'    => 'slug',
                    'terms'    =>  array( 'bs-concentration' )
                )
            )
        );

        $concentrations = new WP_Query( $undergrad_args );

        if ( $concentrations->have_posts() ) :
        ?>

        <div class="dept-deg-progs__type">

            <h3 class="dept-deg-progs__type-heading">Undergraduate Concentrations</h3>

            <div class="programs-container">

            <?php
            while ( $concentrations->have_posts() ) : $concentrations->the_post();
                $ancestors = get_post_ancestors( $post->ID );
            ?>

            <a class="program-link" href="<?php the_permalink(); ?>">
                <?php
                if ( $ancestors[1] ) {
                    echo '<span>' . get_post( $ancestors[0] )->post_title . '</span>';
                }

                the_title();
                ?>
            </a><!-- .program-link -->

            <?php endwhile; wp_reset_postdata(); ?>

            </div>

        </div><!-- .dept-deg-progs__type -->

        <?php endif; ?>


        <?php
        $minor_args = array(
            'post_type'      => 'degree_program',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'posts_per_page' =>  99,
            'tax_query'      => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'department',
                    'field'    => 'slug',
                    'terms'    =>  array( $dept_slug )
                ),
                array(
                    'taxonomy' => 'academic_level',
                    'field'    => 'slug',
                    'terms'    =>  array( 'undergraduate' )
                ),
                array(
                    'taxonomy' => 'degree_type',
                    'field'    => 'slug',
                    'terms'    =>  array( 'minor' )
                )
            )
        );

        $minors = new WP_Query( $minor_args );

        if ( $minors->have_posts() ) :
        ?>

        <div class="dept-deg-progs__type">

            <h3 class="dept-deg-progs__type-heading">Undergraduate Minors</h3>

            <div class="programs-container">

            <?php
            while ( $minors->have_posts() ) : $minors->the_post();
                $ancestors = get_post_ancestors( $post->ID );
            ?>

            <a class="program-link" href="<?php the_permalink(); ?>">
                <?php
                if ( $ancestors[1] ) {
                    echo '<span>' . get_post( $ancestors[0] )->post_title . '</span>';
                }

                the_title();
                ?>
            </a><!-- .program-link -->

            <?php endwhile; wp_reset_postdata(); ?>

            </div>

        </div><!-- .dept-deg-progs__type -->

        <?php endif; ?>


        <?php
        // return to getting data from current site
        switch_to_blog( $currentsite );
        ?>

    </div>
    <!-- END programs -->

</section>
<!-- END degree.programs -->
