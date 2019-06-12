
<?php

    $image       = get_sub_field( 'image' );
    $image_width = $image[ 'width' ] . 'px';

?>

<div class="template-block">

    <div class="template-block__inner floated-image">

    	<figure class="floated-image--left" width="<?php echo $image[ 'width' ]; ?>">

			<?php echo wp_get_attachment_image( $image[ 'ID' ], 'large' ); ?>

			<?php if ( $image[ 'caption' ] ) : ?>

    		<figcaption class="floated-image__caption">

                <?php echo esc_attr( $image['caption'] ); ?>

			</figcaption>

    		<?php endif; ?>

		</figure><!-- .floated-image -->

		<?php the_sub_field( 'image_content' ); ?>

	</div><!--. template-block__inner -->

</div><!--. template-block -->
