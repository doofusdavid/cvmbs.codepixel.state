<!-- facts -->
<div class="program-content program-row facts dark">

	<!-- title -->
	<div class="facts-title">
		<h3 class="title"><?php _e( 'Program Facts', 'cvmbsPress'); ?></h3>
	</div>
	<!-- END  title -->

	<!-- list -->
	<div class="facts-content">

		<?php if ( have_rows( 'facts' ) ): ?>

			<ul class="list">

				<?php while ( have_rows( 'facts' ) ): the_row(); ?>

				<li>

					<em class="highlight"><?php the_sub_field('fact'); ?></em>

					<?php the_sub_field('desc'); ?>

				</li>

				<?php endwhile; ?>

			</ul>

		<?php endif; ?>

	</div>
	<!-- END list -->

</div>
<!-- END facts -->
