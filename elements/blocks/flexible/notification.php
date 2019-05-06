<?php
$expired = is_this_item_expired( get_sub_field('expiration') );

if ( ! ( $expired ) ) :
?>

<div class="template-block notification-block">
	<div class="template-block__inner notification-block__inner">
		<div class="notification-box">
			<div class="notification-box__image">
				<img class="notification-box__image" src="<?php echo esc_url( get_template_directory_uri() . '/dist/assets/img/icons/admin/icon_close.svg'); ?>" alt="">
			</div>

			<div class="notification-box__content">
				<?php if ( get_sub_field('heading') ) : ?>
				<h2 class="notification-box__title"><?php the_sub_field('heading'); ?></h2>
				<?php endif; ?>

				<?php the_sub_field('message'); ?>
			</div><!-- .notification-box__content -->
		</div>
	</div><!-- .template-block__inner -->
</div>

<?php
endif;
