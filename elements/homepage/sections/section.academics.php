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
    <div class="section-image" data-load="pending" data-background="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/billboards/billboard.09.jpg">

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
    <div id="academics-content" class="section-content">

        <!-- program list -->
        <div id="programs-list">

            <?php

                while ( $degree_programs->have_posts() ) : $degree_programs->the_post();

                $program_name = get_the_title();
                $program_link = get_the_permalink();
                $description  = get_field( 'program_description' );

            ?>

            <article class="degree-program link" data-url="<?php echo $program_link; ?>">

                <span class="name"><?php echo $program_name; ?></span>
                <span class="text"><?php echo $description; ?></span>

            </article>

            <?php endwhile; ?>

        </div>
        <!-- END program list -->

    </div>
    <!-- END content -->

</div>
<!-- END container -->
