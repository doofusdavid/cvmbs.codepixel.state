
<!-- block container -->
<div class="template-block styled-list">

    <!-- block.inner -->
	<div class="template-block__inner">

        <!-- styled list -->
        <div class="styled-list-content">

        <?php

			$heading_option = get_sub_field( 'heading_option' );

			$list_title    = get_sub_field( 'heading' );

			if ( $heading_option ) : ?>

				<<?php echo $list_title[ 'html_tag' ]; ?> class="list-title">

					<?php echo $list_title[ 'title' ]; ?>

				</<?php echo $list_title[ 'html_tag' ]; ?>>


			<?php endif;

            if ( have_rows( 'styled_list_items' ) ) : ?>

			<!-- <ul> -->

                <?php while( have_rows( 'styled_list_items' ) ) : the_row();

                    $item_title   = get_sub_field( 'list_item_title' );
                    $item_content = get_sub_field( 'list_item_content' ); ?>

					<div class="styled-list-item">

	                    <h5 class="styled-list-item-title">

							<?php echo $item_title; ?>

						</h5>

	                    <p class="styled-list-item-content">

							<?php echo $item_content; ?>

						</p>

					</div>

                <?php endwhile; ?>

			<!-- </ul> -->

            <?php endif; ?>

        </div>
        <!-- END styled list -->

    </div>
    <!-- END block.inner -->

</div>
<!-- END block container -->
