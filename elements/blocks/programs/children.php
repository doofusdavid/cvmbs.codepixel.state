<div style="background:#172d2a;">

	<?php
	$terms = wp_get_post_terms( $post->ID, 'academic_level' );

	if ($terms) :
	?>

	<div style="background:#003E46;padding: 8vw;">
		<h2>Academic Level</h2>
		<pre>
			<?php print_r( $terms ); ?>
		</pre>
	</div>

	<?php
	endif;

	$args = array(
		'post_parent' => $post->ID,
		'post_status' => 'publish'
	);

	if ( $children = get_children( $args ) ) :
	?>

	<div style="padding: 8vw;">
		<h2>Children</h2>

		<?php foreach( $children as $child ) : ?>
		<h3 data-post-id="<?php echo $child->ID; ?>" style="color:#C0D62A;">
			<?php echo $child->post_title; ?>
		</h3>
		<?php endforeach; ?>
	</div>

	<?php
	endif;
	?>

</div>
