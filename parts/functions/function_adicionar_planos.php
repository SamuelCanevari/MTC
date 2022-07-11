<?php 

function registrar_planos()
{
    register_post_type(
        'adicionarPlanos',
        array(
            'labels' => array('name' => 'Planos'),
            'public' => true,
            'menu_position' => 4,
            'supports' => array('title','editor','thumbnail'),
            'menu_icon' => 'dashicons-chart-area'
        )

    );
}
add_action('init', 'registrar_planos');


function ai_funcao_callback_planos($post)
{
    $args = array(
        'post_type' => 'adicionarPlanos',
        'post_status' => 'publish',
        'posts_per_page' => 1
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $subTitulo = get_post_meta($post->ID, '_subTitulo', true);

    } else {
        $subTitulo = "";
    }

?>
        <div>
            <!-- <label for="subTitulo"><strong>Subtitulo</strong></label> -->
            <input type="text" name="subTitulo" id="" style="width: 100%" value="<?= $subTitulo ?>" />
        </div>

  

<?php

}

// adicionando o metabox do banner
function informacoes_planos()
{
    add_meta_box(
        'ai_registrando_metabox_planos',
        'Subtitulo',
        'ai_funcao_callback_planos',
        'adicionarPlanos'
    );
}
add_action('add_meta_boxes', 'informacoes_planos');

function salvando_dados_planos($post_id)
{
    foreach ($_POST as $key => $value) {
        if (
            $key !== 'subTitulo'
        ) {
            continue;
        }

        update_post_meta(
            $post_id,
            '_' . $key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'salvando_dados_planos');