<?php
if ( have_rows('tuition_financial_aid') ) :
	while ( have_rows('tuition_financial_aid') ) : the_row();
		$cta = get_sub_field('call_to_action');
?>

<!-- tuition + financial aid -->
<div class="program-content program-row tuition lite">

	<!-- content wrapper -->
	<div class="content-wrapper">

		<h2 class="title"><?php the_sub_field('heading'); ?></h2>

		<span class="content">
			<?php the_sub_field('desc'); ?>
		</span>

		<!-- button -->
		<button class="content-button" data-link="<?php echo esc_url( $cta['url'] ); ?>">FIX: <?php echo esc_attr( $cta['title'] ); ?></button>
		<!-- END button -->

	</div>
	<!-- END content wrapper -->

</div>
<!-- END tuition + financial aid -->

<?php
	endwhile;
endif;
