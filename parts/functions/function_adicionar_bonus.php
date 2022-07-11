<?php 

function registrar_bonus()
{
    register_post_type(
        'adicionarBonus',
        array(
            'labels' => array('name' => 'Bônus'),
            'public' => true,
            'menu_position' => 3,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-smiley'
        )

    );
}
add_action('init', 'registrar_bonus');