<?php 

function registrar_perguntas()
{
    register_post_type(
        'adicionarPerguntas',
        array(
            'labels' => array('name' => 'Perguntas'),
            'public' => true,
            'menu_position' => 6,
            'supports' => array('title','editor'),
            'menu_icon' => 'dashicons-format-status'
        )

    );
}
add_action('init', 'registrar_perguntas');
?>

