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









if(!function_exists('mystdinfo')){
    function mystdinfo() {
        register_post_type('wporg_product',
            array(
                'labels'      => array(
                    'name'          => __('Products', 'textdomain'),
                    'singular_name' => __('Product', 'textdomain'),
                ),
                    'public'      => true,
                    'has_archive' => true,
            )
        );
    }
}
add_action('init', 'mystdinfo');
?>