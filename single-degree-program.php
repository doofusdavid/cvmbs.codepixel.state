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
			$degree_type   = get_field( 'degree_type' );
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

			<!-- degree type -->
			<div class="program-content program-row three-columns documents lite">

				<span class="column-label">

					degree type

				</span>

				<?php echo $degree_type; ?>

				<?php if ( have_rows( 'program_docs' ) ): ?>

					<?php while ( have_rows( 'program_docs' ) ): the_row();

						$document_title = get_sub_field( 'document_button' );
						$document_file = get_sub_field( 'document_pdf' );

					?>

					<button class="document-button" data-file="<?php echo $document_file[ 'filename' ]; ?>">

						<?php echo $document_title; ?>

					</button>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>
			<!-- END degree type -->

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

								$program_fact = get_sub_field( 'program_fact' );

							?>

							<li>

								<?php echo $program_fact; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</div>
				<!-- END list -->

			</div>
			<!-- END facts -->

			<!-- concentrations -->
			<div class="program-content">

				<h3 class="content-label">

					program concentrations

				</h3>

				<span class="content-output">

					<?php if ( have_rows( 'program_concentrations' ) ): ?>

						<ul class="content-output-list">

							<?php while ( have_rows( 'program_concentrations' ) ): the_row();

								$concentration_name = get_sub_field( 'concentration_title' );
								$concentration_text = get_sub_field( 'concentration_description' );
								$concentration_file = get_sub_field( 'concentration_curriculum' );

							?>

							<li>

								<?php echo $concentration_name; ?><br />
								<?php echo $concentration_text; ?><br />
								<?php echo $concentration_file[ 'filename' ]; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</span>

			</div>
			<!-- END concentrations -->

			<!-- minors -->
			<div class="program-content">

				<h3 class="content-label">

					program minors

				</h3>

				<span class="content-output">

					<?php if ( have_rows( 'program_minors' ) ): ?>

						<ul class="content-output-list">

							<?php while ( have_rows( 'program_minors' ) ): the_row();

								$minor_name = get_sub_field( 'minor_name' );
								$minor_type = get_sub_field( 'minor_link_type' );
								$minor_file = get_sub_field( 'minor_link_file' );
								$minor_link = get_sub_field( 'minor_link_page' );

							?>

							<li>

								<?php echo $minor_name; ?><br />

								<?php if ( $minor_type === 'page' ): ?>

									<?php echo $minor_link; ?>

								<?php elseif ( $minor_type === 'file' ): ?>

									<?php echo $minor_file[ 'filename' ]; ?>

								<?php endif; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</span>

			</div>
			<!-- END minors -->

			<!-- similar majors -->
			<div class="program-content">

				<h3 class="content-label">

					program similar majors

				</h3>

				<span class="content-output">

					<?php if ( have_rows( 'program_similar_majors' ) ): ?>

						<ul class="content-output-list">

							<?php while ( have_rows( 'program_similar_majors' ) ): the_row();

								$similar_major = get_sub_field( 'similar_major_link' );

							?>

							<li>

								<?php echo $similar_major; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</span>

			</div>
			<!-- END similar majors -->

			<!-- student organizations -->
			<div class="program-content">

				<h3 class="content-label">

					program student organizations

				</h3>

				<span class="content-output">

					<?php if ( have_rows( 'program_student_organizations' ) ): ?>

						<ul class="content-output-list">

							<?php while ( have_rows( 'program_student_organizations' ) ): the_row();

								$organization_name = get_sub_field( 'organization_name' );
								$organization_link = get_sub_field( 'organization_link' );

							?>

							<li>

								<?php echo $organization_name; ?><br />
								<?php echo $organization_link; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</span>

			</div>
			<!-- END student organizations -->

			<!-- potential employers description -->
			<div class="program-content">

				<?php

					$program_employer_text = get_field( 'program_employers_description' );

				?>

				<h3 class="content-label">

					potential employers description

				</h3>

				<span class="content-output">

					<?php echo $program_employer_text; ?>

				</span>

			</div>
			<!-- END description -->

			<!-- potential employers list -->
			<div class="program-content">

				<h3 class="content-label">

					list of potential employers

				</h3>

				<span class="content-output">

					<?php if ( have_rows( 'program_employers_list' ) ): ?>

						<ul class="content-output-list">

							<?php while ( have_rows( 'program_employers_list' ) ): the_row();

								$potential_employer = get_sub_field( 'potential_employer' );

							?>

							<li>

								<?php echo $potential_employer; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</span>

			</div>
			<!-- END potential employers list -->

			<!-- potential careers description -->
			<div class="program-content">

				<?php

					$program_careers_text = get_field( 'program_careers_description' );

				?>

				<h3 class="content-label">

					potential careers description

				</h3>

				<span class="content-output">

					<?php echo $program_careers_text; ?>

				</span>

			</div>
			<!-- END description -->

			<!-- potential careers list -->
			<div class="program-content">

				<h3 class="content-label">

					list of potential careers

				</h3>

				<span class="content-output">

					<?php if ( have_rows( 'program_careers_list' ) ): ?>

						<ul class="content-output-list">

							<?php while ( have_rows( 'program_careers_list' ) ): the_row();

								$potential_career = get_sub_field( 'potential_career' );

							?>

							<li>

								<?php echo $potential_career; ?>

							</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</span>

			</div>
			<!-- END potential careers list -->

			<!-- research opportunities -->
			<div class="program-content">

				<h3 class="content-label">

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

					<?php endif; ?>

				</span>

			</div>
			<!-- END research opportunities -->

			<!-- program contacts -->
			<div class="program-content">

				<h3 class="content-label">

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
			<div class="program-content">

				<?php

					$program_honors_info = get_field( 'program_honors_info' );

				?>

				<h3 class="content-label">

					honor program information

				</h3>

				<span class="content-output">

					<?php echo $program_careers_text; ?>

				</span>

			</div>
			<!-- END honor program information -->

			<!-- tuition + financial aid -->
			<div class="program-content">

				<?php

					$program_financials = get_field( 'program_financials' );

				?>

				<h3 class="content-label">

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
