<?php
if ( have_rows('program_intro') ) :
	while ( have_rows('program_intro') ) : the_row();
		$terms = wp_get_post_terms( $post->ID, 'academic_level' );

		$children = get_children( array(
			'post_parent' => $post->ID,
			'post_status' => 'publish',
			'tax_query'   =>  array( array(
				'taxonomy' => 'degree_type',
				'operator' => 'EXISTS'
			) )
		) );
?>

<div class="degree-program-intro program-block">

	<div class="degree-program-intro__content">

		<div class="degree-program-intro__desc">

			<?php the_sub_field('desc'); ?>

		</div><!-- .degree-program-intro__desc -->

		<?php if ( have_rows('buttons') ) : ?>
		<div class="degree-program-intro__sidebar">

			<?php
			while ( have_rows('buttons') ) : the_row();
				$link = get_sub_field('link');
			?>

			<a class="degree-program-intro__button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>

			<?php endwhile; ?>

		</div><!-- .degree-program-intro__sidebar -->
		<?php endif; ?>

	</div><!-- .degree-program-intro__content -->

	<?php
	if ( have_rows('notification_area') ) :
		while ( have_rows('notification_area') ) : the_row();
			if ( get_row_layout('notification') ) :
				if ( ! is_this_item_expired( get_sub_field('expiration') ) ) :
					$type = get_sub_field('type');
	?>
	<div class="degree-program__notification notification-block">
		<div class="notification-box box--<?php echo esc_attr( $type ); ?>">
			<div class="notification-box__content">
				<?php if ( get_sub_field('heading') ) : ?>
				<h2 class="notification-box__title">
					<?php the_sub_field('heading'); ?>
				</h2>
				<?php endif; ?>

				<?php the_sub_field('message'); ?>
			</div><!-- .notification-box__content -->
		</div><!-- .notification-box -->
	</div><!-- .degree-program__notification -->
	<?php
				endif; // is_this_item_expired()
			endif; // get_row_layout()
		endwhile; // the_row()
	endif; // have_rows()
	?>

	<?php
	if ( $children ) :
		$grid_size = ( count( $children ) < 3 ) ? 'large' : 'small';
	?>

	<div class="degree-program-intro__grid">

		<?php
		if ( $terms ) :
			if ( $terms[0]->slug == 'undergraduate' ) :
		?>

			<h2 class="degree-program-intro__grid-title"><?php _e( 'Concentrations', 'cvmbsPress' ); ?></h2>

			<?php elseif ( $terms[0]->slug == 'graduate' ) : ?>

			<h2 class="degree-program-intro__grid-title"><?php _e( 'Plans of Study', 'cvmbsPress' ); ?></h2>

		<?php
			endif;
		endif;
		?>

		<div class="degree-program-intro__grid-inner grid--<?php echo $grid_size; ?>">
			<?php foreach ( $children as $child ) : ?>
			<a href="<?php echo esc_url( get_permalink( $child->ID ) ); ?>" class="degree-program-intro__grid-item" style="background-image:url(<?php echo get_the_post_thumbnail_url(  $child->ID, 'fp-medium' ); ?>);">
				<span class="degree-program-intro__grid-item-name"><?php echo esc_attr( $child->post_title ); ?></span>
			</a><!-- .degree-program-intro__grid-item -->
			<?php endforeach; ?>
		</div><!-- .degree-program-intro__grid-inner -->

	</div><!-- .degree-program-intro__grid -->
	<?php endif; ?>
</div>

<?php
	endwhile;
endif;
