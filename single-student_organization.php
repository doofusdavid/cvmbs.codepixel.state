<?php
get_header();

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="student-orgs__header" <?php echo $header_bg; ?>>
				<div class="student-orgs__header-inner">
					<h1 class="student-orgs__header-title">
						<?php the_title(); ?>
					</h1><!-- .student-orgs__header-title -->
				</div><!-- .student-orgs__header-inner -->
			</header><!-- .student-orgs__header -->

			<div class="student-org__content">
				<div class="student-org__content-inner">
					<?php the_content(); ?>
				</div><!-- .student-org__content-inner -->
			</div><!-- .student-org__content -->

		</article><!-- #post-<?php the_ID(); ?> -->

	<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
