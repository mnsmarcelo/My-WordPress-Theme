<?php 

add_theme_support( 'post-thumbnails' );
add_image_size('featuredImageCropped', 367, 245, true);
the_post_thumbnail('featuredImageCropped');


add_image_size('featuredImage', 825, 550, true);
add_image_size('relatedPosts', 245, 163, true);
add_image_size('listPosts', 368, 245, true);
add_image_size('mostPopular', 60, 60, true);

add_image_size( 'custom-size', 1024, 512, true );
the_post_thumbnail( 'custom-size' );

the_post_thumbnail('featuredImage');

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h2>',
	));
}

function shapeSpace_popular_posts($post_id) {
	$count_key = 'popular_posts';
	$count = get_post_meta($post_id, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	} else {
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}
function shapeSpace_track_posts($post_id) {
	if (!is_single()) return;
	if (empty($post_id)) {
		global $post;
		$post_id = $post->ID;
	}
	shapeSpace_popular_posts($post_id);
}
add_action('wp_head', 'shapeSpace_track_posts');

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );