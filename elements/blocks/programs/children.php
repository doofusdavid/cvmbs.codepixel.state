<?php
$args = array(
	'post_parent' => $post->ID,
	'post_status' => 'publish'
);

if ( $child_posts = get_children( $args ) ) :
?>

<pre>
	<?php print_r( $child_posts ); ?>
</pre>

<?php
endif;
