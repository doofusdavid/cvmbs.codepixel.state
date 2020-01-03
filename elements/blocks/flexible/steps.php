<?php

	// heading options
	$heading_option  = get_sub_field( 'heading_option' );
	$heading_content = get_sub_field( 'heading' );

?>

<div class="template-block steps">

	<div class="template-block__inner">

		<?php if ( $heading_option ) : ?>

            <<?php echo $heading_content[ 'html_tag' ]; ?> class="description-title">

                <?php echo $heading_content[ 'title' ]; ?>

            </<?php echo $heading_content[ 'html_tag' ]; ?>>

        <?php endif; ?>

        <div class="steps">

        <?php

            if ( have_rows( 'step' ) ) :

                while( have_rows( 'step' ) ) : the_row();

                    $step_number  = get_sub_field( 'step_#' );
                    $step_content = get_sub_field( 'step_text' ); ?>

                    <div class="step-container">

                        <div class="step-number">

                            <span class="step-label">

                                step

                            </span>

                            <span class="step-numeral">

                                <?php echo $step_number; ?>

                            </span>

                        </div>

                        <div class="step-content">

                            <?php echo $step_content; ?>

                        </div>

                    </div>

                <?php endwhile;

            endif;

        ?>

        </div>

    </div>

</div>
