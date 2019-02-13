<?php
/**
 * Template Name: Research
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

$header_bg = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'full' ) . ');"' : '';

$img_dir = get_template_directory_uri() . '/dist/assets/img';

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="secondary-page-header" <?php echo $header_bg; ?>>
					<div class="secondary-page-header__inner">
						<div class="secondary-page-header__content">
							<div class="secondary-page-header__content-wrap">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

								<p>Founded in 1907, The College of Veterinary Medicine and Biomedical Sciences (CVMBS) is a foundational part of CSU – a top-tier university with annual research expenditures of about $320 million.</p>

								<p>Many of our nearly 900 motivated scientists will go on to professional graduate programs, like medical school, veterinary school, dental school, or pharmacy school. Others will pursue graduate studies or jump directly into careers.</p>
							</div><!-- .secondary-page-header__content-wrap -->
						</div><!-- .secondary-page-header__content -->
					</div><!-- .secondary-page-header__inner -->
				</header><!-- .secondary-page-header -->

				<section class="highlight-group">
					<div class="highlight-group__inner">
						<h2 class="highlight-group__title">World-Renowned Research</h2>
						<div class="highlight-group__grid grid--4-columns">
							<div class="highlight-group__grid-item">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/animals.svg'; ?>" alt="">
								</div><!-- .highlight-group__grid-item-icon -->
								<span class="highlight-group__grid-item-name">Animal Health</span>
							</div><!-- .highlight-group__grid-item -->
							<div class="highlight-group__grid-item">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/stomach.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Biological Systems</span>
							</div>
							<div class="highlight-group__grid-item">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/ribbon.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Cancer</span>
							</div>
							<div class="highlight-group__grid-item">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/health.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Environmental Health</span>
							</div>
							<div class="highlight-group__grid-item">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/x-ray.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Imaging and Diagnostics</span>
							</div>
							<div class="highlight-group__grid-item">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/virus.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Infectious Disease</span>
							</div>
							<div class="highlight-group__grid-item">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/bones.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Orthopaedics</span>
							</div>
							<div class="highlight-group__grid-item">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/cell.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Reproduction</span>
							</div>
						</div><!-- .highlight-group__grid -->
					</div><!-- .highlight-group__inner -->
				</section><!-- .highlight-group -->

				<section class="fast-facts">
					<div class="fast-facts__inner">
						<div class="fast-facts__grid">
							<div class="fast-fact">
								<span class="fast-fact__value">$258</span>
								<span class="fast-fact__rate">million</span>
								<span class="fast-fact__desc">in research expenditures in FY2018</span>
							</div>

							<div class="fast-fact">
								<span class="fast-fact__value">3</span>
								<span class="fast-fact__rate">dozen +</span>
								<span class="fast-fact__desc">ongoing clinical trials</span>
							</div>

							<div class="fast-fact">
								<span class="fast-fact__value">70%</span>
								<span class="fast-fact__rate">of students</span>
								<span class="fast-fact__desc">work in a research laboratory</span>
							</div>
						</div><!-- .fast-facts__grid -->
					</div><!-- .fast-facts__inner -->
				</section><!-- .fast-facts -->

				<section class="launch-pads launch-pads--green">
					<div class="launch-pads__intro">
						<div class="launch-pads__intro-wrap">
							<h2 class="launch-pads__title">Research Things</h2>
							<p>Some text about these research things. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div><!-- .launch-pads__intro-wrap -->
					</div><!-- .launch-pads__intro -->
					<div class="launch-pads__grid">
						<a href="#" class="launch-pads__grid-item" style="background-image:url(<?php echo $img_dir . '/modules/launch-pads/centers-institutes.jpg'; ?>);">
							<span class="launch-pads__grid-item-name">Research Centers and Institutes</span>
						</a><!-- .launch-pads__grid-item -->
						<a href="#" class="launch-pads__grid-item" style="background-image:url(<?php echo $img_dir . '/modules/launch-pads/faculty-collaboration.jpg'; ?>);">
							<span class="launch-pads__grid-item-name">Faculty Collaboration Database</span>
						</a><!-- .launch-pads__grid-item -->
					</div><!-- .launch-pads__grid -->
				</section><!-- .launch-pads -->

				<section class="page-quote">
					<blockquote class="page-quote__wrap">
						<div class="page-quote__icon--open" aria-hidden="true">
							<svg class="page-quote__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102 69.6">
								<path xmlns="http://www.w3.org/2000/svg" d="M4.6,43.7c1.7-9.4,6-15.4,15.8-25L40.1,0h13.2L29.5,32.2h15.1l-6.7,37.4H0L4.6,43.7z M53.3,43.7c1.7-9.4,6-15.4,15.8-25   L88.8,0H102L78.2,32.2h15.1l-6.7,37.4H48.7L53.3,43.7z"/>
							</svg>
						</div><!-- .page-quote__icon--open -->
						<div class="page-quote__quotation">
							<p>When I was in a laboratory as a freshman in college, I did an experiment and I knew that I had made a scientific discovery that no one else knew. I was hooked at that point.</p>
						</div><!-- .page-quote__quotation -->
						<div class="page-quote__icon--closed" aria-hidden="true">
							<svg class="page-quote__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102 69.6">
								<path xmlns="http://www.w3.org/2000/svg" d="M97.4,25.9c-1.7,9.4-6,15.4-15.8,25L61.9,69.6H48.7l23.8-32.2H57.4L64.1,0H102L97.4,25.9z M48.7,25.9   c-1.7,9.4-6,15.4-15.8,25L13.2,69.6H0l23.8-32.2H8.6L15.4,0h37.9L48.7,25.9z"/>
							</svg>
						</div><!-- .page-quote__icon--closed -->
						<div class="page-quote__attribution">
							<p><cite class="page-quote__cite"><span class="page-quote__name">Dr. Sue VandeWoude</span>, Associate Dean for Research</cite></p>
						</div><!-- .page-quote__attribution -->
					</blockquote><!-- .page-quote__wrap -->
				</section><!-- .page-quote -->

				<section class="content-side-image">
					<div class="content-side-image__img">
						<img src="<?php echo $img_dir . '/modules/content-side-image/student-research-opportunities.jpg'; ?>" alt="">
					</div><!-- .content-side-image__img -->

					<div class="content-side-image__content">
						<h2 class="content-side-image__title">Student Research Opportunities</h2>

						<p>Some text about these research things. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

						<div class="content-side-image__links">
							<ul class="content-side-image__links-list">
								<li class="content-side-image__links-item"><a href="#">Undergraduate Research</a></li>
								<li class="content-side-image__links-item"><a href="#">Veterinary Summer Scholars Program</a></li>
								<li class="content-side-image__links-item"><a href="#">Annual Research Day</a></li>
							</ul><!-- .content-side-image__links-list -->
						</div><!-- .content-side-image__links -->
					</div><!-- .content-side-image__content -->
				</section><!-- .content-side-image -->

				<section class="dual-ctas dual-ctas--blue">
					<div class="dual-ctas__inner">
						<div class="dual-ctas__content">
							<div class="dual-ctas__content-inner">
								<h2 class="dual-ctas__title">Colorado Clinical and Translational Sciences Institute</h2>
								<p>Colorado State University is proud to be a partnering institution with the CCTSI, a National Institutes of Health Clinical & Translational Science Awardee lead via University of Colorado Denver. The CCTSI is the academic home to help transform the clinical and translational research and training efforts at the University of Colorado Denver and affiliated institutions.</p>
								<p class="dual-ctas__cta">
									<a class="dual-ctas__button">Visit CCTSI Website</a>
								</p>
							</div><!-- .dual-ctas__content-inner -->
						</div><!-- .dual-ctas__content -->

						<div class="dual-ctas__content">
							<div class="dual-ctas__content-inner">
							<h2 class="dual-ctas__title">Animal Health Innovation Fund</h2>
								<p>AHIF donors have been supporting this fund for nearly three decades because it is critical to combatting diseases and other health issues that are common in companion animals and livestock. Private gifts support a range of studies from developing new drug therapies for common cancers in dogs to better treatments for feline liver failure.</p>
								<p class="dual-ctas__cta">
									<a class="dual-ctas__button">Support AHIF Today</a>
								</p>
							</div><!-- .dual-ctas__content-inner -->
						</div><!-- .dual-ctas__content -->
					</div><!-- .dual-ctas__inner -->
				</section>
			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
