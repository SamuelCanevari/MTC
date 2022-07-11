<?php

function registrar_footer()
{
    register_post_type(
        'adicionarFooter',
        array(
            'labels' => array('name' => 'Rodapé'),
            'public' => true,
            'menu_position' => 1,
            'supports' => array('title'),
            'menu_icon' => 'dashicons-arrow-down-alt'
        )
    );
}
add_action('init', 'registrar_footer');

function ai_funcao_callback_footer($post)
{
    $args = array(
        'post_type' => 'adicionarFooter',
        'post_status' => 'publish',
        'posts_per_page' => 1
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $editora = get_post_meta($post->ID, '_editora', true);
        $cnpj = get_post_meta($post->ID, '_cnpj', true);
        $email = get_post_meta($post->ID, '_email', true);
        $termosDeUso = get_post_meta($post->ID, '_termosDeUso', true);
        $termosDeUsoLink = get_post_meta($post->ID, '_termosDeUsoLink', true);
        $termosDeUsoLinkTexto = get_post_meta($post->ID, '_termosDeUsoLinkTexto', true);
        $avisoLegal = get_post_meta($post->ID, '_avisoLegal', true);
        $avisoLegalDescricao = get_post_meta($post->ID, '_avisoLegalDescricao', true);
        $copyright = get_post_meta($post->ID, '_copyright', true);

        $corInformacaoDireita = get_post_meta($post->ID, '_corInformacaoDireita', true);
        $corInformacaoCopyright = get_post_meta($post->ID, '_corInformacaoCopyright', true);
        $corInformacaoAvisoLegal = get_post_meta($post->ID, '_corInformacaoAvisoLegal', true);
        $corInformacaoTermosDeUso = get_post_meta($post->ID, '_corInformacaoTermosDeUso', true);
        $corFundo = get_post_meta($post->ID, '_corFundo', true);
    } else {
        $editora = "EDITORA GIANINI EIRELI";
        $cnpj = "CNPJ: 38.660.193/0001-80";
        $email = "suporte@adrianogianini.com.br";
        $termosDeUso = "Ao adquirir o conteúdo “Máquina de Tráfego e Conversão”, o usuário aceita expressamente o conteúdo constante nos Termos de Uso disponíveis";
        $termosDeUsoLink = "https://www.maquinadetrafegoeconversao.com.br/termos-de-uso-mtc/";
        $termosDeUsoLinkTexto = "neste link aqui.";
        $avisoLegal = "AVISO LEGAL:";
        $avisoLegalDescricao = "Este produto não garante a obtenção de resultados. Qualquer referência ao desempenho de uma estratégia não deve ser interpretada como uma garantia de resultados.";
        $copyright = "Copyright © 2022 - Adriano Gianini - Todos os direitos reservados";

        $corInformacaoDireita = "#7A7A7A";
        $corInformacaoCopyright = "#7A7A7A";
        $corInformacaoAvisoLegal = "#7A7A7A";
        $corInformacaoTermosDeUso = "#7A7A7A";
        $corFundo = "#323030";
    }

?>
    <br>
    <center><label><strong> INFORMAÇÕES A DIREITA</strong></label></center>
    <hr>
    <div>
        <label for="editora"><strong>Campo 1</strong></label>
        <input type="text" name="editora" id="" style="width: 100%" value="<?= $editora  ?>" />
    </div>
    <br>
    <div>
        <label for="cnpj"><strong>Campo 2</strong></label>
        <input type="text" name="cnpj" id="" style="width: 100%" value="<?= $cnpj  ?>" />
    </div>
    <br>
    <div>
        <label for="email"><strong>E-mail</strong></label>
        <input type="text" name="email" id="" style="width: 100%" value="<?= $email  ?>" />
    </div>
    <br>
    <input type="color" name="corInformacaoDireita" value="<?= $corInformacaoDireita ?>">
    <label for="email"><strong> Cor das informações a direita</strong></label>
    <br>
    <center><label><strong> INFORMAÇÕES DOS TERMOS DE USO</strong></label></center>
    <hr>
    <br>
    <div>
        <label for="termosDeUso"><strong>Termos de Uso</strong></label>
        <input type="text" name="termosDeUso" id="" style="width: 100%" value="<?= $termosDeUso  ?>" />
    </div>
    <br>
    <div>
        <label for="termosDeUsoLink"><strong>Link para os termos de uso</strong></label>
        <input type="text" name="termosDeUsoLink" id="" style="width: 100%" value="<?= $termosDeUsoLink  ?>" />
    </div>
    <br>
    <div>
        <label for="termosDeUsoLinkTexto"><strong>Texto de exibição do link</strong></label>
        <input type="text" name="termosDeUsoLinkTexto" id="" style="width: 100%" value="<?= $termosDeUsoLinkTexto  ?>" />
    </div>
    <br>
    <input type="color" name="corInformacaoTermosDeUso" value="<?= $corInformacaoTermosDeUso ?>">
    <label for="email"><strong> Cor das informações dos termos de uso</strong></label>
    <br>

    <center><label><strong> INFORMAÇÕES DO AVISO LEGAL</strong></label></center>
    <hr>
    <div>
        <label for="avisoLegal"><strong>Titulo</strong></label>
        <input type="text" name="avisoLegal" id="" style="width: 100%" value="<?= $avisoLegal  ?>" />
    </div>
    <br>
    <div>
        <label for="avisoLegalDescricao"><strong>Descrição</strong></label>
        <input type="text" name="avisoLegalDescricao" id="" style="width: 100%" value="<?= $avisoLegalDescricao  ?>" />
    </div>
    <br>
    <input type="color" name="corInformacaoAvisoLegal" value="<?= $corInformacaoAvisoLegal ?>">
    <label for="email"><strong> Cor das texto do aviso legal</strong></label>
    <br>

    <center><label><strong> INFORMAÇÕES DE COPYRIGHT</strong></label></center>
    <hr>
    <div>
        <label for="copyright"><strong>Copyright</strong></label>
        <input type="text" name="copyright" id="" style="width: 100%" value="<?= $copyright  ?>" />
    </div>
    <br>
    <input type="color" name="corInformacaoCopyright" value="<?= $corInformacaoCopyright ?>">
    <label for="email"><strong> Cor das texto do copyright</strong></label>
    <br>

    <center><label><strong> COR DE FUNDO</strong></label></center>
    <hr>
    <center><input type="color" name="corFundo" value="<?= $corFundo ?>"></center>

<?php

}

