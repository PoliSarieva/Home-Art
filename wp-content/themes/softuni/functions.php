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
	
    wp_enqueue_style( 'bootstrap.css', 	get_template_directory_uri() . '/css/bootstrap.css', false,   '1.0.0' );
    wp_enqueue_style( 'bootstrap-min.css', 	get_template_directory_uri() . '/css/bootstrap.min.css', false,   '1.0.0' );
    wp_enqueue_style( 'style.css', 	get_template_directory_uri() . '/css/style.css', false,   '1.0.0' );
	wp_enqueue_style( 'font-awesome.css', 	get_template_directory_uri() . '/font-awesome/css/font-awesome.css', false,   '1.0.0' );
    wp_enqueue_style( 'font-awesome-min.css', 	get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', false,   '1.0.0' );
    wp_enqueue_style ( 'my_css' );

}
add_action('wp_enqueue_scripts', 'my_load_scripts');

/**
 * Register our navigation menus
 * 
 * @return void
 */

function softuni_register_nav_menus() {
    register_nav_menus(
        array(
        'primary_menu'          => __( 'Primary Menu', 'softuni' ),
        'footer_menu_site_info' => __( 'Footer Menu Site Info', 'softuni' ),
        'company_info'          => __( 'Company info', 'softuni' ),
        )
    );
}
    add_action( 'after_setup_theme', 'softuni_register_nav_menus' );


    /**
     * Sidebar here
     * 
     * @return void
     */
    
function softuni_sidebars() {
    register_sidebar(
        array(
            'id'            => 'footer-1',
            'name'          => __( 'Footer 01' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-2',
            'name'          => __( 'Footer 02' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'softuni_sidebars' );