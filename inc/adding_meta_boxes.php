<?php

function icbscbks_add_custom_box()
{
    $screens = ['icbscbks'];
    foreach ($screens as $screen) {
        // Adding Meta box for CSS
        add_meta_box(
            'icbscbks_mb_css',           // Unique ID
            'Custom CSS',  // Box title
            'icbscbks_mb_css_html',  // Content callback, must be of type callable
            $screen                   // Post type
        );
        // Adding Meta box for JS
        add_meta_box(
            'icbscbks_mb_js',           // Unique ID
            'Custom JS',  // Box title
            'icbscbks_mb_js_html',  // Content callback, must be of type callable
            $screen                   // Post type
        );
    }
}
add_action('add_meta_boxes', 'icbscbks_add_custom_box');


function icbscbks_mb_css_html($post)
{
    $value = get_post_meta($post->ID, '_key_icbscbks_mb_css', true);
    ?>
    <textarea placeholder="Add any CSS to be included with this content in the body" rows="20" name="icbscbks_mb_css" id="icbscbks_mb_css" class="postbox" style="width:100%;resize:vertical;overflow:auto;padding:15px 10px;" ><?php echo $value; ?></textarea>
    <?php
}
function icbscbks_mb_js_html($post)
{
    $value = get_post_meta($post->ID, '_key_icbscbks_mb_js', true);
    ?>
    <textarea placeholder="Add javascript code with this content to be included at the footer" rows="20" name="icbscbks_mb_js" id="icbscbks_mb_js" class="postbox" style="width:100%;resize:vertical;overflow:auto;padding:15px 10px;"><?php echo $value; ?></textarea>
    <?php
}


function icbscbks_save_postdata($post_id)
{
    if (array_key_exists('icbscbks_mb_css', $_POST)) {
        update_post_meta(
            $post_id,
            '_key_icbscbks_mb_css',
            $_POST['icbscbks_mb_css']
        );
    }
    if (array_key_exists('icbscbks_mb_js', $_POST)) {
        update_post_meta(
            $post_id,
            '_key_icbscbks_mb_js',
            $_POST['icbscbks_mb_js']
        );
    }
}
add_action('save_post', 'icbscbks_save_postdata');

