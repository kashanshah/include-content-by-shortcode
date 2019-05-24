<?php 
/*
Plugin Name: Include Content By Shortcode
Plugin URI: http://kashanshah.ga
Description: This plugin allows to add single content in multiple posts and pages by a shortcode. It is used to fulfill the concept of PHP's 'include' function. It can add HTML, CSS and JS also by using just a simple shortcode.
Author: Kashan Shah
Version: 0.3.0
Author URI: http://www.kashanshah.ga
*/

//Adding Plugin Menu
include('inc/admin_view.php');
include('inc/registering_post_type.php');
include('inc/removing_meta_boxes.php');
include('inc/adding_meta_boxes.php');
include('inc/adding_copy_shortcode_column.php');
include('inc/shortcode.php');
include('inc/enquing_files.php');
