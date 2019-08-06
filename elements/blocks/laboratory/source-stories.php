<?php
$args = array(
	'per_page' => 6
);

if ( $tag = get_sub_field('source_tag') ) {
	$args['filter[tag]'] = $tag;
}

$response = wp_remote_get( add_query_arg(
	$args,
	'https://cvmbs.source.colostate.edu/wp-json/wp/v2/posts'
) );

if ( ! is_wp_error( $response ) && $response['response']['code'] == 200 ) :
	if ( ! empty( $posts = json_decode( $response['body'] ) ) ) :
?>

<section class="source-stories">
	<div class="source-stories__heading">
		<h2 class="source-stories__title"><?php the_sub_field('heading'); ?></h2>

		<?php if ( $cta = get_sub_field('cta_array') ) : ?>

		<p class="source-stories__cta">
			<a href="<?php echo esc_url( $cta['url'] ); ?>"><?php echo esc_attr( $cta['title'] ); ?></a>
		</p>

		<?php endif; ?>
	</div><!-- .source-stories__heading -->

	<div class="source-stories__grid">

		<?php foreach( $posts as $post ) : ?>

		<a class="source-stories__item" href="<?php echo $post->link; ?>">
			<span class="source-stories__item-image" style="background-image:url(<?php echo $post->featured_image->source_url; ?>);"></span>
			<div class="source-stories__item-content">
				<h3 class="source-stories__item-title">
					<?php echo $post->title->rendered; ?>
				</h3>
				<div class="source-stories__item-excerpt">
					<?php echo $post->excerpt->rendered; ?>
				</div><!-- .source-stories__item-excerpt -->
			</div><!-- .source-stories__item-content -->
		</a><!-- .source-stories__item -->

		<?php endforeach; ?>

	</div><!-- .source-stories__grid -->
</section><!-- .source-stories -->

<?php
	endif;
endif;
