<?php

    // Template Name: Flexible Page [DVM]

?>

<?php get_header(); ?>

<div id="primary" class="content-area dvm-flexible">
	<main id="main" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php

            $header = get_field( 'page_header' );

            if( $header[ 'styled_header' ] ) {

                get_template_part( 'elements/blocks/dvm/block.header.styled' );

                $content_class = 'styled';

            } else {

                get_template_part( 'elements/blocks/dvm/block.header.default' );

                $content_class = 'default';

            }

        ?>

        <?php

            $page_notification = get_field( 'page_notification' );
            $notification = $page_notification[ 'notification' ];

            if ( $notification ) {

                // get_template_part( 'elements/blocks/dvm/block.notification' );

            }

        ?>

        <div class="flexible-page-content">

            <?php if ( have_rows( 'page_blocks' ) ) :

                $page_blocks = get_field( 'page_blocks' );

                while ( have_rows( 'page_blocks' ) ) : the_row();

                    if ( get_row_layout() == 'text_editor' ) :

                        get_template_part( 'elements/blocks/dvm/block.text' );

                    elseif ( get_row_layout() == 'quotation' ) :

                        get_template_part( 'elements/blocks/dvm/block.quotation' );

                    elseif ( get_row_layout() == 'contact_group' ) :

                        get_template_part( 'elements/blocks/dvm/block.contacts' );

                    elseif ( get_row_layout() == 'content_area_with_image' ) :

                        get_template_part( 'elements/blocks/dvm/block.content.image' );

                    elseif ( get_row_layout() == 'ctas_with_image' ) :

                        get_template_part( 'elements/blocks/dvm/block.cta.image' );

                    elseif ( get_row_layout() == 'cta' ) :

                        get_template_part( 'elements/blocks/dvm/block.cta' );

                    elseif ( get_row_layout() == 'video' ) :

                        get_template_part( 'elements/blocks/dvm/block.video' );

                    elseif ( get_row_layout() == 'accordion' ) :

                        get_template_part( 'elements/blocks/dvm/block.accordion' );

                    elseif ( get_row_layout() == 'steps' ) :

                        get_template_part( 'elements/blocks/dvm/block.steps' );

                    elseif ( get_row_layout() == 'timeline' ) :

                        get_template_part( 'elements/blocks/dvm/block.timeline' );

                    elseif ( get_row_layout() == 'styled_list' ) :

                        get_template_part( 'elements/blocks/dvm/block.styled.list' );

                    else:

                        // no blocks found

                    endif;

				endwhile;

            endif; ?>

        </div><!-- .flexible-page-content -->

    </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_footer(); ?>
