<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

?>

<!-- department.content -->
<div id="department-content" class="homepage-content department">

    <!-- homepage.intro -->
    <section id="department-banner" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.banner' ); ?>

    </section>
    <!-- END homepage.intro -->

    <?php

    get_template_part( 'elements/homepage/department/content/content.degree.programs' );

    ?>

    <!-- homepage.section -->
    <section id="department-expertise" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.expertise' ); ?>

    </section>
    <!-- END homepage.section -->

    <?php

    // giving content
    $research_content = $department_options[ 'research_content' ];

    // determine layout type
    $research_display = $research_content[ 'display' ];

    // test for template part
    if ( $research_display ) : ?>

    <!-- homepage.section -->
    <section id="department-research" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.research' ); ?>

    </section>
    <!-- END homepage.section -->

    <?php endif; ?>

    <!-- homepage.section -->
    <section id="department-places" class="homepage-section section-places">

        <?php get_template_part( 'elements/homepage/department/content/content.places' ); ?>

    </section>
    <!-- END homepage.section -->

    <?php

    // giving content
    $outreach_content = $department_options[ 'outreach_content' ];

    // determine layout type
    $outreach_display = $outreach_content[ 'display' ];

    // test for template part
    if ( $outreach_display ) : ?>

    <!-- service.outreach -->
    <section id="department-outreach" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.outreach' ); ?>

    </section>
    <!-- END service.outreach -->

    <?php endif; ?>

    <!-- news -->
    <section id="department-news" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.news' ); ?>

    </section>
    <!-- END news -->

    <?php

    // giving content
    $giving_content = $department_options[ 'giving_content' ];

    // determine layout type
    $giving_layout = $giving_content[ 'layout' ];

    // test for template part
    if ( $giving_layout ) : ?>

    <!-- giving -->
    <section id="department-giving" class="full homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.giving.full' );

    else : ?>

    <!-- giving -->
    <section id="department-giving" class="basic homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.giving.basic' );

    endif; ?>

    </section>
    <!-- END giving -->

</div>
<!-- END department.content -->
