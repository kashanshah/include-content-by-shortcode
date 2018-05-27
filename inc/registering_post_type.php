<?php

// Creating custom post type for storing Shortcode Content
add_action( 'init', 'icbscbks_create_posttype' );
function icbscbks_create_posttype() {
     register_post_type( 'icbscbks',
        array(
            'labels' => array(
                'name' => __( 'Included Contents' ),
                'singular_name' => __( 'Included Content' ),
				'add_new' => _x('Add New', 'Included Content'),
				'add_new_item' => __('Add New Included Content'),
				'edit_item' => __('Edit Included Content'),
				'new_item' => __('New Included Content'),
				'view_item' => __('View Included Content'),
				'search_items' => __('Search Included Content'),
				'not_found' =>  __('Nothing found'),
				'not_found_in_trash' => __('Nothing found in Trash'), 
				'parent_item_colon' => '',
            ),
            'public' => true,
			'menu_icon' => 'dashicons-format-aside',
            'has_archive' => false,
            'rewrite' => array('slug' => 'icbscbks'),
			'supports' => array('title','editor','revisions', 'author')
        )
    );
}
