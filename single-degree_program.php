<?php
get_header();

$block_path = 'elements/blocks/programs/';

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';
?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content" data-off-canvas-content>

	<!-- content container -->
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

		<?php

		get_template_part( $block_path . 'intro' );

		get_template_part( $block_path . 'children' );

		if ( have_rows('program_blocks') ) :

			while ( have_rows('program_blocks') ) : the_row();

				if ( get_row_layout() == 'app_info') :

					get_template_part( $block_path . 'app-info' );

				elseif ( get_row_layout() == 'career_opportunities') :

					get_template_part( $block_path . 'careers' );

				elseif ( get_row_layout() == 'potential_employers') :

					get_template_part( $block_path . 'employers' );

				elseif ( get_row_layout() == 'program_contacts') :

					get_template_part( $block_path . 'contacts' );

				elseif ( get_row_layout() == 'program_facts' ) :

					get_template_part( $block_path . 'facts' );

				elseif ( get_row_layout() == 'research_opportunities') :

					get_template_part( $block_path . 'research' );

				elseif ( get_row_layout() == 'student_orgs') :

					get_template_part( $block_path . 'orgs' );

				elseif ( get_row_layout() == 'video') :

					get_template_part( $block_path . 'video' );

				// elseif ( get_row_layout() == 'concentrations') :

				// 	get_template_part( $block_path . 'concentrations' );

				// elseif ( get_row_layout() == 'minor') :

				// 	get_template_part( $block_path . 'minor' );

				// elseif ( get_row_layout() == 'similar_majors') :

				// 	get_template_part( $block_path . 'majors' );

				else:

					// no blocks found

				endif;

			endwhile;

		endif;

		get_template_part( $block_path . 'financial' );

		get_template_part( $block_path . 'visit-foco' );

		?>

		<?php
			endwhile;
		endif;

		get_template_part( 'elements/layout/layout.footer' );
		?>

	</div>
	<!-- END content container -->

</main>
<!-- site.layout -->

<?php get_footer(); ?>
