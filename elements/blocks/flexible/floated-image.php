<?php
$img = get_sub_field('img');
$img_width = $img['width'] . 'px';
?>

<div class="template-block">
	<div class="template-block__inner floated-image">
		<figure class="floated-image--left" width="<?php echo $img['width']; ?>">

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
