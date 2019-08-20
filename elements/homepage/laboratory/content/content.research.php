<?php

    $lab_options       = get_field( 'lab_homepage_options' );
    $research_projects = $lab_options[ 'research_projects' ];

?>

<!-- container -->
<section id="research-projects" class="laboratory-content laboratory-slideshow">

    <?php foreach ( $research_projects as $research_project ) :

    $project_title = $research_project[ 'project_title' ];
    $project_desc  = $research_project[ 'project_description' ];
    $project_image = $research_project[ 'project_image' ];
    $project_link  = $research_project[ 'project_link' ]; ?>

    <!-- slide -->
    <article class="research-slide ui-slide">

        <!-- image -->
        <div class="image-container" style="background-image:url(<?php echo $project_image; ?>)">

            <!-- empty -->

        </div>
        <!-- END image -->

        <!-- content -->
        <div class="content-wrapper">

            <!-- pattern -->
            <div class="pattern-overlay">

                <!--  -->

            </div>
            <!-- END pattern -->

            <!-- label -->
            <span class="project-label project-layer">

                research project

            </span>
            <!-- END label -->

            <!-- title -->
            <h2 class="project-layer">

                <?php echo $project_title; ?>

            </h2>
            <!-- END title -->

            <!-- text -->
            <p class="project-layer">

                <?php echo $project_desc; ?>

            </p>
            <!-- END text -->

            <?php if ( $project_link ) : ?>

            <!-- link -->
            <a class="project-link project-layer" href="<?php echo $project_link; ?>">

                view project

            </a>
            <!-- END link -->

            <?php endif; ?>

        </div>
        <!-- END content -->

    </article>
    <!-- END slide -->

    <?php endforeach; ?>

</section>
<!-- END container -->
