<?php




if(!function_exists('mystdinfo')){
    function mystdinfo() {
        register_post_type('wporg_product',
            array(
                
                    'public'      => true,
                    'has_archive' => true,
                    'menu_position'         => 3,
                    'supports'           => array('title', 'editor', 'author', 'thumbnail',),
                    'labels'=> array(

                        'singular_name'         => _x( 'srudet Type', 'Post Type Singular Name' ),
                        'menu_name'             => __( 'All girl friends name' ),
                        'name_admin_bar'        => __( 'Post Type' ),
                        'add_new'               => ('Add New girld friend name'),
                        'not_found'             => ('Not found girl'),
                        'set_featured_image'    => ('Set Girl friend image'),
                    )
            )
        );
    }
}
add_action('init', 'mystdinfo');


?>