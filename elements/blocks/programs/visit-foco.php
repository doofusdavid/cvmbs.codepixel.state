<?php $visit = get_field( 'visit_foco', 'options' ); ?>

<!-- location -->
<div class="location program-block">

	<div class="location__inner">

		<div class="location__content">

			<h2 class="location__title program-block__title"><?php echo $visit['heading']; ?></h2>

			<?php
			echo $visit['desc'];

			$ctas = $visit['ctas'];

			if ( $ctas ) :
				foreach( $ctas as $cta ) :
					$link = $cta['link'];
			?>

			<p class="location__cta">
				<a class="location__button" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
			</p>

			<?php
				endforeach;
			endif;
			?>

		</div><!-- .location__content -->

	</div><!-- .location__inner -->

</div><!-- .location -->
