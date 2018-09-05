<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary" data-off-canvas-content>

	<!-- content container -->
	<div class="degree-program-container">

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php

			// fields
			$description   = get_field( 'program_description' );
			$degree_type   = get_field( 'program_degree_type' );
			$program_img   = get_field( 'program_image' );
			$header_url    = $program_img[ 'url' ];
			$program_video = get_field( 'program_video' );

		?>

		<!-- header -->
		<header class="degree-program-header" style="background-image:url(<?php echo $header_url; ?>);">

			<!-- navigation -->
			<span class="program-navigation">

				degree programs // undergraduate programs

			</span>
			<!-- END navigation -->

			<!-- title -->
			<h2 class="program-title">

				<?php the_title(); ?>

			</h2>
			<!-- END title -->

		</header>
		<!-- END header -->

		<!-- content -->
		<div class="degree-program-content">

			<!-- description -->
			<div class="program-content program-row description lite">

				<!-- description -->
				<div class="description-text">

					<?php echo $description; ?>

				</div>
				<!-- END description -->

				<!-- sidebar -->
				<aside class="program-sidebar">

					<!-- title -->
					<span class="degree-type-label">

						degree type

					</span>
					<!-- END title -->

					<!-- type -->
					<span class="degree-type-text">

						<?php echo $degree_type; ?>

					</span>
					<!-- END type -->

					<?php if ( have_rows( 'program_docs' ) ): ?>

						<?php while ( have_rows( 'program_docs' ) ): the_row();

							$document_title = get_sub_field( 'document_button' );
							$document_file = get_sub_field( 'document_pdf' );

						?>

						<button class="degree-document-button" data-file="<?php echo $document_file[ 'filename' ]; ?>">

							<?php echo $document_title; ?>

						</button>

						<?php endwhile; ?>

					<?php endif; ?>

				</aside>
				<!-- END sidebar -->

			</div>
			<!-- END description -->

			<!-- video -->
			<div class="program-content program-row video">

				<!-- container -->
				<div class="video-container">

					<!-- embed -->
					<div class="program-video">

						<iframe src="https://player.vimeo.com/video/135510388?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
					<!-- END embed -->

				</div>
				<!-- END container -->

				<!-- text -->
				<div class="video-text">

					<!-- type -->
					<span class="program-type">

						bachelor of science degree

					</span>
					<!-- END type -->

					<!-- name -->
					<span class="program-name">

						<?php the_title(); ?>

					</span>
					<!-- END name -->

					<!-- subtext -->
					<span class="program-subtext">

						at colorado state university

					</span>
					<!-- END subtext -->

				</div>
				<!-- END text -->

				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/KaHfzj1KbNo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->

			</div>
			<!-- END video -->

			<!-- facts -->
			<div class="program-content program-row facts dark">

				<!-- title -->
				<div class="facts-title">

					<h3 class="title">

						program facts

					</h3>

				</div>
				<!-- END  title -->

				<!-- list -->
				<div class="facts-content">

					<?php if ( have_rows( 'program_facts' ) ): ?>

						<ul class="list">

							<?php while ( have_rows( 'program_facts' ) ): the_row();

								$program_fact_title = get_sub_field( 'program_fact_title' );
								$program_fact_text  = get_sub_field( 'program_fact_text' );

							?>

							<li>

								<em class="highlight">

									<?php echo $program_fact_title; ?>

								</em>

								<?php echo $program_fact_text; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</div>
				<!-- END list -->

			</div>
			<!-- END facts -->

			<!-- concentrations -->
			<div class="program-content program-row concentrations lite">

				<!-- title -->
				<h3 class="title">

					concentrations

				</h3>
				<!-- END title -->

				<div class="concentrations-content">

					<?php if ( have_rows( 'program_concentrations' ) ): ?>

						<?php while ( have_rows( 'program_concentrations' ) ): the_row();

							$concentration_name = get_sub_field( 'concentration_title' );
							$concentration_text = get_sub_field( 'concentration_description' );
							$concentration_file = get_sub_field( 'concentration_curriculum' );

						?>

						<button class="concentration-button" data-file="<?php echo $concentration_file[ 'filename' ]; ?>">

							<span class="button-title">

								<?php echo $concentration_name; ?>

							</span>

							<span class="button-text">

								<?php echo $concentration_text; ?>

							</span>

							<span class="button-button">

								explore concentration

							</span>

						</button>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</div>
			<!-- END concentrations -->

			<!-- potential careers -->
			<div class="program-content program-row careers">

				<?php

					$program_careers_text = get_field( 'program_careers_description' );

				?>

				<!-- text -->
				<div class="careers-text">

					<!-- title -->
					<h3 class="careers-title">

						career opportunties

					</h3>
					<!-- END title -->

					<!-- text -->
					<span class="careers-description">

						<?php echo $program_careers_text; ?>

					</span>
					<!-- END text -->

				</div>
				<!-- END text -->

				<!-- list -->
				<div class="careers-list">

					<?php if ( have_rows( 'program_careers_list' ) ): ?>

						<?php while ( have_rows( 'program_careers_list' ) ): the_row();

							$potential_career = get_sub_field( 'potential_career' );

						?>

						<span class="item">

							<?php echo $potential_career; ?>

						</span>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>
				<!-- END list -->

			</div>
			<!-- END potential careers -->

			<!-- potential employers -->
			<div class="program-content program-row employers">

				<?php

					$program_employer_text = get_field( 'program_employers_description' );

				?>

				<!-- list -->
				<div class="employers-list">

					<?php if ( have_rows( 'program_employers_list' ) ): ?>

						<?php while ( have_rows( 'program_employers_list' ) ): the_row();

							$potential_employer = get_sub_field( 'potential_employer' );

						?>

							<span class="item">

								<?php echo $potential_employer; ?>

							</span>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>
				<!-- END list -->

				<!-- text -->
				<div class="employers-text">

					<!-- title -->
					<h3 class="employers-title">

						potential employers

					</h3>
					<!-- END title -->

					<!-- text -->
					<span class="employers-description">

						<?php echo $program_employer_text; ?>

					</span>
					<!-- END text -->

				</div>
				<!-- END text -->

			</div>
			<!-- END potential employers -->

			<!-- student organizations -->
			<div class="program-content program-row organizations dark">

				<!-- title -->
				<h3 class="title">

					connect with other students

				</h3>
				<!-- END title -->

				<!-- buttons -->
				<div class="buttons">

					<?php if ( have_rows( 'program_student_organizations' ) ): ?>

						<?php while ( have_rows( 'program_student_organizations' ) ): the_row();

							$organization_name = get_sub_field( 'organization_name' );
							$organization_link = get_sub_field( 'organization_link' );

						?>

							<button class="organization-button" data-url="<?php echo $organization_link; ?>">

								<?php echo $organization_name; ?>

							</button>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>
				<!-- END buttons -->

			</div>
			<!-- END student organizations -->

			<!-- minors -->
			<div class="program-content program-row minors">

				<?php if ( have_rows( 'program_minors' ) ): ?>

					<?php while ( have_rows( 'program_minors' ) ): the_row();

						$minor_name = get_sub_field( 'minor_name' );
						$minor_type = get_sub_field( 'minor_link_type' );
						$minor_file = get_sub_field( 'minor_link_file' );
						$minor_link = get_sub_field( 'minor_link_page' );
						$minor_text = get_sub_field( 'minor_description' );
						$minor_img  = get_sub_field( 'minor_image' );

					?>

					<!-- image -->
					<div class="design-block">

						<div class="artwork" style="background-image:url(<?php echo $minor_img; ?>);">

						</div>

					</div>
					<!-- END image -->

					<!-- text -->
					<div class="content">

						<h3 class="title">

							<?php echo $minor_name; ?>

						</h3>

						<span class="minor-description">

							<?php echo $minor_text; ?>

						</span>

						<button class="minor-link-button" data-link="<?php

						if ( $minor_type === 'page' ) {

							echo $minor_link;

						} elseif ( $minor_type === 'file' ) {

							echo $minor_file[ 'filename' ];

						}?>">

							<span class="button-text">

								explore minor

							</span>

						</button>

					</div>
					<!-- END text -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div>
			<!-- END minors -->

			<!-- similar majors -->
			<div class="program-content program-row similar dark blue">

				<h3 class="title">

					similar majors

				</h3>

				<!-- buttons -->
				<div class="buttons">

					<?php if ( have_rows( 'program_similar_majors' ) ): ?>

						<?php while ( have_rows( 'program_similar_majors' ) ): the_row();

							$similar_major_name = get_sub_field( 'similar_major_name' );
							$similar_major_link = get_sub_field( 'similar_major_link' );

						?>

						<button class="similar-major-link" data-link="<?php echo $similar_major_link; ?>">

							<span class="button-title">

								<?php echo $similar_major_name; ?>

							</span>

						</button>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>
				<!-- END buttons -->

			</div>
			<!-- END similar majors -->

			<!-- research opportunities -->
			<div class="program-content program-row empty lite">

				<h3 class="title">

					research opportunities

				</h3>

				<span class="content-output">

					<?php if ( have_rows( 'program_research_opportunities' ) ): ?>

						<ul class="content-output-list">

							<?php while ( have_rows( 'program_research_opportunities' ) ): the_row();

								$researcher_name = get_sub_field( 'researcher_name' );
								$researcher_title = get_sub_field( 'researcher_title' );
								$researcher_image = get_sub_field( 'researcher_image' );
								$researcher_email = get_sub_field( 'researcher_email' );

							?>

							<li>

								<?php echo $researcher_name; ?><br/>
								<?php echo $researcher_title; ?><br/>
								<img src="<?php echo $researcher_image[ 'url' ]; ?>" width="256" alt="foobar"/><br/>
								<?php echo $researcher_email; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php else: ?>

						example content pending

					<?php endif; ?>

				</span>

			</div>
			<!-- END research opportunities -->

			<!-- program contacts -->
			<div class="program-content program-row empty dark">

				<h3 class="title">

					program contacts

				</h3>

				<span class="content-output">

					<?php if ( have_rows( 'program_contacts' ) ): ?>

						<ul class="content-output-list">

							<?php while ( have_rows( 'program_contacts' ) ): the_row();

								$contact_name = get_sub_field( 'contact_name' );
								$contact_type = get_sub_field( 'contact_type' );
								$contact_phone = get_sub_field( 'contact_phone' );
								$contact_email = get_sub_field( 'contact_email' );

							?>

							<li>

								<?php echo $contact_name; ?><br/>
								<?php echo $contact_type; ?><br/>
								<?php echo $contact_phone; ?><br/>
								<?php echo $contact_email; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</span>

			</div>
			<!-- END program contacts -->

			<!-- honor program information -->
			<div class="program-content program-row empty lite">

				<?php

					$program_honors_info = get_field( 'program_honors_info' );

				?>

				<h3 class="title">

					honor program information

				</h3>

				<span class="content-output">

					<?php echo $program_honors_info; ?>

				</span>

			</div>
			<!-- END honor program information -->

			<!-- tuition + financial aid -->
			<div class="program-content program-row empty dark">

				<?php

					$program_financials = get_field( 'program_financials' );

				?>

				<h3 class="title">

					Tuition + Financial Aid

				</h3>

				<span class="content-output">

					<?php echo $program_financials; ?>

				</span>

			</div>
			<!-- END tuition + financial aid -->

		</div>
		<!-- END content -->

		<?php endwhile; ?>

		<?php endif; ?>

	</div>
	<!-- END content container -->

<?php get_footer(); ?>
