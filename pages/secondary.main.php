<?php

	// template name: top-level secondary page

    $page_image = get_field( 'page_image' );
    $page_text  = get_field( 'page_text' );

?>

<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary main" data-off-canvas-content style="background-image:url(<?php echo $page_image; ?>);">

	<!-- container -->
	<div id="content-container" class="secondary-container">

        <!-- artwork -->
        <div class="secondary-artwork">

            <!--  -->

        </div>
        <!-- END artwork -->

	    <!-- content -->
	    <section class="secondary-content">

	        <!-- main content -->
	        <div class="content-area main">

				<?php while ( have_posts() ) : the_post(); ?>

				<!-- title -->
		        <h2 class="page-title">

					<?php the_title(); ?>

				</h2>
		        <!-- END title -->

                <!-- highlight text -->
                <span class="highlight-text">

                    <?php echo $page_text; ?>

                </span>
                <!-- END highlight text -->

				<section class="intro" role="main">

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						<div class="entry-content">

							<?php the_content(); ?>

						</div>

					</div>

				</section>

				<?php endwhile; ?>

			</div>
        	<!-- END main content -->

			<!-- sidebar -->
	        <div class="sidebar-area main">

	            <?php get_sidebar(); ?>

	        </div>
	        <!-- END sidebar -->

	    </section>
	    <!-- END content -->

        <?php get_template_part( 'elements/layout/layout.footer' ); ?>

	</div>
	<!-- END container -->

</main>
<!-- site.layout -->

<?php get_footer(); ?>
