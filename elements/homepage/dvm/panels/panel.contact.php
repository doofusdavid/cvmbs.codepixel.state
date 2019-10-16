<?php

    $homepage_options = get_field( 'dvm_homepage_options' );

    $contact_content = $homepage_options[ 'contact_content' ];

?>

<!-- overlay -->
<div class="panel-overlay">

    <!--  -->

</div>
<!-- END overlay -->

<!-- content -->
<div class="panel-content">

    <h2>

        <?php echo $contact_content[ 'title' ]; ?>

    </h2>

    <span class="description-text">

        <?php echo $contact_content[ 'text' ]; ?>

    </span>

    <div class="button-group">

        <?php $contact_links = $contact_content[ 'links' ]; ?>

        <?php foreach( $contact_links as $contact_link ) : ?>

        <!-- button -->
        <a href="<?php echo $contact_link[ 'link' ][ 'url' ]; ?>" id="high-school-student" class="contact-button">

            <span>

                <?php echo $contact_link[ 'link' ][ 'title' ]; ?>

            </span>

        </a>
        <!-- END button -->

        <?php endforeach; ?>

    </div>

</div>
<!-- END content -->
