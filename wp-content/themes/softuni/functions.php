<?php

/**
 * Never worry about cache again!
 */
function my_load_scripts($hook) {

    $args = array( 
        'in_footer' => true,
        'strategy' => 'defer',
    );

	// create my own version codes
	// $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'js/custom.js' ));
	// $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));
	
	// 
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(),'1.0.0', $args );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'1.0.0' );
    wp_enqueue_script( 'jquery-1.10.2', get_template_directory_uri() . '/js/jquery-1.10.2.js', array(),'1.0.0', $args );
    wp_enqueue_script( 'jquery-parallax-1.1.3', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(),'1.0.0', $args );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(),'1.0.0', $args );
	
    wp_enqueue_style( 'bootstrap.css', 	get_template_directory_uri() . '/css/bootstrap.css', false,   '1.0.0' );
    wp_enqueue_style( 'bootstrap-min.css', 	get_template_directory_uri() . '/css/bootstrap.min.css', false,   '1.0.0' );
    wp_enqueue_style( 'style.css', 	get_template_directory_uri() . '/css/style.css', false,   '1.0.0' );
	wp_enqueue_style( 'font-awesome.css', 	get_template_directory_uri() . '/font-awesome/css/font-awesome.css', false,   '1.0.0' );
    wp_enqueue_style( 'font-awesome-min.css', 	get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', false,   '1.0.0' );
    wp_enqueue_style ( 'my_css' );

}
add_action('wp_enqueue_scripts', 'my_load_scripts');