<?php
if(! function_exists('infobiz_custom_post') ){
    function infobiz_custom_post(){
        register_post_type('blog_post',[
            'label' => 'Blog Post',
            'labels'    => [
                'add_new_item' => 'Add New Blog'
            ],
            'supports'  => ['title', 'editor', 'thumbnail'],
            'public'    => true,
            'hierarchical'  => true,
            'menu_icon' => 'dashicons-format-status'
        ]);
    }
    add_action('init', 'infobiz_custom_post');
}