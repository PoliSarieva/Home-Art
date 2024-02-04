<?php

if ( ! class_exists( 'Su_Products' ) ) : 

/**
 * This is our simple Products Class for our custom functionally
 */

class Su_Products {

    private $ctp_name = '';
    private $ctp_textdomain = 'softuni';
    //private Product = 'Product';
    //private Products = 'Products';

    public function __construct() {
        //Register CPT and taxonomy
        add_action( 'init', array( $this, 'product_cpt' ) );
        add_action( 'init', array( $this, 'product_category_taxonomy' ) );

        // //Register metaboxes
        // add_action( 'add_meta_boxes',array( $this, 'moss_register_meta_boxes' ) );

        // //Save Action
        // add_action( 'save_post', array( $this, 'mosses_meta_save' ) );
    }

    
    /**
     * REgister our Product Custom Post Type
     * 
     * @return void
     */
    public function product_cpt() {
        $labels = array(
        'name'                  => _x( 'Products', 'Post type general name', 'softuni' ),
		'singular_name'         => _x( 'Product', 'Post type singular name', 'softuni' ),
		'menu_name'             => _x( 'Products', 'Admin Menu text', 'softuni' ),
		'name_admin_bar'        => _x( 'Product', 'Add New on Toolbar', 'softuni' ),
		'add_new'               => __( 'Add New', 'softuni' ),
		'add_new_item'          => __( 'Add New Product', 'softuni' ),
		'new_item'              => __( 'New Product', 'softuni' ),
		'edit_item'             => __( 'Edit Product', 'softuni' ),
		'view_item'             => __( 'View Product', 'softuni' ),
		'all_items'             => __( 'All Products', 'softuni' ),
		// 'search_items'          => __( 'Search Products', 'softuni' ),
		// 'parent_item_colon'     => __( 'Parent Products:', 'softuni' ),
		// 'not_found'             => __( 'No books found.', 'softuni' ),
		// 'not_found_in_trash'    => __( 'No books found in Trash.', 'softuni' ),
		// 'featured_image'        => _x( 'Product Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softuni' ),
		// 'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		// 'remove_featured_image' => _x( 'Remove cover image', 'Override  s the “Remove featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		// 'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		// 'archives'              => _x( 'Product archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'softuni' ),
		// 'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'softuni' ),
		// 'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'softuni' ),
		// 'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'softuni' ),
		// 'items_list_navigation' => _x( 'Products list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'softuni' ),
		// 'items_list'            => _x( 'Products list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'softuni' ),
	    
    );

    $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 
                                        'editor', 
                                        'author', 
                                        'thumbnail',
                                        'revisions', 
                                    ),
        'show_in_rest'      => true,
	);

        register_post_type( 'product', $args );
    }

    /**
     * Register our Category for our Moss CPT
     * 
     * @return void
     */
    public function product_category_taxonomy () {
        $labels = array (
            'name'          => 'Categories',
            'singular_name' => 'Category',
        );

        $args = array (
            'labels'       => $labels,
            'show_in_rest' => true,
            'hierarchical' => true,
        );

        register_taxonomy( 'product-category', 'product', $args );
    }
}

$su_products_instance = new Su_Products();

endif;