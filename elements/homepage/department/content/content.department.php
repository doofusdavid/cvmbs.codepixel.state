<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

?>

<!-- department.content -->
<section id="department-content" class="homepage-content department">

    <!-- homepage.intro -->
    <article id="department-banner" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.banner' ); ?>

    </article>
    <!-- END homepage.intro -->

    <!-- degree.programs -->
    <article id="department-degree-programs" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.degree.programs' ); ?>

    </article>
    <!-- END degree.programs -->

    <?php

    // giving content
    $research_content = $department_options[ 'research_content' ];

    // determine layout type
    $research_display = $research_content[ 'display' ];

    // test for template part
    if ( $research_display ) : ?>

    <!-- homepage.section -->
    <article id="department-research" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.research' ); ?>

    </article>
    <!-- END homepage.section -->

    <?php endif; ?>

    <!-- homepage.section -->
    <article id="department-places" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.places' ); ?>

    </article>
    <!-- END homepage.section -->

    <?php

    // giving content
    $outreach_content = $department_options[ 'outreach_content' ];

    // determine layout type
    $outreach_display = $outreach_content[ 'display' ];

    // test for template part
    if ( $outreach_display ) : ?>

    <!-- service.outreach -->
    <article id="department-outreach" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.outreach' ); ?>

    </article>
    <!-- END service.outreach -->

    <?php endif; ?>

    <!-- news -->
    <article id="department-news" class="homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.news' ); ?>

    </article>
    <!-- END news -->

    <?php

    // giving content
    $giving_content = $department_options[ 'giving_content' ];

    // determine layout type
    $giving_layout = $giving_content[ 'layout' ];

    // test for template part
    if ( $giving_layout ) : ?>

    <!-- giving -->
    <article id="department-giving" class="full homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.giving.full' );

    else : ?>

    <!-- giving -->
    <article id="department-giving" class="basic homepage-section">

        <?php get_template_part( 'elements/homepage/department/content/content.giving.basic' );

    endif; ?>

    </article>
    <!-- END giving -->

</section>
<!-- END department.content -->
