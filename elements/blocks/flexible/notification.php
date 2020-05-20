<?php

	$expired = is_this_item_expired( get_sub_field( 'expiration' ) );

	if ( ! ( $expired ) ) :

	$type = get_sub_field( 'type' );

?>

<!-- .notification-block -->
<div class="template-block notification-block">

	<!-- .notification-box -->
	<div class="notification-box box--<?php echo esc_attr( $type ); ?>">

		<!-- .notification-box__content -->
		<div class="notification-box__content">

			<?php if ( get_sub_field('heading') ) : ?>

			<h2 class="notification-box__title"><?php the_sub_field('heading'); ?></h2>

			<?php endif; ?>

			<?php the_sub_field('message'); ?>

		</div>
		<!-- .notification-box__content -->

	</div>
	<!-- .notification-box -->

</div>
<!-- .notification-block -->

<?php endif; ?>
