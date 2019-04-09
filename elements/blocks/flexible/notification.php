<?php
$expired = is_this_item_expired( get_field('notification_expire') );

if ( ! ( $expired ) ) :
?>

<div class="template-block notification-block">
	<div class="template-block__inner notification-block__inner">
		<div class="notification-box">
			<?php the_field('notification_msg'); ?>
		</div>
	</div><!-- .template-block__inner -->
</div>

<?php
endif;
