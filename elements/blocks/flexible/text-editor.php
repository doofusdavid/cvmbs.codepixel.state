<?php
$block_width = get_sub_field('block_width') ? '--full' : '--fixed';
?>

<div class="template-block">
	<div class="template-block__inner<?php echo $block_width; ?>">
		<?php the_sub_field('content'); ?>
	</div><!--. template-block__inner<?php echo $block_width; ?> -->
</div><!--. template-block -->
