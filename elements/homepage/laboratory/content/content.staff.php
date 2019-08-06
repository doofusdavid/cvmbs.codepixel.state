<?php

    $lab_options = get_field( 'lab_homepage_options' );
    $lab_staff   = $lab_options[ 'lab_staff' ];

?>

<!-- container -->
<section id="staff" class="laboratory-content template-block contact-group">

    <div class="template-block__inner">

        <h2>People</h2>

        <div class="group-bios__grid">

            <?php foreach ( $lab_staff as $staff ) :

            $staff_name  = $staff[ 'name' ];
            $staff_photo = $staff[ 'photo' ];
            $staff_desc  = $staff[ 'description' ];
            $staff_phone = $staff[ 'phones' ];
            $staff_email = $staff[ 'email' ]; ?>

    		<div class="group-bios__grid-item">

                <div class="group-bios__image">

                    <img src="<?php echo $staff_photo; ?>" />

                </div>

    			<div class="group-bios__details">

                    <p class="group-bios__name">

                        <?php echo $staff_name; ?>

                    </p>

    				<div class="group-bios__desc">

                        <?php echo $staff_desc; ?>

                    </div>

    				<div class="group-bios__contact">

                        <?php foreach ( $staff_phone as $phone ) :

                        $phone_type = $phone[ 'type' ];
                        $phone_number = $phone[ 'number' ]; ?>

    					<p>

    						<span class="group-bios__contact-detail"><?php echo $phone_type; ?></span>:

    						<?php echo $phone_number; ?>

    					</p>

                        <?php endforeach; ?>

    					<p>

                            <a href="mailto:<?php the_sub_field('email'); ?>"><?php echo $staff_email; ?></a>

                        </p>

    				</div>

    			</div>

            </div>

            <?php endforeach; ?>

    	</div>

    </div>

</section>
<!-- END container -->
