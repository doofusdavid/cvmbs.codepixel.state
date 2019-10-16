<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $overview_content = $homepage_options[ 'overview_content' ];

?>

<!-- overlay -->
<div class="panel-overlay">

    <!--  -->

</div>
<!-- END overlay -->

<!-- content -->
<div class="panel-content">

    <!-- text content -->
    <div class="content text">

        <h3>

            <?php echo $overview_content[ 'title' ]; ?>

        </h3>

        <p>

            <?php echo $overview_content[ 'text' ]; ?>

        </p>

    </div>
    <!-- END text content -->

    <!-- callouts -->
    <div class="content callouts">

        <?php $statistic_1 = $overview_content[ 'statistic_1' ]; ?>

        <!-- callout -->
        <div id="ranking" class="callout-block">

            <span class="number">

                <?php echo $statistic_1[ 'value' ]; ?>

            </span>

            <span class="stat-label">

                <?php echo $statistic_1[ 'label' ]; ?>

            </span>

            <span class="stat-label source">

                <?php echo $statistic_1[ 'source' ]; ?>

            </span>

        </div>
        <!-- END callout -->

        <?php $statistic_2 = $overview_content[ 'statistic_2' ]; ?>

        <!-- callout -->
        <div id="specialties" class="callout-block">

            <span class="stat-label">

                <?php echo $statistic_2[ 'text_top' ]; ?>

            </span>

            <span class="number">

                <?php echo $statistic_2[ 'value' ]; ?>

            </span>

            <span class="stat-label">

                <?php echo $statistic_2[ 'text_bottom' ]; ?>

            </span>

        </div>
        <!-- END callout -->

        <?php $statistic_3 = $overview_content[ 'statistic_3' ]; ?>

        <!-- callout -->
        <div id="visits" class="callout-block ">

            <span class="number">

                <?php echo $statistic_3[ 'value' ]; ?>

            </span>

            <span class="stat-label">

                <?php echo $statistic_3[ 'label' ]; ?>

            </span>

        </div>
        <!-- END callout -->

    </div>
    <!-- END callouts -->

</div>
<!-- END content -->
