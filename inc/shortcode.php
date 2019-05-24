<?php

add_shortcode( 'includedcontentbyshortcode', 'icbscbks_func' );

// Reading Shortcode From Content
function icbscbks_func( $atts ) {
    $icbscbks_scAttr = shortcode_atts( array(
        'slug' => '',
        'id' => '',
        'css' => 'true',
        'js' => 'true',
    ), $atts );
    
    // [icbscbks id=123]
    if($icbscbks_scAttr['id'] != ""){
        $icbscbks_post = get_post($icbscbks_scAttr['id']);
        if($icbscbks_post->post_type == 'icbscbks'){
            $icbscbks_postcontent = $icbscbks_post->post_content;
            $icbscbks_postcontent = apply_filters('the_content', $icbscbks_postcontent);
            if($icbscbks_scAttr['css'] != 'false'){
                if(get_post_meta($icbscbks_post->ID, '_key_icbscbks_mb_css', true) != ''){
                    $icbscbks_postcontent .= '
<style>'.get_post_meta($icbscbks_post->ID, '_key_icbscbks_mb_css', true).'</style>
';
                }
            }
            if($icbscbks_scAttr['js'] != 'false'){
                if(get_post_meta($icbscbks_post->ID, '_key_icbscbks_mb_js', true) != ''){
                    $icbscbks_postcontent .= '
<script type="text/javascript">'.get_post_meta($icbscbks_post->ID, '_key_icbscbks_mb_js', true).'</script>
';
                }
            }
        }else{
            $icbscbks_postcontent = '<!-- Incorrect id --> ';
        }
    }
    // [icbscbks slug=included-content-one]
    else if($icbscbks_scAttr['slug'] != ""){
        $icbscbks_post = get_page_by_path( $icbscbks_scAttr['slug'], OBJECT, 'icbscbks' );
        if($icbscbks_post->post_type == 'icbscbks'){
            $icbscbks_postcontent = $icbscbks_post->post_content;
            $icbscbks_postcontent = apply_filters('the_content', $icbscbks_postcontent);
            if($icbscbks_scAttr['css'] != 'false'){
                if(get_post_meta($icbscbks_post->ID, '_key_icbscbks_mb_css', true) != ''){
                    $icbscbks_postcontent .= '
<style>'.get_post_meta($icbscbks_post->ID, '_key_icbscbks_mb_css', true).'</style>
';
                }
            }
            if($icbscbks_scAttr['js'] != 'false'){
                if(get_post_meta($icbscbks_post->ID, '_key_icbscbks_mb_js', true) != ''){
                    $icbscbks_postcontent .= '
<script type="text/javascript">'.get_post_meta($icbscbks_post->ID, '_key_icbscbks_mb_js', true).'</script>
';
                }
            }
        }else{
            $icbscbks_postcontent = '<!-- Incorrect slug --> ';
        }
}
    else{
        $icbscbks_postcontent = '<!-- Please add any slug or id to shortcode --> ';
    }

    return $icbscbks_postcontent;
}





