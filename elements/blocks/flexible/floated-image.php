<?php
$block_width = get_sub_field('block_width') ? '--full' : '--fixed';
$img = get_sub_field('img');
$img_width = $img['width'] . 'px';
?>

<div class="template-block">
	<div class="template-block__inner<?php echo $block_width; ?> floated-image">
		<figure class="floated-image--left" width="<?php echo $img['width']; ?>">

			<?php echo wp_get_attachment_image( $img['ID'], 'large' ); ?>

			<?php if ( $img['caption'] ) : ?>
			<figcaption class="floated-image__caption">
				<?php echo esc_attr( $img['caption'] ); ?>
			</figcaption>
			<?php endif; ?>

		</figure><!-- .floated-image -->

		<?php the_sub_field('content'); ?>
	</div><!--. template-block__inner<?php echo $block_width; ?> -->
</div><!--. template-block -->
