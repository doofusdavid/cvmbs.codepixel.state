<?php
get_header();

$block_path = 'elements/blocks/programs/';

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';
?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content" data-off-canvas-content>

	<div class="degree-program-container">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>

		<header class="degree-program-header" <?php echo $header_bg; ?>>
			<div class="degree-program-header__inner">
				<h1 class="degree-program-header__title">
					<?php
					$ancestors = get_post_ancestors( $post->ID );

					if ( $ancestors[1] ) {
						$parent_degree = get_post( $ancestors[0] );
						echo '<span class="degree-program-header__parent">' . $parent_degree->post_title . '</span>';
					} elseif ( $ancestors[0] ) {
						echo '<span class="degree-program-header__parent">' . __( 'Degree Program', 'cvmbsPress' ) . '</span>';
					}
					?>

					<?php the_title(); ?>
				</h1><!-- .degree-program-header__title -->
			</div><!-- .degree-program-header__inner -->
		</header><!-- .degree-program-header -->

		<div class="degree-program-content">
			<div class="degree-program-content__inner">
				<?php the_content(); ?>
			</div><!-- .degree-program-content__inner -->
		</div><!-- .degree-program-content -->

		<?php
			endwhile;
		endif;
		?>

	</div><!-- .degree-program-container -->

</main>
<!-- site.layout -->

<?php
get_template_part( 'elements/layout/layout.footer' );

get_footer();
