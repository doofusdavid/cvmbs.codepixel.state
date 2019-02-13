<?php
/**
 * Template Name: Alumni
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

								<p class="entry-subtitle">We are global. We are dedicated. We are educated.</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non dapibus lacus. Aenean sodales, mauris nec ornare eleifend, eros arcu molestie felis, id ornare est erat sed velit. Quisque hendrerit vitae justo a tristique. Nullam purus ipsum, venenatis ultricies dictum ac, lacinia eget dolor.</p>
							</div><!-- .secondary-page-header__content-wrap -->
						</div><!-- .secondary-page-header__content -->
					</div><!-- .secondary-page-header__inner -->
				</header><!-- .secondary-page-header -->

				<?php
				$response = wp_remote_get( add_query_arg(
					array(
						'filter[tag]' => 'amazing-alumni',
						'per_page'    =>  6
					),
					'https://cvmbs.source.colostate.edu/wp-json/wp/v2/posts'
				) );

				if ( ! is_wp_error( $response ) && $response['response']['code'] == 200 ) :
					if ( ! empty( $posts = json_decode( $response['body'] ) ) ) :
				?>

				<section class="source-stories">
					<div class="source-stories__heading">
						<h2 class="source-stories__title">Amazing Alumni</h2>

						<p class="source-stories__cta"><a href="https://cvmbs.source.colostate.edu/tag/amazing-alumni/">All Alumni Stories</a></p>
					</div><!-- .source-stories__heading -->

					<div class="source-stories__grid">

						<?php foreach( $posts as $post ) : ?>

						<a class="source-stories__item" href="<?php echo $post->link; ?>">
							<span class="source-stories__item-image" style="background-image:url(<?php echo $post->featured_image->source_url; ?>);"></span>
							<div class="source-stories__item-content">
								<h3 class="source-stories__item-title">
									<?php echo $post->title->rendered; ?>
								</h3>
								<div class="source-stories__item-excerpt">
									<?php echo $post->excerpt->rendered; ?>
								</div><!-- .source-stories__item-excerpt -->
							</div><!-- .source-stories__item-content -->
						</a><!-- .source-stories__item -->

						<?php endforeach; ?>

					</div><!-- .source-stories__grid -->
				</section><!-- .source-stories -->

				<?php
					endif;
				endif;
				?>

				<section class="highlight-group bg--green">
					<div class="highlight-group__inner">
						<h2 class="highlight-group__title">Don't Miss a Beat</h2>
						<div class="highlight-group__grid grid--3-columns">
							<a class="highlight-group__grid-item highlight-group__grid-link" href="#education">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/education.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Continuing Education Opportunities</span>
							</a>
							<a class="highlight-group__grid-item highlight-group__grid-link" href="#reading">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/reading.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Sign Up for Our Online Newsletter and Annual Magazine</span>
							</a>
							<a class="highlight-group__grid-item highlight-group__grid-link" href="#mentor">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/mentor.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Mentor a Student</span>
							</a>
							<a class="highlight-group__grid-item highlight-group__grid-link" href="#events">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/calendar.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Events</span>
							</a>
							<a class="highlight-group__grid-item highlight-group__grid-link" href="#info">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/id-card.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Update Your Information</span>
							</a>
							<a class="highlight-group__grid-item highlight-group__grid-link" href="#visit">
								<div class="highlight-group__grid-item-icon" aria-hidden="true">
									<img src="<?php echo $img_dir . '/icons/handshake.svg'; ?>" alt="">
								</div>
								<span class="highlight-group__grid-item-name">Visit Us</span>
							</a>
						</div>
					</div>
				</section>

				<section class="content-side-image">
					<div class="content-side-image__img">
						<img src="<?php echo $img_dir . '/modules/content-side-image/student-research-opportunities.jpg'; ?>" alt="">
					</div><!-- .content-side-image__img -->

					<div class="content-side-image__content">
						<h2 class="content-side-image__title">Student Research Opportunities</h2>

						<p>You financial gift will transform the lives of students who dream of becoming leaders, faculty who inspire change, and researchers who are discovering solutions that will lead to cures for our most challenging programs.</p>

						<p><a class="content-side-image__button" href="#">Make a Gift Today</a></p>

						<div class="content-side-image__links">
							<h3 class="content-side-image__links-title">Additional Resources</h3>
							<ul class="content-side-image__links-list">
								<li class="content-side-image__links-item"><a href="#">CSU Alumni Association</a></li>
								<li class="content-side-image__links-item"><a href="#">CSU Foundation</a></li>
								<li class="content-side-image__links-item"><a href="#">University Advancement</a></li>
								<li class="content-side-image__links-item"><a href="#">CSU Donor Connect Login</a></li>
							</ul><!-- .content-side-image__links-list -->
						</div><!-- .content-side-image__links -->
					</div><!-- .content-side-image__content -->
				</section><!-- .content-side-image -->

				<section class="group-bios">
					<h2 class="group-bios__title">We're Here for You</h2>
					<div class="group-bios__grid">
						<div class="group-bios__bio">
							<div class="group-bios__image">
								<img src="<?php echo $img_dir . '/modules/group-bios/Megan_Price.jpg'; ?>" alt="">
							</div>
							<div class="group-bios__details">
								<h3 class="group-bios__heading">Megan Price, Executive Director of Advancement</h3>
								<div class="group-bios__desc">
									<p>As the owner of two cats, Megan has a genuine love of animals. She also is a distance runner and has a commitment to personal health and fitness. In her role as the major gifts officer for the Department of Biomedical Sciences, equine programs, and Voss Veterinary Teaching Hospital, Megan is excited to nurture each donor's philanthropic passion to provide support for the discovery of cures for disease and optimization of health for animals and humans. She brings more than 24 years of experience in higher education.​</p>
								</div>
							</div>
						</div>

						<div class="group-bios__bio">
							<div class="group-bios__image">
								<img src="<?php echo $img_dir . '/modules/group-bios/Aaron_Phaneuf.jpg'; ?>" alt="">
							</div>
							<div class="group-bios__details">
								<h3 class="group-bios__heading">Aaron Phaneuf, Director of Development</h3>
								<div class="group-bios__desc">
									<p>Aaron has built a career in development advocating for mission-driven organizations both large and small. He brings more than a decade of experience and a wealth of expertise in higher education and healthcare advancement. He is lead development champion for the Department of Microbiology, Immunology, and Pathology, along with several services at the James L. Voss Veterinary Teaching Hospital. Aaron takes great pride and joy in connecting our donor's philanthropic passions with the avenues for investment in our college.</p>
								</div>
							</div>
						</div>

						<div class="group-bios__bio">
							<div class="group-bios__image">
								<img src="<?php echo $img_dir . '/modules/group-bios/Ali_Fernandez.jpg'; ?>" alt="">
							</div>
							<div class="group-bios__details">
								<h3 class="group-bios__heading">Ali Fernandez, Associate Director of Development</h3>
								<div class="group-bios__desc">
									<p>In this role, Ali advocates for the Departments of Biomedical Sciences and Environmental and Radiological Health Sciences, the Veterinary Diagnostic Lab, and several services at the James L. Voss Veterinary Teaching Hospital. She is also the primary development champion for several special projects including animal welfare, OneHealth, Pets Forever, Todos Santos, and Veterinary Communication for Professional Excellence. Ali brings to CVMBS more than a decade of advancement experience, a passion for engaging donors, and a deep love of animals - especially her dogs Charlie and Mazzy, and her cat Sue.​</p>
								</div>
							</div>
						</div>

						<div class="group-bios__bio">
							<div class="group-bios__image">
								<img src="<?php echo $img_dir . '/modules/group-bios/Katie_Rothstein.jpg'; ?>" alt="">
							</div>
							<div class="group-bios__details">
								<h3 class="group-bios__heading">Katie Rothstein, Associate Director of Development</h3>
								<div class="group-bios__desc">
									<p>A p​assionate CSU alum, Katie thrives on helping donors impact the health and well-being of animals through philanthropic investment. She is the proud owner of a 14-year old Chihuahua-Poodle, Dulcinea, and the two have been known to sing opera duets together. Katie is the lead development champion for the Department of Clinical Sciences as well as surgery and primary care services at the James L. Voss Veterinary Teaching Hospital.​</p>
								</div>
							</div>
						</div>

						<div class="group-bios__bio">
							<div class="group-bios__image">
								<img src="<?php echo $img_dir . '/modules/group-bios/Lauren_McCracken.jpg'; ?>" alt="">
							</div>
							<div class="group-bios__details">
								<h3 class="group-bios__heading">Lauren McCracken, Assistant Director of Development Operations</h3>
								<div class="group-bios__desc">
									<p>Lauren is the operational genius at the wheel of the CVMBS advancement juggernaut. She has expertise in admissions and development to improve scholarship operations. Lauren is also the proud mama of Tahoe, a 7-year-old Golden Retriever with a heart of gold.</p>
								</div>
							</div>
						</div>

						<div class="group-bios__bio">
							<div class="group-bios__image">
								<img src="<?php echo $img_dir . '/modules/group-bios/Megan_Covington.jpg'; ?>" alt="">
							</div>
							<div class="group-bios__details">
								<h3 class="group-bios__heading">Megan Covington, Advancement Coordinator</h3>
								<div class="group-bios__desc">
									<p>Megan manages the college's two annual DVM alumni reunion events, oversees office operations, and provides administrative support to the executive director. She is excited to support the innovative work being done by CVMBS’ world-class comm​unity of faculty, students, alumni, donors, and partners. Megan is a proud national parks geek, avid reader, and loves to travel. She can usually be found outside near mountains or golden retrievers.​</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
