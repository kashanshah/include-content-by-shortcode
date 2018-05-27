<?php

// Adding shortcode column to the icbscbks post type:
add_filter( 'manage_icbscbks_posts_columns', 'icbscbks_set_custom_edit_icbscbks_columns' );
function icbscbks_set_custom_edit_icbscbks_columns($columns) {
    $columns['Shortcode'] = 'Shortcode';
    return $columns;
}

// Add the data to the shortcode column for the icbscbks post type:
add_action( 'manage_icbscbks_posts_custom_column' , 'icbscbks_custom_icbscbks_column', 10, 2 );
function icbscbks_custom_icbscbks_column( $column, $post_id ) {
    switch ( $column ) {
        case 'Shortcode' :
            echo '<span class="icbscbks_shortcode"><input style="background: inherit;color: inherit;font-size: 16px;width:100%;padding: 4px 8px;margin: 0;" type="text" value="[includedcontentbyshortcode id='.$post_id.']" readonly onfocus="this.select();" /></span>';
            break;
    }
}
