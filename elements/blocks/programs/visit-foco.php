<?php
if ( have_rows( 'visit_foco', 'option' ) ) :
	while ( have_rows( 'visit_foco', 'option' ) ) : the_row();
		$foco_bg = get_sub_field('bg_img') ? 'style="background-image:url(' . esc_url( get_sub_field('bg_img') ) . ');"' : '';
?>

<!-- location -->
<div class="location program-block">

	<div class="location__inner">

		<div class="location__content">

			<h2 class="location__title program-block__title"><?php the_sub_field('heading'); ?></h2>

			<?php
			if ( get_sub_field('desc') ) :
				the_sub_field('desc');
			else:
				echo '<p>Fort Collins blends education and industry, hard work and outdoor recreation, tradition and progress. If you’re looking for a college experience with the perfect fusion of culture, opportunity and adventure, Fort Collins is where you’ll find it. Located at the foothills of the Rocky Mountains, Fort Collins provides extensive access to hundreds of miles of trails for biking and hiking, world-class fishing and rock climbing, and camping, all in an area with over 300 days of sun per year.</p>';
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
