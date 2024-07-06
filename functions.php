<?php

if(!function_exists('mytheme')){
    function mytheme(){
    add_theme_support('post-thumbnails');
    }

    function change_featured_image_text( $conten ) {
        return $conten = str_replace( __( 'Set featured image' ), __( 'hasan post thumbnail' ), $conten);
    }
    add_filter( 'admin_post_thumbnail_html', 'change_featured_image_text' );

}
add_action('after_setup_theme','mytheme');
?>