<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $student_support_content = $homepage_options[ 'student_support_content' ];

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

        <h2>

            <?php echo $student_support_content[ 'title' ]; ?>

        </h2>

        <p>

            <?php echo $student_support_content[ 'text' ]; ?>

        </p>

        <a class="question-link" href="<?php echo $student_support_content[ 'link' ][ 'url' ]; ?>">

            <?php echo $student_support_content[ 'link' ][ 'title' ]; ?>

        </a>

    </div>
    <!-- END text content -->

</div>
<!-- END content -->
