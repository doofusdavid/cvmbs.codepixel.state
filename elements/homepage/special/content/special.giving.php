<?php

    $giving_layout  = get_sub_field( 'giving_option' );

    $giving_content = get_sub_field( 'content' );

?>

<!-- giving -->
<section class="homepage-section giving">

    <!-- visual FX -->
    <div class="design-layer">

        <!-- image -->
        <div class="image fx-layer layer" style="background-image:url(<?php echo $giving_content[ 'background' ]; ?>)">

            <!-- empty -->

        </div>
        <!-- END image -->

        <!-- color -->
        <div class="color fx-layer layer">

            <!--  -->

        </div>
        <!-- END color -->

    </div>
    <!-- END visual FX -->

    <!-- content -->
    <div class="content-layer">

        <?php if ( $giving_layout ) : ?>

        <span class="text">

            <?php echo $giving_content[ 'text' ]; ?>

        </span>

        <?php endif; ?>

        <a href="<?php echo $giving_content[ 'link' ][ 'url' ]; ?>" class="content-button">

            <?php echo $giving_content[ 'link' ][ 'title' ]; ?>

        </a>

    </div>
    <!-- END content -->

</section>
<!-- END giving -->
