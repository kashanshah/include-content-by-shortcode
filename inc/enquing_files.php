<?php
include_once("constants.php");

add_action( 'admin_enqueue_scripts', 'icbscbks_load_wp_admin_style' );
function icbscbks_load_wp_admin_style() {
    wp_register_style( 'icbscbks_admin_css', ICBSCBKS_PLUGIN_DIR_URL . '/css/style.css', false, ICBSCBKS_PLUGIN_VERSION );
    wp_enqueue_style( 'icbscbks_admin_css' );
}

//apply_filters( 'wp_loaded', 'icbscbks_load_wp_admin_richeditor_media_btn' );
//function icbscbks_load_wp_admin_richeditor_media_btn() {
//    $icbscbks_settings = get_options("icbscbks_settings", array());
//    if (isset($icbscbks_settings["richeditor"]) && $icbscbks_settings["richeditor"] == 0){
//        echo '<style>'.file_get_contents( ICBSCBKS_PLUGIN_DIR_URL . '/css/richeditor.css').'</style>';
//    }
//}
