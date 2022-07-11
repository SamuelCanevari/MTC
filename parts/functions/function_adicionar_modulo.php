<?php 

function registrar_modulo()
{
    register_post_type(
        'adicionarModulo',
        array(
            'labels' => array('name' => 'Módulos'),
            'public' => true,
            'menu_position' => 2,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-excerpt-view'
        )

    );
}
add_action('init', 'registrar_modulo');