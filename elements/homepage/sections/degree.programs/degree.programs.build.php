<!-- content.layers -->
<div class="content-layers">

    <!-- visual FX -->
    <div class="design-layer">

        <!-- color + gradient -->
        <div class="color-layer fx-layer layer">

            <!-- ball so hard -->

        </div>
        <!-- END color + gradient -->

        <!-- pattern -->
        <div class="pattern-layer fx-layer">

            <!-- ball so hard -->

        </div>
        <!-- END pattern -->

    </div>
    <!-- END visual FX -->

    <!-- title -->
    <h3 id="degree-programs-title" class="loaded">

        explore degree programs by

    </h3>
    <!-- END title -->

    <!-- explore programs -->
    <div id="explore-degrees" class="programs-panel" data-active="null">

        <!-- intro -->
        <div id="explore-degrees-intro" class="programs-panel-intro">

            <!-- panel.title -->
            <span class="panel-title">

                <!-- explore academic programs<br />by <em>degree type</em> -->
                <em>degree type</em>

            </span>
            <!-- END panel.title -->

            <!-- section.text -->
            <span class="section-text">

                discover academic opportunities<br />that best suit your academic or professional timeline

            </span>
            <!-- END section.text -->

            <!-- explore.button -->
            <button id="explore-degrees-button" class="explore-button corners-button" data-content="degrees">

                <span class="corners left"></span>

                explore degree programs

                <span class="corners right"></span>

            </button>
            <!-- END explore.button -->

        </div>
        <!-- END intro -->

        <!-- button -->
        <button id="collapse-degrees" class="close-button inactive">

            <!-- close icon -->
            <svg class="icon close-menu" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">

                <path fill="#FFFFFF" d="M24,19.8L34.6,9.2l4.2,4.2L28.2,24l10.6,10.6l-4.2,4.2L24,28.2L13.4,38.8l-4.2-4.2L19.8,24L9.2,13.4l4.2-4.2 L24,19.8z"/>

            </svg>
            <!-- END close icon -->

        </button>
        <!-- END button -->

        <!-- content -->
        <div id="explore-degrees-content" class="programs-panel-content">

            {{> academics.content.degrees }}

        </div>
        <!-- END content -->

    </div>
    <!-- END explore programs -->

    <!-- explore careers -->
    <div id="explore-careers" class="programs-panel" data-active="null">

        <!-- intro -->
        <div id="explore-careers-intro" class="programs-panel-intro">

            <!-- panel.title -->
            <span class="panel-title">

                <!-- explore academic programs<br />by <em>career interests</em> -->
                <em>career interests</em>

            </span>
            <!-- END panel.title -->

            <!-- section.text -->
            <span class="section-text">

                discover academic opportunities<br />that best suit your skill set and interests

            </span>
            <!-- END section.text -->

            <!-- explore.button -->
            <button id="explore-careers-button" class="explore-button corners-button" data-content="careers">

                <span class="corners left"></span>

                explore potential careers

                <span class="corners right"></span>

            </button>
            <!-- END explore.button -->

        </div>
        <!-- END intro -->

        <!-- button -->
        <button id="collapse-careers" class="close-button inactive">

            <!-- close icon -->
            <svg class="icon close-menu" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">

                <path fill="#FFFFFF" d="M24,19.8L34.6,9.2l4.2,4.2L28.2,24l10.6,10.6l-4.2,4.2L24,28.2L13.4,38.8l-4.2-4.2L19.8,24L9.2,13.4l4.2-4.2 L24,19.8z"/>

            </svg>
            <!-- END close icon -->

        </button>
        <!-- END button -->

        <!-- content -->
        <div id="explore-careers-content" class="programs-panel-content">

            {{> academics.content.tags }}

            {{> academics.content.cards }}

        </div>
        <!-- END content -->

    </div>
    <!-- END explore careers -->

    <!-- academics toolbar -->
    <toolbar id="academics-toolbar" class="ui-section-toolbar">

        <!--  -->

    </toolbar>
    <!-- END academics toolbar -->

</div>
<!-- END content.layers -->

<!-- program list -->
<div id="programs-list">

    <?php

        while ( $degree_programs->have_posts() ) : $degree_programs->the_post();

        $program_name  = get_the_title();
        $program_link  = get_the_permalink();
        $program_image = get_field( 'program_image' );
        $header_image  = $program_image[ 'url' ];
        $description   = get_field( 'program_description' );
        $output        = get_post();
        $careerlist    = get_the_terms( $post, 'career_interests' );

    ?>

    <article class="degree-program link" data-url="<?php echo $program_link; ?>">

        <!-- header -->
        <!-- <header class="program-header" style="background-image:url(<?php echo $header_image; ?>)"> -->
        <header class="program-header">

            <span>

                <?php echo $program_name; ?>

            </span>

        </header>
        <!-- END header -->

        <!-- content -->
        <section class="program-content">

            <?php echo $description; ?>

        </section>
        <!-- END content -->

        <span class="name"><?php echo $program_name; ?></span>
        <span class="text"><?php echo $description; ?></span>

    </article>

    <?php endwhile; ?>

</div>
<!-- END program list -->
