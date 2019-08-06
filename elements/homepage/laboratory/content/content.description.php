<?php

    // lab homepage options
    $lab_options = get_field( 'lab_homepage_options' );

?>

<!-- homepage.intro -->
<section id="laboratory-description" class="homepage-section">

    <!-- description -->
    <div class="description-text">

        <?php echo $lab_options[ 'description_text' ]; ?>

    </div>
    <!-- END introduction -->

</section>
<!-- END homepage.intro -->
