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
			<?php // the_sub_field('desc'); ?>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non dapibus lacus. Aenean sodales, mauris nec ornare eleifend, eros arcu molestie felis, id ornare est erat sed velit. Quisque hendrerit vitae justo a tristique. Nullam purus ipsum, venenatis ultricies dictum ac, lacinia eget dolor. Curabitur et rhoncus augue. Nullam aliquet tortor non ultricies blandit. Proin nec libero at sapien lobortis gravida eu non ipsum. Suspendisse pellentesque dapibus gravida. Sed faucibus elit in dignissim malesuada.</p>
		</span>

		<!-- button -->
		<button class="content-button" data-link="<?php // echo esc_url( $cta['url'] ); ?>">FIX: <?php // echo esc_attr( $cta['title'] ); ?> Button Text Goes Here</button>
		<!-- END button -->

	</div>
	<!-- END content wrapper -->

</div>
<!-- END tuition + financial aid -->

<?php
	endwhile;
endif;
