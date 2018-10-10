<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary" data-off-canvas-content>

	<!-- content -->
	<div id="secondary-content" class="degree-program-content">

	    <!-- container -->
	    <div class="secondary-container">

	        <!-- main content -->
	        <div class="main-content-area">

                <?php if ( have_posts() ) : ?>

				<?php

                    while ( have_posts() ) : the_post();

                    // fields
                    $description = get_field( 'program_description' );

                ?>

				<!-- title -->
		        <h2 class="page-title">

					<?php the_title(); ?>

				</h2>
		        <!-- END title -->

				<section class="intro" role="main">

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						<div class="entry-content">

							<?php echo $description; ?>

						</div>

					</div>

				</section>

				<?php endwhile; ?>

                <?php endif; ?>

			</div>
        	<!-- END main content -->

			<!-- sidebar -->
	        <div class="main-content-sidebar">

	            <?php dynamic_sidebar( 'default-sidebar' ); ?>

	        </div>
	        <!-- END sidebar -->

	    </div>
	    <!-- END container -->

	</div>
	<!-- END content -->

	<?php get_footer(); ?>
