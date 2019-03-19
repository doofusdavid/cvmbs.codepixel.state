<?php
$bg_img_url = get_sub_field('bg_img_url');

if ( have_rows('facts') ) :
?>

<section class="fast-facts" style="background-image:url(<?php echo esc_url( $bg_img_url ); ?>);">
	<div class="fast-facts__inner">
		<div class="fast-facts__grid">

			<?php while ( have_rows('facts') ) : the_row(); ?>

			<div class="fast-fact">
				<span class="fast-fact__value"><?php the_sub_field('value'); ?></span>
				<span class="fast-fact__rate"><?php the_sub_field('rate'); ?></span>
				<span class="fast-fact__desc"><?php the_sub_field('desc'); ?></span>

				<?php if ( get_sub_field('source') ) : ?>

				<span class="fast-fact__source">(<?php the_sub_field('source'); ?>)</span>

				<?php endif; ?>
			</div>

			<?php endwhile; ?>

		</div><!-- .fast-facts__grid -->
	</div><!-- .fast-facts__inner -->
</section><!-- .fast-facts -->

<?php
endif;
