<?php
if ( have_rows( 'visit_foco', 'option' ) ) :
	while ( have_rows( 'visit_foco', 'option' ) ) : the_row();
		$foco_bg = get_sub_field('bg_img') ? 'style="background-image:url(' . esc_url( get_sub_field('bg_img') ) . ');"' : '';
?>

<!-- location -->
<div class="program-content program-row location dark" <?php echo $foco_bg; ?>>

	<!-- content wrapper -->
	<div class="content-wrapper">

		<h3 class="title"><?php the_sub_field('heading'); ?></h3>

		<div class="content">

			<?php if ( get_sub_field('desc') ) : ?>

				<?php the_sub_field('desc'); ?>

			<?php else: ?>

				<p>Fort Collins blends education and industry, hard work and outdoor recreation, tradition and progress. If you’re looking for a college experience with the perfect fusion of culture, opportunity and adventure, Fort Collins is where you’ll find it. Located at the foothills of the Rocky Mountains, Fort Collins provides extensive access to hundreds of miles of trails for biking and hiking, world-class fishing and rock climbing, and camping, all in an area with over 300 days of sun per year.</p>

			<?php endif; ?>

		</div>

		<?php
		if ( have_rows('ctas') ) :
			while ( have_rows('ctas') ) : the_row();
				$link = get_sub_field('link');
		?>
			<!-- button -->
			<a class="content-button" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
			<!-- END button -->
		<?php
			endwhile;
		endif;
		?>

	</div>
	<!-- END content wrapper -->

</div>
<!-- END location -->

<?php
	endwhile;
endif;
