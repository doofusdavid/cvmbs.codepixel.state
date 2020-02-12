<?php

    $department_meta = wp_get_post_terms( $post->ID, 'department' );
    $department_name = $department_meta[ 0 ]->name;
    $department_text = $department_meta[ 0 ]->description;

?>

<!-- block -->
<div class="department-description program-block">

    <!-- inner -->
    <div class="department-description__inner">

        <h2 class="description_title">

            <?php echo $department_name; ?>

        </h2>

        <div class="description_text">

            <span class="label">

                about the department

            </span>

            <p>

                <?php echo $department_text; ?>

            </p>

        </div>

    </div>
    <!-- END inner -->

</div>
<!-- END block -->
