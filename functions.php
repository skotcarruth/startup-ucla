<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
		register_post_type( 
			'people',
			array(
            	'labels' => array('name' => __( 'People' )),
				'public' => true,
				'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
				'taxonomies' => array('post_tag')
                ));
		register_post_type( 
			'startups',
			array(
            	'labels' => array('name' => __( 'Startups' )),
				'public' => true,
				'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
				'taxonomies' => array('post_tag', 'founders')
                )); };

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 175, 175, true );
add_image_size( 'people', 150, false );
add_image_size( 'director', 220, false );

?>
<?php if ( function_exists ('register_sidebar')) { 
    register_sidebar ('internships'); 
} ?>