<?php
/**
 * Template Name: About
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

				<section class="call-out">
					<div class="call-out__inner">
						<div class="call-out__content">
							<h2 class="call-out__title">Mission</h2>

							<div class="call-out__content-wrap">
								<p>We improve the health of animals, people, and the planet through innovative and dedicated teaching, research, outreach, and clinical service. Though our actions, we inspire the next generation of leaders.</p>
							</div><!-- .call-out__content-wrap -->
						</div><!-- .call-out__content -->
					</div><!-- .call-out__inner -->
				</section><!-- .call-out -->

				<section class="fast-facts">
					<div class="fast-facts__inner">
						<div class="fast-facts__grid">
							<div class="fast-fact">
								<span class="fast-fact__value">$44</span>
								<span class="fast-fact__rate">million</span>
								<span class="fast-fact__desc">in research expenditures in FY2017</span>
							</div>

							<div class="fast-fact">
								<span class="fast-fact__value">#3</span>
								<span class="fast-fact__rate">ranked</span>
								<span class="fast-fact__desc">veterinary school in the nation</span>
								<span class="fast-fact__source">(U.S. News & World Report)</span>
							</div>

							<div class="fast-fact">
								<span class="fast-fact__value">$179</span>
								<span class="fast-fact__rate">million</span>
								<span class="fast-fact__desc">college-wide annual budget</span>
							</div>
						</div><!-- .fast-facts__grid -->
					</div><!-- .fast-facts__inner -->
				</section><!-- .fast-facts -->

				<section class="launch-pads launch-pads--blue">
					<div class="launch-pads__intro">
						<div class="launch-pads__intro-wrap">
							<h2 class="launch-pads__title">Academic Departments</h2>
							<p>Four academic departments contribute to faculty expertise and teaching. All dedicated to improving the health of animals, people, and the planet.</p>
						</div><!-- .launch-pads__intro-wrap -->
					</div><!-- .launch-pads__intro -->
					<div class="launch-pads__grid">
						<a href="#" class="launch-pads__grid-item" style="background-image:url(<?php echo $img_dir . '/billboards/billboard.01.jpg'; ?>);">
							<span class="launch-pads__grid-item-name">Biomedical Sciences</span>
						</a><!-- .launch-pads__grid-item -->
						<a href="#" class="launch-pads__grid-item" style="background-image:url(<?php echo $img_dir . '/billboards/billboard.19.jpg'; ?>);">
							<span class="launch-pads__grid-item-name">Environmental and Radiological Health Sciences</span>
						</a><!-- .launch-pads__grid-item -->
						<a href="#" class="launch-pads__grid-item" style="background-image:url(<?php echo $img_dir . '/billboards/billboard.11.jpg'; ?>);">
							<span class="launch-pads__grid-item-name">Clinical Sciences</span>
						</a><!-- .launch-pads__grid-item -->
						<a href="#" class="launch-pads__grid-item" style="background-image:url(<?php echo $img_dir . '/billboards/billboard.20.jpg'; ?>);">
							<span class="launch-pads__grid-item-name">Microbiology, Immunology, and Pathology</span>
						</a><!-- .launch-pads__grid-item -->
					</div><!-- .launch-pads__grid -->
				</section><!-- .launch-pads -->

				<section class="spotlight" style="background-image:url(<?php echo $img_dir . '/modules/spotlight/rock-bg.jpg'; ?>);">
					<div class="spotlight__inner">
						<div class="spotlight__content">
							<div class="spotlight__content-wrap">
								<h2 class="spotlight__title">Meet the Dean: Dr. Mark Stetter</h2>

								<p>Mark Stetter joined the College of Veterinary Medicine and Biomedical Sciences at Colorado State University in 2012. As a zoo and wildlife veterinarian, Stetter spent 15 years at The Walt Disney Company as director of animal operations, responsible for the healthcare of Disney’s animal collections worldwide. He has been actively involved in organizations as president of American College of Zoological Medicine, founder and president of Elephant Population Management Program, chaired of the Morris Animal Foundation Wildlife Scientific Advisory Board, and a member of the Association of Zoo and Wildlife Research Committee.</p>

								<p><a href="#" class="spotlight__button">College Office Leadership</a></p>
							</div><!-- .spotlight__content-wrap -->
						</div><!-- .spotlight__content -->
						<div class="spotlight__img">
							<img src="<?php echo $img_dir . '/modules/spotlight/Dr_Mark_Stetter-headshot.png'; ?>" alt="">
						</div><!-- .spotlight__img -->
					</div><!-- .spotlight__inner -->
				</section><!-- .spotlight -->

				<section class="content-side-image">
					<div class="content-side-image__img">
						<img src="<?php echo $img_dir . '/modules/content-side-image/student-research-opportunities.jpg'; ?>" alt="">
					</div><!-- .content-side-image__img -->

					<div class="content-side-image__content">
						<h2 class="content-side-image__title">Student Research Opportunities</h2>

						<p>Some text about these research things. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div><!-- .content-side-image__content -->
				</section><!-- .content-side-image -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
