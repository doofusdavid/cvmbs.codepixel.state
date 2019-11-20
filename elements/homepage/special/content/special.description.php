
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
    <div class="description-text">

        <?php the_sub_field( 'content' ); ?>

    </div>
    <!-- END text -->

</section>
<!-- END description -->
