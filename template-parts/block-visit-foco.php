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

		<span class="content">

			<?php the_sub_field('desc'); ?>

		</span>

		<!-- button -->
		<button class="content-button">

			FIX: schedule a tour of campus

		</button>
		<!-- END button -->

	</div>
	<!-- END content wrapper -->

</div>
<!-- END location -->

<?php
	endwhile;
endif;
