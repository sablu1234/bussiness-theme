<?php
if(!function_exists('team_theme')){
function team_theme(){
    register_post_type('team_info',
    array(
        'public'=>true,
        'has_archive'=>true,
                    'supports'           => array('title', 'editor', 'author', 'thumbnail',),

            'labels' => array(
                'name'                  => 'team member',
                'singular_name'         => 'team members',
                'menu_name'             => 'All Team Member',
                'name_admin_bar'        => 'Post Type',
                'archives'              => 'Item Archives',
                'attributes'            => 'Item Attributes',
                'parent_item_colon'     => 'Parent Item:',
                'all_items'             => 'All Items',
                'add_new_item'          => 'Add New Item',
                'not_found'             =>'no set team image',
                'featured_image'        =>'Set team member image',
                
			),
    )
        );
}
}



add_action('init','team_theme');




 


?>