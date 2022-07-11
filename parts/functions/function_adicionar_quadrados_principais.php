<?php 

function registrar_quadrado()
{
    register_post_type(
        'adicionarQuadrado',
        array(
            'labels' => array('name' => 'Cards destaque'),
            'public' => true,
            'menu_position' => 1,
            'supports' => array('title','editor','thumbnail'),
            'menu_icon' => 'dashicons-info-outline'
        )
    );
}
add_action('init', 'registrar_quadrado');

?>

