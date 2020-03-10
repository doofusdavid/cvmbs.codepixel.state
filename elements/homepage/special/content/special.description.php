<?php

    // PRSE option
    $prse_option = get_sub_field( 'prse_option' );

    if ( $prse_option ) {

        $desc_class = 'prse';

    } else {

        $desc_class = 'standard';

    }

?>

<!-- description -->
<section class="special-description">

    <?php

        // heading options
        $heading_option  = get_sub_field( 'heading_option' );
        $heading_content = get_sub_field( 'heading' );

        if ( $heading_option ) : ?>

            <<?php echo $heading_content[ 'html_tag' ]; ?> class="description-title">

                <?php echo $heading_content[ 'title' ]; ?>

            </<?php echo $heading_content[ 'html_tag' ]; ?>>

        <?php endif; ?>

    <!-- text -->
    <div class="description <?php echo $desc_class; ?>">

        <!-- unit description -->
        <div class="unit_description">

            <?php the_sub_field( 'content' ); ?>

        </div>
        <!-- END unit description -->

        <?php if ( $prse_option ) : ?>

        <!-- prse description -->
        <div class="prse_description">

            <!-- title -->
            <span class="title">

                program of research and scholarly excellence

            </span>
            <!-- END title -->

            <!-- text -->
            <span class="text">

                Programs are awarded this designation because they have achieved great distinction and set a standard for excellence in research, teaching and service that may serve as a model for programs throughout CSU and externally.

            </span>
            <!-- END text -->

            <!-- link -->
            <a href="https://www.research.colostate.edu/prse/">

                learn more about PRSE

            </a>
            <!-- END link -->

        </div>
        <!-- END prse description -->

        <?php endif; ?>

    </div>
    <!-- END text -->

</section>
<!-- END description -->
