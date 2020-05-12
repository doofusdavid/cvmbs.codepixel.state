<?php

	$img = get_sub_field('img');
	$png = get_sub_field( 'image_type' );
	$img_width = $img['width'] . 'px';
	$img_pos = get_sub_field('img_pos');

	// heading options
	$heading_option  = get_sub_field( 'heading_option' );
	$heading_content = get_sub_field( 'heading' );

?>

<div class="template-block floated-image">

	<div class="template-block__inner">

		<?php if ( $heading_option ) : ?>

            <<?php echo $heading_content[ 'html_tag' ]; ?> class="description-title">

                <?php echo $heading_content[ 'title' ]; ?>

            </<?php echo $heading_content[ 'html_tag' ]; ?>>

        <?php endif; ?>

		<figure class="floated-image--<?php echo esc_attr( $img_pos ); ?> <?php if( $png ) { echo 'transparent'; } ?>" width="<?php echo $img['width']; ?>">

			<?php echo wp_get_attachment_image( $img['ID'], 'large' ); ?>

			<?php if ( $img['caption'] ) : ?>
			<figcaption class="floated-image__caption">
				<?php echo esc_attr( $img['caption'] ); ?>
			</figcaption>
			<?php endif; ?>

		</figure><!-- .floated-image -->

		<?php the_sub_field('content'); ?>
	</div><!--. template-block__inner -->
</div><!--. template-block -->
