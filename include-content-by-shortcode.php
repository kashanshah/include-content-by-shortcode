<?php
/*
Plugin Name: Include Content By Shortcode
Plugin URI: https://www.kashanshah.com
Description: This plugin allows you to include content from a custom post type by using a shortcode. You can also add custom CSS and JS to the included content.
Author: Kashan Shah
Version: 0.5
Author URI: https://www.kashanshah.com
*/

//Adding Plugin Menu
include('inc/admin_view.php');
include('inc/registering_post_type.php');
include('inc/adding_meta_boxes.php');
include('inc/adding_copy_shortcode_column.php');
include('inc/shortcode.php');
include('inc/enqueue_files.php');
