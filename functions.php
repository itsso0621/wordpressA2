<?php
function register_widget_areas() {
	register_sidebar(array(
		'name' => 'Footer area one',
		'id' => 'footer_area_one', 
		'description' => 'This widget is for the footer',
		'before_widget' => '<section class="footer-area footer-area-one">',
		'after_widget' => '</section>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'Footer area two',
		'id' => 'footer_area_two', 
		'description' => 'This widget is for the footer',
		'before_widget' => '<section class="footer-area footer-area-two">',
		'after_widget' => '</section>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'Footer area three',
		'id' => 'footer_area_three', 
		'description' => 'This widget is for the footer',
		'before_widget' => '<section class="footer-area footer-area-three">',
		'after_widget' => '</section>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
}
add_action('widgets_init', 'register_widget_areas');

// custom post-type
function candyExplanation() {
    $labels = array(
        'name' => ("Candies"),
        'singular_name' => ('Candy'),
        'menu_name' => ('Candy Explanation')
    );


    $args = array(
        'label' => ('candies'),
        'description' => ('Explantaion for some candies'),
        'labels' => $labels,
        'supports' => array(
			'title',
			'editor',
			'excerpt',
			'author',
			'thumbnail',
			'comments',
        ),
        // 'post_type' => 'candies',
        'texonomies' => array('category'),
        'public' => true,
        'show_ui' => true,
        'can_export' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('candies', $args);
    wp_get_recent_posts('candies', $args );
    // $query = new WP_Query( $args ); 
}

add_action('init', 'candyExplanation');

add_filter( 'widget_posts_args', 'wp130512_recent_posts_args');

/**
 * Add CPTs to recent posts widget
 *
 * @param array $args default widget args.
 * @return array $args filtered args.
 */
function wp130512_recent_posts_args($args) {
    $args['post_type'] = array('post', 'candies');
    return $args;
}

?>