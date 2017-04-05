<?php

// Register Custom Navigation Walker
require_once("wp-bootstrap-navwalker.php");
 function nytema_setup(){
 	register_nav_menus(array(
 		'primary'=>__('Primary Menus')
 		));

 	wp_enqueue_style('bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array(), '4.0.0-alpha.6', 'all');

 	wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css', array(), '2017033001', 'all');

 	wp_deregister_script('jquery');
 	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '3.2.1', true);

 	wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true);
 	
 	wp_enqueue_script('bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), '4.0.0-alpha.6', true);
 }	 
 add_action('after_setup_theme', 'nytema_setup' );


 function set_excerpt_length(){
 	return 40;
 }
 add_filter('excerpt_length','set_excerpt_length'); 
 function nytema_excerpt_more($more){
 	return '<br /><a class="read-more" href="%1$s">Read more >></a>';
 }
 add_filter('excerpt_more', 'nytema_excerpt_more');

 
 
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'sidebar',
		'id'            => 'sidebar-widgets',
		'before_widget' => '<div class="side-widgets">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}


add_action( 'widgets_init', 'arphabet_widgets_init' );


if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
    add_image_size( 'featured-image', 700, 9999 ); // 700 pixels wide (and unlimited height)
    add_image_size( 'front-image', 400, 9999 ); // 400 pixels wide (and unlimited height)
 }


 


