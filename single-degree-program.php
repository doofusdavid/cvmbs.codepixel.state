<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary" data-off-canvas-content>

	<!-- content container -->
	<div class="degree-program-container">

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php

			// fields
			$description   = get_field( 'program_description' );
			$degree_type   = get_field( 'degree_type' );
			$program_img   = get_field( 'program_image' );
			$header_url    = $program_img[ 'url' ];
			$program_video = get_field( 'program_video' );

		?>

		<!-- header -->
		<header class="degree-program-header" style="background-image:url(<?php echo $header_url; ?>);">

			<!-- title -->
			<h2 class="program-title">

				<?php the_title(); ?>

			</h2>
			<!-- END title -->

			<!-- subtitle -->
			<span class="program-subtitle">

				<!-- get a degree you can use to become filthy rich some day -->

			</span>
			<!-- END subtitle -->

		</header>
		<!-- END header -->

		<!-- content -->
		<div class="degree-program-content">

			<div class="program-content">

				<span class="content-label">

					program description

				</span>

				<span class="content-output">

					<?php echo $description; ?>

				</span>

			</div>

			<div class="program-content">

				<span class="content-label">

					degree type

				</span>

				<span class="content-output">

					<?php echo $degree_type; ?>

				</span>

			</div>

			<div class="program-content">

				<span class="content-label">

					program video

				</span>

				<span class="content-output">

					<?php echo $program_video; ?>

				</span>

			</div>

		</div>
		<!-- END content -->

		<?php endwhile; ?>

		<?php endif; ?>

	</div>
	<!-- END content container -->

	<?php get_footer(); ?>
