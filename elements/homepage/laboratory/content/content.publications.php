<?php

    $lab_options  = get_field( 'lab_homepage_options' );
    $publications = $lab_options[ 'publications' ];
    $link_option  = $lab_options[ 'publications_link_option' ];
    $publications_link = $lab_options[ 'publications_link' ];

?>

<!-- container -->
<section id="publications" class="laboratory-content homepage-section slides">

    <h2>Publications</h2>

    <?php foreach ( $publications as $publication ) :

    $content = $publication[ 'publication' ]; ?>

    <!-- publication -->
    <?php echo $content; ?>
    <!-- END publication -->

    <?php endforeach; ?>

    <?php if ( $link_option ) : ?>

    <a class="publications-link" href="<?php echo $publications_link; ?>">

        more publications

    </a>

    <?php endif; ?>

</section>
<!-- END container -->
