<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $degree_programs_content = $homepage_options[ 'degree_programs_content' ];

?>

<!-- overlay -->
<div class="panel-overlay">

    <!--  -->

</div>
<!-- END overlay -->

<!-- content -->
<div class="panel-content">

    <h2>

        <?php echo $degree_programs_content[ 'title' ]; ?>

    </h2>

    <p>

        <?php echo $degree_programs_content[ 'text' ]; ?>

    </p>

    <a class="document-link" href="<?php echo $degree_programs_content[ 'link' ][ 'url' ]; ?>">

        <?php echo $degree_programs_content[ 'link' ][ 'title' ]; ?>

    </a>

</div>
<!-- END content -->
