<?php

    $layout = get_sub_field( 'layout' );

?>

<!-- image array -->
<div class="template-block image-array">

    <?php if ( $layout === 'three' ) : ?>

    <!-- three images -->
    <div class="content-row thirds">

        <?php $images = get_sub_field( 'three_images' ); ?>

        <?php foreach ( $images as $image ) : ?>

        <div class="content-block">

            <img src="<?php echo $image[ 'image' ]; ?>" alt="<?php echo $image[ 'alt_text' ]; ?>">

        </div>

        <?php endforeach; ?>

    </div>
    <!-- END three images -->

    <?php elseif ( $layout === 'two' ): ?>

    <!-- two images -->
    <div class="content-row halfsies">

        <?php $images = get_sub_field( 'two_images' ); ?>

        <?php foreach ( $images as $image ) : ?>

        <div class="content-block">

            <img src="<?php echo $image[ 'image' ]; ?>" alt="<?php echo $image[ 'alt_text' ]; ?>">

        </div>

        <?php endforeach; ?>

    </div>
    <!-- END two images -->

    <?php elseif ( $layout === 'single' ): ?>

    <!-- two images -->
    <div class="content-row full">

        <?php $images = get_sub_field( 'single_image' ); ?>

        <?php foreach ( $images as $image ) : ?>

        <div class="content-block">

            <img src="<?php echo $image[ 'image' ]; ?>" alt="<?php echo $image[ 'alt_text' ]; ?>">

        </div>

        <?php endforeach; ?>

    </div>
    <!-- END two images -->

    <?php endif; ?>

</div>
<!-- END image array -->
