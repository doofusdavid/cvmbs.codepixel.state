<?php
get_header();

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : '';
?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary" data-off-canvas-content>

	<!-- content container -->
	<div class="degree-program-container">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>

		<!-- header -->
		<header class="degree-program-header" <?php echo $header_bg; ?>>
			<span class="program-navigation">degree program</span>
			<h2 class="program-title"><?php the_title(); ?></h2>
		</header>
		<!-- END header -->

		<!-- content -->
		<div class="degree-program-content">
			<?php

				if( $program_video ) {

					get_template_part( 'elements/degree.programs/degree.programs.video' );

				}

			?>

			<?php

			get_template_part( 'template-parts/block', 'program-intro' );

			if ( have_rows('program_blocks') ) :

				while ( have_rows('program_blocks') ) : the_row();

					if ( get_row_layout() == 'program_facts' ) :

						get_template_part( 'template-parts/block', 'program-facts' );

					elseif ( get_row_layout() == 'concentrations') :

						get_template_part( 'template-parts/block', 'program-concentrations' );

					elseif ( get_row_layout() == 'career_opportunities') :

						get_template_part( 'template-parts/block', 'program-careers' );

					elseif ( get_row_layout() == 'potential_employers') :

						get_template_part( 'template-parts/block', 'program-employers' );

					elseif ( get_row_layout() == 'student_orgs') :

						get_template_part( 'template-parts/block', 'program-orgs' );

					elseif ( get_row_layout() == 'minor') :

						get_template_part( 'template-parts/block', 'program-minor' );

					elseif ( get_row_layout() == 'similar_majors') :

						get_template_part( 'template-parts/block', 'program-majors' );

					elseif ( get_row_layout() == 'research_opportunities') :

						get_template_part( 'template-parts/block', 'program-research' );

					elseif ( get_row_layout() == 'program_contacts') :

						get_template_part( 'template-parts/block', 'program-contacts' );

					else:

						// no blocks found

					endif;

				endwhile;

			endif;

			get_template_part( 'template-parts/block', 'program-financial' );

			get_template_part( 'template-parts/block', 'visit-foco' );

			?>

		</div>
		<!-- END content -->

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
