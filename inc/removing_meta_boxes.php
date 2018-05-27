<?php

// Hide all metaboxes for this custom post type $wp_meta_boxes
add_filter("get_user_option_meta-box-order_icbscbks", icbscbks_add_remove_metaboxes, PHP_INT_MAX);
function icbscbks_add_remove_metaboxes() {
    global $wp_meta_boxes;
    $wp_meta_boxes = array('icbscbks' => array(
        'advanced' => array(
            'core' => $wp_meta_boxes['icbscbks']['advanced']['core'],
            'default' => $wp_meta_boxes['icbscbks']['advanced']['default']
        ),
        'side' => array('core' => array('submitdiv' => $wp_meta_boxes['icbscbks']['side']['core']['submitdiv'])),
        'normal' => array('core' => $wp_meta_boxes['icbscbks']['normal']['core']),
    ));
}
