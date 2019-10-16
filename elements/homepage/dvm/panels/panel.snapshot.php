<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $student_snapshot_content = $homepage_options[ 'student_snapshot_content' ];

?>

<!-- overlay -->
<div class="panel-overlay">

    <!--  -->

</div>
<!-- END overlay -->

<!-- content -->
<div class="panel-content">

    <h2>

        <?php echo $student_snapshot_content[ 'title' ]; ?>

    </h2>

    <p>

        <?php echo $student_snapshot_content[ 'text' ]; ?>

    </p>

    <a class="document-link" href="<?php echo $student_snapshot_content[ 'link' ][ 'url' ]; ?>">

        <?php echo $student_snapshot_content[ 'link' ][ 'title' ]; ?>

    </a>

</div>
<!-- END content -->