// adicionando o metabox do banner
function informacoes_footer()
{
    add_meta_box(
        'ai_registrando_metabox_footer',
        'Configurações do rodapé',
        'ai_funcao_callback_footer',
        'adicionarfooter'
    );
}
add_action('add_meta_boxes', 'informacoes_footer');

function salvando_dados_footer($post_id)
{
    foreach ($_POST as $key => $value) {
        if (
            $key !== 'subTitulo' &&
            $key !== "editora" &&
            $key !== "cnpj" &&
            $key !== "email" &&
            $key !== "termosDeUso" &&
            $key !== "termosDeUsoLink" &&
            $key !== "termosDeUsoLinkTexto" &&
            $key !== "avisoLegalDescricao" &&
            $key !== "copyright" &&
            $key !== "corInformacaoDireita" &&
            $key !== "corInformacaoCopyright" &&
            $key !== "corFundo" &&
            $key !== "corInformacaoAvisoLegal" &&
            $key !== "corInformacaoTermosDeUso" &&
            $key !== "avisoLegal"
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
add_action('save_post', 'salvando_dados_footer');

// inserir imagem
function aw_custom_meta_boxes_footer($post_type, $post)
{
    add_meta_box(
        'aw-meta-box',
        __('Configurações das imagens'),
        'render_aw_meta_box_footer',
        array('post', 'adicionarfooter'), //post types here
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aw_custom_meta_boxes_footer', 10, 2);

function render_aw_meta_box_footer($post)
{
    $imagemEsquerda = get_post_meta($post->ID, '_aw_custom_image', true);
    $imagemCentro = get_post_meta($post->ID, '_aw_custom_image2', true);


?>
    <table>

        <tr>
            <td>Aproximadamente A x B</td>
        </tr>
        <tr>
            <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Selecione a imagem da esquerda'); ?></a></td>
            <td><input type="text" name="aw_custom_image" id="aw_custom_image" style="width: 100%" value="<?= $imagemEsquerda; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 19%"><img width="100%" src="<?= $imagemEsquerda ?>" alt=""></td>
        </tr>
    </table>
    <hr>
    <table>

        <tr>
            <td>Aproximadamente A x B</td>
        </tr>
        <tr>
            <td><a href="#" class="aw_upload_image_button2 button button-secondary"><?php _e('Selecione a imagem do centro'); ?></a></td>
            <td><input type="text" name="aw_custom_image2" id="aw_custom_image2" style="width: 100%" value="<?= $imagemCentro; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 19%"><img width="100%" src="<?= $imagemCentro ?>" alt=""></td>
        </tr>

    </table>
    <hr>
<?php
}


function aw_include_script_footer()
{

    if (!did_action('wp_enqueue_media')) {
        wp_enqueue_media();
    }

    wp_enqueue_script('awscript', get_stylesheet_directory_uri() . '/assets/js/awscript.js', array('jquery'), null, false);
}
add_action('admin_enqueue_scripts', 'aw_include_script_footer');

function aw_save_postdata_footer($post_id)
{

    foreach ($_POST as $key => $value) {
        if ($key !== 'aw_custom_image' && $key !== 'aw_custom_image2') {
            continue;
        }

        update_post_meta(
            $post_id,
            '_' . $key,
            $_POST[$key]
        );
    }
}
add_action('save_post', 'aw_save_postdata_footer');


?>