
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

				<!-- title -->
		        <h2 class="page-title">

					degree programs

				</h2>
		        <!-- END title -->

				<?php while ( have_posts() ) : the_post(); ?>

				<section class="intro" role="main">

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						<div class="entry-content">

							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

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
