<?php

    $billboard_query = array(

        'post_type' => 'billboard',
        'orderby'   => 'rand',

    );

    $homepage_billboards = new WP_Query( $billboard_query );

?>

<!-- developer box -->
<div class="developer-box overlay right fill red">

    <span class="box-title">ball so hard</span>

    <?php

        while ( $homepage_billboards->have_posts() ) : $homepage_billboards->the_post();

        $slide_name = $post->post_name;

    ?>

    <span class="output-line"><?php echo $slide_name; ?></span>

    <?php endwhile; ?>

</div>
<!-- END developer box -->
