<?php

    $lab_options = get_field( 'lab_homepage_options' );
    $fast_facts  = $lab_options[ 'fast_facts' ];

?>

<!-- section -->
<section id="laboratory-facts" class="laboratory-content template-block fast-facts">

    <div class="fast-facts__inner">

        <!-- grid -->
		<div class="fast-facts__grid">

			<?php foreach ( $fast_facts as $fast_fact ) :

            $fact_value  = $fast_fact[ 'value' ];
            $fact_rate   = $fast_fact[ 'rate' ];
            $fact_desc   = $fast_fact[ 'description' ];
            $fact_source = $fast_fact[ 'source' ]; ?>

			<div class="fast-fact">

				<span class="fast-fact__value">

                    <?php echo $fact_value; ?>

                </span>

                <span class="fast-fact__rate">

                    <?php echo $fact_rate; ?>

                </span>

                <span class="fast-fact__desc">

                    <?php echo $fact_desc; ?>

                </span>

				<?php if ( $fact_source ) : ?>

				<span class="fast-fact__source">

                    (<?php echo $fact_source; ?>)

                </span>

				<?php endif; ?>

			</div>

            <?php endforeach; ?>

		</div>
        <!-- END grid -->

    </div><!-- .fast-facts__inner -->

</section>
<!-- END section -->
