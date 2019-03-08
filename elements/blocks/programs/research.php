<?php
$bg_img = get_sub_field('img') ? 'style="background-image:url(' . get_sub_field('img') .')";' : '';
?>

<!-- research opportunities -->
<div class="program-content program-row research lite">

	<!-- content wrapper -->
	<div class="content-wrapper">

		<!-- content half -->
		<div class="content left">

			<!-- title -->
			<h3 class="title">
				<?php _e( 'Research Opportunities', 'cvmbsPress' ); ?>
			</h3>
			<!-- END title -->

			<!-- content  -->
			<div class="content">
				<?php the_sub_field('desc'); ?>
			</div>
			<!-- END content  -->

		</div>
		<!-- END content half -->

		<!-- content half -->
		<div class="content right" style>

			<!-- opportunity -->
			<div class="research-opportunity" <?php echo $bg_img; ?>>

				<!-- contact box -->
				<span class="contact-box">
					<?php // echo $researcher_name; ?>
					<!-- <br/> -->
					<?php // echo $researcher_title; ?>
					<!-- <br/> -->
					<!-- <img src="<?php // echo $researcher_image[ 'url' ]; ?>" width="256" alt="foobar"/><br/> -->
					<?php // echo $researcher_email; ?>
				</span>
				<!-- END contact box -->

			</div>
			<!-- END opportunity -->

		</div>
		<!-- END content half -->

	</div>
	<!-- END content wrapper -->

</div>
<!-- END research opportunities -->
