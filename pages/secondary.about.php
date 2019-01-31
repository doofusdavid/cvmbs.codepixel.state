<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'full' ) . ');"' : '';

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="secondary-page-header" <?php echo $header_bg; ?>>
					<div class="secondary-page-header_inner">
						<div class="secondary-page-header_content">
							<div class="secondary-page-header_content-wrap">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

								<p>Founded in 1907, The College of Veterinary Medicine and Biomedical Sciences (CVMBS) is a foundational part of CSU – a top-tier university with annual research expenditures of about $320 million.</p>

								<p>Many of our nearly 900 motivated scientists will go on to professional graduate programs, like medical school, veterinary school, dental school, or pharmacy school. Others will pursue graduate studies or jump directly into careers.</p>
							</div>
						</div><!-- .secondary-page-header_content -->
					</div><!-- .secondary-page-header_inner -->
				</header><!-- .secondary-page-header -->

				<section class="call-out">
					<div class="call-out_inner">
						<div class="call-out_content">
							<h2 class="call-out_title">Mission</h2>

							<div class="call-out_content-wrap">
								<p>We improve the health of animals, people, and the planet through innovative and dedicated teaching, research, outreach, and clinical service. Though our actions, we inspire the next generation of leaders.</p>
							</div><!-- .call-out_content-wrap -->
						</div><!-- .call-out_content -->
					</div><!-- .call-out_inner -->
				</section><!-- .call-out -->

				<section class="fast-facts">
					<div class="fast-facts-content">
						<div class="fast-facts-content_inner">
							<div class="fast-facts-grid">
								<div class="fast-fact">
									<span class="fast-fact_value">$44</span>
									<span class="fast-fact_rate">million</span>
									<span class="fast-fact_desc">in research expenditures in FY2017</span>
								</div>

								<div class="fast-fact">
									<span class="fast-fact_value">#3</span>
									<span class="fast-fact_rate">ranked</span>
									<span class="fast-fact_desc">veterinary school in the nation</span>
									<span class="fast-fact_source">(U.S. News & World Report)</span>
								</div>

								<div class="fast-fact">
									<span class="fast-fact_value">$179</span>
									<span class="fast-fact_rate">million</span>
									<span class="fast-fact_desc">college-wide annual budget</span>
								</div>
							</div><!-- .fast-facts-grid -->
						</div><!-- .fast-facts-content_inner -->
					</div><!-- .fast-facts-content -->
				</section><!-- .fast-facts -->

				<section class="launch-pads blue">
					<div class="launch-pads_intro">
						<div class="launch-pads_intro-wrap">
							<h2 class="launch-pads_title">Academic Departments</h2>
							<p>Four academic departments contribute to faculty expertise and teaching. All dedicated to improving the health of animals, people, and the planet.</p>
						</div><!-- .launch-pads_intro-wrap -->
					</div><!-- .launch-pads_intro -->
					<div class="launch-pads_grid">
						<a href="#" class="launch-pads_grid-item" style="background-image:url(<?php echo get_template_directory_uri() . '/dist/assets/img/billboards/billboard.01.jpg'; ?>);">
							<span class="launch-pads_grid-item-name">Biomedical Sciences</span>
						</a><!-- .launch-pads_grid-item -->
						<a href="#" class="launch-pads_grid-item" style="background-image:url(<?php echo get_template_directory_uri() . '/dist/assets/img/billboards/billboard.19.jpg'; ?>);">
							<span class="launch-pads_grid-item-name">Environmental and Radiological Health Sciences</span>
						</a><!-- .launch-pads_grid-item -->
						<a href="#" class="launch-pads_grid-item" style="background-image:url(<?php echo get_template_directory_uri() . '/dist/assets/img/billboards/billboard.11.jpg'; ?>);">
							<span class="launch-pads_grid-item-name">Clinical Sciences</span>
						</a><!-- .launch-pads_grid-item -->
						<a href="#" class="launch-pads_grid-item" style="background-image:url(<?php echo get_template_directory_uri() . '/dist/assets/img/billboards/billboard.20.jpg'; ?>);">
							<span class="launch-pads_grid-item-name">Microbiology, Immunology, and Pathology</span>
						</a><!-- .launch-pads_grid-item -->
					</div><!-- .launch-pads_grid -->
				</section><!-- .launch-pads -->

				<section class="spotlight" style="background-image:url(<?php echo get_template_directory_uri() . '/dist/assets/img/modules/spotlight/rock-bg.jpg'; ?>);">
					<div class="spotlight_inner">
						<div class="spotlight_content">
							<div class="spotlight_content-wrap">
								<h2 class="spotlight_title">Meet the Dean: Dr. Mark Stetter</h2>

								<p>Mark Stetter joined the College of Veterinary Medicine and Biomedical Sciences at Colorado State University in 2012. As a zoo and wildlife veterinarian, Stetter spent 15 years at The Walt Disney Company as director of animal operations, responsible for the healthcare of Disney’s animal collections worldwide. He has been actively involved in organizations as president of American College of Zoological Medicine, founder and president of Elephant Population Management Program, chaired of the Morris Animal Foundation Wildlife Scientific Advisory Board, and a member of the Association of Zoo and Wildlife Research Committee.</p>

								<p><a href="#" class="spotlight_button">College Office Leadership</a></p>
							</div><!-- .spotlight_content-wrap -->
						</div><!-- .spotlight_content -->
						<div class="spotlight_img">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/img/modules/spotlight/Dr_Mark_Stetter-headshot.png'; ?>" alt="">
						</div><!-- .spotlight_img -->
					</div><!-- .spotlight_inner -->
				</section><!-- .spotlight -->

				<section class="section-placeholder">
					<h2>Initiatives</h2>
				</section>
			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
