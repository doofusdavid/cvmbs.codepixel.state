<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // research content
    $outreach_content = $department_options[ 'outreach_content' ];

?>

<!-- visual FX -->
<div class="design-layer">

    <!-- image -->
    <div class="image fx-layer layer" style="background-image:url(<?php echo $outreach_content[ 'background' ]; ?>)">

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

        <?php echo $outreach_content[ 'title' ]; ?>

    </span>

    <span class="text">

        <?php echo $outreach_content[ 'text' ]; ?>

    </span>

    <a href="<?php echo $outreach_content[ 'button' ][ 'url' ]; ?>" class="content-button">

        <?php echo $outreach_content[ 'button' ][ 'title' ]; ?>

    </a>

</div>
<!-- END content -->
