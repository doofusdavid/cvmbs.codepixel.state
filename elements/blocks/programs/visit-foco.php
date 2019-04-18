<?php
if ( have_rows( 'visit_foco', 'option' ) ) :
	while ( have_rows( 'visit_foco', 'option' ) ) : the_row();
?>

<!-- location -->
<div class="location program-block">

	<div class="location__inner">

		<div class="location__content">

			<h2 class="location__title program-block__title"><?php the_sub_field('heading'); ?></h2>

			<?php
			if ( get_sub_field('desc') ) :
				the_sub_field('desc');
			endif;

			if ( have_rows('ctas') ) :
				while ( have_rows('ctas') ) : the_row();
					$link = get_sub_field('link');
			?>

			<p class="location__cta">
				<a class="location__button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
			</p>

			<?php
				endwhile;
			endif;
			?>

		</div><!-- .location__content -->

	</div><!-- .location__inner -->

</div><!-- .location -->

<?php
	endwhile;
endif;
