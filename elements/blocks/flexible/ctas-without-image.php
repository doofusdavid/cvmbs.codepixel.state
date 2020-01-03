<?php

	$h_level = get_sub_field('h_level');
	$layout = get_sub_field('layout');

	// heading options
	$heading_option  = get_sub_field( 'heading_option' );
	$heading_content = get_sub_field( 'heading' );

?>

<div class="template-block ctas-without-image">
	<div class="template-block__inner">

		<?php if ( $heading_option ) : ?>

            <<?php echo $heading_content[ 'html_tag' ]; ?> class="description-title">

                <?php echo $heading_content[ 'title' ]; ?>

            </<?php echo $heading_content[ 'html_tag' ]; ?>>

        <?php endif; ?>

		<?php if ( have_rows('ctas') ) : ?>

		<div class="ctas__grid grid--<?php echo esc_attr( $layout ); ?>-columns">

			<?php while ( have_rows('ctas') ) : the_row(); ?>

			<div class="ctas__grid-item ">
				<div class="ctas__grid-item-content">
					<<?php echo $h_level; ?> class="ctas__grid-item-heading">
						<?php the_sub_field('heading'); ?>
					</<?php echo $h_level; ?>>

					<?php if ( $desc = get_sub_field('desc') ) : ?>
					<p class="ctas__grid-item-desc">
						<?php echo esc_attr($desc); ?>
					</p><!-- .ctas__grid-item-desc -->
					<?php endif; ?>

					<?php $cta = get_sub_field('link'); ?>
					<p class="ctas__grid-item-link">
						<a href="<?php echo esc_url( $cta['url'] ); ?>" class="ctas__grid-item-btn"><?php echo esc_attr( $cta['title'] ); ?></a>
					</p><!-- .ctas__grid-item-link -->
				</div><!-- .ctas__grid-item-content -->
			</div><!-- .ctas__grid-item -->

			<?php endwhile; ?>

		</div><!-- ctas__grid -->
		<?php endif; ?>

	</div><!--. template-block__inner -->
</div><!--. template-block -->
