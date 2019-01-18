
<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary programs archive" data-off-canvas-content>

	<!-- container -->
	<div class="content-container programs">

		<!-- overlay -->
        <div class="programs-overlay">

            <!--  -->

        </div>
        <!-- END overlay -->

	    <!-- content -->
	    <section class="programs-content">

			<!-- title -->
	        <h2 class="page-title">

				degree programs

			</h2>
	        <!-- END title -->

			<?php while ( have_posts() ) : the_post(); ?>

			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

			<?php endwhile; ?>

	    </section>
	    <!-- END content -->

        <?php get_template_part( 'elements/layout/layout.footer' ); ?>

	</div>
	<!-- END container -->

</main>
<!-- site.layout -->

<?php get_footer(); ?>
