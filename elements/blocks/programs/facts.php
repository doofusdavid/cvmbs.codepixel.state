<div class="program-facts facts">
	<div class="program-facts__inner">
		<div class="facts-title">
			<h2 class="title"><?php _e( 'Program Facts', 'cvmbsPress'); ?></h2>
		</div><!-- END title -->

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

		</div><!-- END list -->
	</div><!-- .program-facts__inner -->
</div><!-- .program-facts -->
