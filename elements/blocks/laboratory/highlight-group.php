<?php
$bg_color = get_sub_field('bg_color');
$layout = get_sub_field('layout');
$heading = get_sub_field('heading');
$links = get_sub_field('links');

if ( have_rows('grid') ) :
?>

<section class="highlight-group bg--<?php echo esc_attr( $bg_color ); ?>">
	<div class="highlight-group__inner">
		<h2 class="highlight-group__title"><?php echo esc_attr( $heading ); ?></h2>

		<div class="highlight-group__grid grid--<?php echo esc_attr( $layout ); ?>-columns">

			<?php
			while ( have_rows('grid') ) : the_row();
				$icon_id = get_sub_field('icon_id');

				if ( $links ) :
					$link = get_sub_field('link_array');
			?>

			<a class="highlight-group__grid-item" href="<?php echo esc_url( $link['url'] ); ?>">
				<div class="highlight-group__grid-item-icon" aria-hidden="true">
					<?php echo wp_get_attachment_image( $icon_id, 'full' ); ?>
				</div><!-- .highlight-group__grid-item-icon -->
				<span class="highlight-group__grid-item-name"><?php echo esc_attr( $link['title'] ); ?></span>
			</a><!-- .highlight-group__grid-item -->

			<?php else : ?>

			<div class="highlight-group__grid-item">
				<div class="highlight-group__grid-item-icon" aria-hidden="true">
					<?php echo wp_get_attachment_image( $icon_id, 'full' ); ?>
				</div><!-- .highlight-group__grid-item-icon -->
				<span class="highlight-group__grid-item-name"><?php the_sub_field('label'); ?></span>
			</div><!-- .highlight-group__grid-item -->

			<?php
				endif;
			endwhile;
			?>

		</div><!-- .highlight-group__grid -->

	</div><!-- .highlight-group__inner -->
</section><!-- .highlight-group -->

<?php
endif;
