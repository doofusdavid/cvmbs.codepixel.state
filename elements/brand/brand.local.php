<?php

    $site_title  = get_field( 'site_title', 'options' );
    $title_break = get_field( 'site_title_line_break', 'options' );
    $site_line_1 = get_field( 'site_title_line_1', 'options' );
    $site_line_2 = get_field( 'site_title_line_2', 'options' );

?>

<!-- local.brand -->
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="brand-local">

    <?php

        if ( $title_break[ 0 ] == 'break' ) {

            echo $site_line_1 . '<br />' . $site_line_2;

        } else {

            echo $site_title;

        }

    ?>

</a>
<!-- END local.brand -->
