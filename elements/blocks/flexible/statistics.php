
<?php $statistics = get_sub_field( 'infostats' ); ?>

<!-- image array -->
<div class="template-block statistics">

    <!-- three images -->
    <div class="content-row thirds">

        <?php foreach ( $statistics as $statistic ) : ?>

        <div class="content-block statistics">

            <span class="number">

                <?php echo $statistic[ 'number' ]; ?>

            </span>

            <span class="title">

                <?php echo $statistic[ 'label' ]; ?>

            </span>

            <span class="caption">

                <?php echo $statistic[ 'description' ]; ?>

            </span>

        </div>

        <?php endforeach; ?>

    </div>
    <!-- END three images -->

</div>
<!-- END image array -->
