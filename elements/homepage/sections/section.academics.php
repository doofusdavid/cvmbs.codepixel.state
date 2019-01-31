<?php

    $degree_programs_query = array(

        'post_type' => 'degree-program',
        'orderby'   => 'rand',

    );

    $degree_programs = new WP_Query( $degree_programs_query );

?>

<!-- container -->
<div class="article-container">

    <!-- background.image -->
    <div class="section-image collapsed" data-background="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/billboard.09.jpg">

        <!-- empty -->

    </div>
    <!-- END background.image -->

    <!-- background.color -->
    <div class="section-base">

        <!-- empty -->

    </div>
    <!-- END background.color -->

    <!-- title -->
    <span class="section-title">

        academic degree programs

    </span>
    <!-- END title -->

    <!-- content -->
    <div id="degree-programs-content" class="section-content">

        <?php get_template_part( 'elements/homepage/sections/degree.programs/degree.programs' ); ?>

    </div>
    <!-- END content -->

</div>
<!-- END container -->
