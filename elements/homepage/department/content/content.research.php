<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // research content
    $research_content = $department_options[ 'research_content' ];

?>

<!-- visual FX -->
<div class="design-layer">

    <!-- image -->
    <div class="image fx-layer layer" style="background-image:url(<?php echo $research_content[ 'background' ]; ?>)">

        <!-- ball so hard -->

    </div>
    <!-- END image -->

    <!-- color -->
    <div class="color fx-layer layer">

        <!--  -->

    </div>
    <!-- END color -->

</div>
<!-- END visual FX -->

<!-- content -->
<div class="content-layer">

    <span class="headline">

        <?php echo $research_content[ 'title' ]; ?>

    </span>

    <span class="text">

        <?php echo $research_content[ 'text' ]; ?>

    </span>

    <a href="<?php echo $research_content[ 'button' ][ 'url' ]; ?>" class="content-button">

        <?php echo $research_content[ 'button' ][ 'title' ]; ?>

    </a>

</div>
<!-- END content -->
