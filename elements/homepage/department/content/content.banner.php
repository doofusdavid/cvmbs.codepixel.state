<?php

    // department homepage options
    $department_options = get_field( 'department_homepage_options' );

    // content variable(s)
    $department_intro_text = $department_options[ 'department_intro_text' ];

?>

<!-- homepage.intro -->
<section id="department-banner" class="homepage-section">

    <!-- introduction -->
    <div class="introduction-text">

        <?php echo $department_intro_text; ?>

    </div>
    <!-- END introduction -->

    <!-- quick links -->
    <ul class="link-box">

        <li class="link-item">

            <a href="#">degree programs</a>

        </li>

        <li class="link-item">

            <a href="#">centers and institutes</a>

        </li>

        <li class="link-item">

            <a href="#">services and outreach</a>

        </li>

        <li class="link-item">

            <a href="#">about the department</a>

        </li>

        <li class="link-item">

            <a href="#">communications</a>

        </li>

    </ul>
    <!-- END quick links -->

</section>
<!-- END homepage.intro -->
