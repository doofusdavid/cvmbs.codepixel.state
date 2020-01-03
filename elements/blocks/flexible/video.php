<?php

	if ( $video_id = get_sub_field('video_id') ) :

	// heading options
	$heading_option  = get_sub_field( 'heading_option' );
	$heading_content = get_sub_field( 'heading' );

?>

<div class="template-block video">

	<div class="template-block__wrap">

		<?php if ( $heading_option ) : ?>

            <<?php echo $heading_content[ 'html_tag' ]; ?> class="description-title">

                <?php echo $heading_content[ 'title' ]; ?>

            </<?php echo $heading_content[ 'html_tag' ]; ?>>

        <?php endif; ?>

		<div class="layered-video__wrap">

			<div class="layered-video__inner">

				<iframe width="960" height="540" src="https://www.youtube.com/embed/<?php echo esc_attr($video_id); ?>" frameborder="0" allowfullscreen></iframe>

			</div><!-- .layered-video__inner -->

		</div><!-- .layered-video__wrap -->

	</div><!-- .template-block__wrap -->

</div><!-- .template-block -->

<?php endif; ?>
