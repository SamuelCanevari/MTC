<?php 

function registrar_videos_relatos()
{
    register_post_type(
        'adicionarVideoRelato',
        array(
            'labels' => array('name' => 'Videos dos Relatos'),
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title','editor'),
            'menu_icon' => 'dashicons-youtube'
        )

    );
}
add_action('init', 'registrar_videos_relatos');
