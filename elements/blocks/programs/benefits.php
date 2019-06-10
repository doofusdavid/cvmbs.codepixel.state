<?php
if ( have_rows('compensation_and_benefits') ) :
	while ( have_rows('compensation_and_benefits') ) : the_row();
?>

<div class="financial type--resident">

	<div class="financial__inner">

		<div class="financial__content">

			<h2 class="financial__title program-block__title"><?php the_sub_field('heading'); ?></h2>

			<?php
			if ( get_sub_field('desc') ) :
				the_sub_field('desc');
			endif;

			if ( have_rows('ctas') ) :
				while ( have_rows('ctas') ) : the_row();
					$link = get_sub_field('link');
			?>

			<p class="financial__cta">
				<a class="financial__button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
			</p>

			<?php
				endwhile;
			endif;
			?>

		</div>

	</div><!-- .financial__inner -->

</div><!-- .financial -->

<?php
	endwhile;
endif;
