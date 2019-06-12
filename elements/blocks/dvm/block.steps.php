<div class="template-block">

	<div class="template-block__inner">

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
