<?php

	// template name: default secondary page

	$show_image = get_field( 'page_image_option' );
    $page_image = get_field( 'page_image' );

?>

<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary default" data-off-canvas-content style="background-image:url(<?php echo $page_image; ?>);">

	<!-- container -->
	<div id="content-container" class="secondary-container">

		<!-- artwork -->
        <div class="base-artwork artwork-layer">

            <!--  -->

        </div>
        <!-- END artwork -->

        <!-- artwork -->
        <div class="image-artwork artwork-layer">

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
