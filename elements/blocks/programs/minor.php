<?php
$bg_img = get_sub_field('img') ? 'style="background-image:url(' . get_sub_field('img') . ');"' : '' ;
$link = get_sub_field('link');
?>

<!-- minors -->
<div class="program-content program-row minors">

	<!-- image -->
	<div class="design-block">
		<div class="artwork" <?php echo $bg_img; ?>></div>
	</div>
	<!-- END image -->

	<!-- text -->
	<div class="content">

		<h3 class="title"><?php the_sub_field('heading'); ?></h3>

		<span class="minor-description">
			<?php the_sub_field('desc'); ?>
		</span>

		<button class="minor-link-button" data-link="<?php echo esc_url( $link['url'] ); ?>">
			<span class="button-text">
				<?php echo esc_attr( $link['title'] ); ?>
			</span>
		</button>

	</div>
	<!-- END text -->

</div>
<!-- END minors -->
