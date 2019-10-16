<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $student_ambassadors_content = $homepage_options[ 'student_ambassadors_content' ];

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

            <!-- want to know more<br />about the CSU experience? -->
            <?php echo $student_ambassadors_content[ 'title' ]; ?>

        </h2>

        <p>

            <?php echo $student_ambassadors_content[ 'bold_text' ]; ?>

        </p>

        <p class="smaller">

            <?php echo $student_ambassadors_content[ 'text' ]; ?>

        </p>

        <a class="question-link" href="<?php echo $student_ambassadors_content[ 'link' ][ 'url' ]; ?>">

            <?php echo $student_ambassadors_content[ 'link' ][ 'title' ]; ?>

        </a>

    </div>
    <!-- END text content -->

</div>
<!-- END content -->
