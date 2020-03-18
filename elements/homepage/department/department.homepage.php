<?php

    $site_image = get_field( 'site_background', 'options' );

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

?>

<style media="screen">

@media screen and ( max-width: 63.9375em ) {

    #emergency_alert {

        left: 2rem;

    }

}

#emergency_alert {

    position: fixed;

    top: 7rem;
    right: 2rem;

    z-index: 200;

    padding: 2rem 2rem 2rem 2rem;

    color: white;

    background-color: rgba( 255, 0, 0, 0.635 );

    box-shadow: 0 1rem 3.5rem 0 rgba( 0, 0, 0, 0.415 );

}

#emergency_alert a {

    color: white;

}

</style>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content department" data-off-canvas-content>

    <!-- emergency alert -->
    <div id="emergency_alert" class="ui_alert">

        <span class="message">

            CSU is closely monitoring and following COVID-19 [coronavirus] guidance as outlined by public health experts.

        </span>

        <a href="https://safety.colostate.edu/coronavirus">

            more information

        </a>

    </div>
    <!-- END emergency alert -->

    <!-- department.billboard -->
    <section id="department-billboard" class="department-billboard ui-billboard pattern" tabindex="-1" style="background-image:url(<?php echo $site_image; ?>);">

        <!-- billboard.title -->
        <header id="homepage-title" class="homepage-section">

            <?php
            if ( $department_options[ 'billboard_marketing_text' ] ) :

                get_template_part( 'elements/homepage/department/content/layout/layout.billboard.description' );
            else :

                get_template_part( 'elements/homepage/department/content/layout/layout.billboard.standalone' );

            endif;
            ?>

        </header>
        <!-- END billboard.title -->

    </section>
    <!-- END department.billboard -->

    <!-- department.content -->
    <div id="department-content" class="homepage-content department">

        <?php

        get_template_part( 'elements/homepage/department/content/content.banner' );

        get_template_part( 'elements/homepage/department/content/content.degree.programs' );

        get_template_part( 'elements/homepage/department/content/content.residencies' );

        get_template_part( 'elements/homepage/department/content/content.expertise' );

        if ( $department_options[ 'research_content' ][ 'display' ] ) {

            get_template_part( 'elements/homepage/department/content/content.research' );

        }

        get_template_part( 'elements/homepage/department/content/content.places' );

        // test for template part
        if ( $department_options[ 'outreach_content' ][ 'display' ] ) {

            get_template_part( 'elements/homepage/department/content/content.outreach' );

        }

        get_template_part( 'elements/homepage/department/content/content.news' );

        // test for template part
        if ( $department_options[ 'giving_content' ][ 'layout' ] ) {

            get_template_part( 'elements/homepage/department/content/content.giving.full' );

        } else {

            get_template_part( 'elements/homepage/department/content/content.giving.basic' );

        }

        ?>

    </div>
    <!-- END department.content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
