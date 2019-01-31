<?php
/**
 * Template Name: Research
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

				<section class="section-placeholder">
					<h2>Excellence</h2>
				</section>

				<section class="fast-facts">
					<div class="fast-facts-content">
						<div class="fast-facts-content_inner">
							<div class="fast-facts-grid">
								<div class="fast-fact">
									<span class="fast-fact_value">$258</span>
									<span class="fast-fact_rate">million</span>
									<span class="fast-fact_desc">in research expenditures in FY2018</span>
								</div>

								<div class="fast-fact">
									<span class="fast-fact_value">3</span>
									<span class="fast-fact_rate">dozen +</span>
									<span class="fast-fact_desc">ongoing clinical trials</span>
								</div>

								<div class="fast-fact">
									<span class="fast-fact_value">70%</span>
									<span class="fast-fact_rate">of students</span>
									<span class="fast-fact_desc">work in a research laboratory</span>
								</div>
							</div><!-- .fast-facts-grid -->
						</div><!-- .fast-facts-content_inner -->
					</div><!-- .fast-facts-content -->
				</section><!-- .fast-facts -->

				<section class="launch-pads green">
					<div class="launch-pads_intro">
						<div class="launch-pads_intro-wrap">
							<h2 class="launch-pads_title">Research Things</h2>
							<p>Some text about these research things. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div><!-- .launch-pads_intro-wrap -->
					</div><!-- .launch-pads_intro -->
					<div class="launch-pads_grid">
						<a href="#" class="launch-pads_grid-item" style="background-image:url(<?php echo get_template_directory_uri() . '/dist/assets/img/modules/launch-pads/centers-institutes.jpg'; ?>);">
							<span class="launch-pads_grid-item-name">Research Centers and Institutes</span>
						</a><!-- .launch-pads_grid-item -->
						<a href="#" class="launch-pads_grid-item" style="background-image:url(<?php echo get_template_directory_uri() . '/dist/assets/img/modules/launch-pads/faculty-collaboration.jpg'; ?>);">
							<span class="launch-pads_grid-item-name">Faculty Collaboration Database</span>
						</a><!-- .launch-pads_grid-item -->
					</div><!-- .launch-pads_grid -->
				</section><!-- .launch-pads -->

				<section class="page-quote">
					<blockquote class="page-quote_wrap">
						<div class="page-quote_icon--open" aria-hidden="true">
							<svg class="page-quote_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102 69.6">
								<path xmlns="http://www.w3.org/2000/svg" d="M4.6,43.7c1.7-9.4,6-15.4,15.8-25L40.1,0h13.2L29.5,32.2h15.1l-6.7,37.4H0L4.6,43.7z M53.3,43.7c1.7-9.4,6-15.4,15.8-25   L88.8,0H102L78.2,32.2h15.1l-6.7,37.4H48.7L53.3,43.7z"/>
							</svg>
						</div><!-- .page-quote_icon--open -->
						<div class="page-quote_quotation">
							<p>When I was in a laboratory as a freshman in college, I did an experiment and I knew that I had made a scientific discovery that no one else knew. I was hooked at that point.</p>
						</div><!-- .page-quote_quotation -->
						<div class="page-quote_icon--closed" aria-hidden="true">
							<svg class="page-quote_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102 69.6">
								<path xmlns="http://www.w3.org/2000/svg" d="M97.4,25.9c-1.7,9.4-6,15.4-15.8,25L61.9,69.6H48.7l23.8-32.2H57.4L64.1,0H102L97.4,25.9z M48.7,25.9   c-1.7,9.4-6,15.4-15.8,25L13.2,69.6H0l23.8-32.2H8.6L15.4,0h37.9L48.7,25.9z"/>
							</svg>
						</div><!-- .page-quote_icon--closed -->
						<div class="page-quote_attribution">
							<p><cite class="page-quote_cite"><span class="page-quote_name">Dr. Sue VandeWoude</span>, Associate Dean for Research</cite></p>
						</div><!-- .page-quote_attribution -->
					</blockquote><!-- .page-quote_wrap -->
				</section><!-- .page-quote -->

				<section class="section-placeholder" style="background:#e7e7e7;">
					<h2>Student Research Opportunities</h2>
				</section>

				<section class="section-placeholder">
					<h2>Resources and Partnerships</h2>
				</section>
			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
