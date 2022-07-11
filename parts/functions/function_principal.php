<?php
function configuracao_site()
{
    register_post_type(
        'configuracao_site',
        array(
            'labels' => array('name' => 'Configurações gerais do site'),
            'public' => true,
            'menu_position' => 0,
            'supports' => array('title'),
            'menu_icon' => 'dashicons-star-filled'
        )
    );
}
add_action('init', 'configuracao_site');

function registrar_metaBoxes_site()
{
    add_meta_box(
        'ai_registrar_metabox_configuracao_site',
        'Configurações gerais do site',
        'ai_funcao_callback_configuracoes_site',
        'configuracao_site'
    );
}
add_action('add_meta_boxes', 'registrar_metaBoxes_site');


function ai_funcao_callback_configuracoes_site($post)
{

    $corFundoSite = get_post_meta($post->ID, '_corFundoSite', true);
    if ($corFundoSite === "") {
        $corFundoSite = '#F0F0F0';
    }


    $corTextoBotaoComercial = get_post_meta($post->ID, '_corTextoBotaoComercial', true);
    if ($corTextoBotaoComercial === "") {
        $corTextoBotaoComercial = '#FFFFFF';
    }
    $textoBotaoComercial = get_post_meta($post->ID, '_textoBotaoComercial', true);
    if ($textoBotaoComercial === "") {
        $textoBotaoComercial = 'FALAR COM O COMERCIAL';
    }
    $numWhatsappComercial = get_post_meta($post->ID, '_numWhatsappComercial', true);
    if ($numWhatsappComercial === "") {
        $numWhatsappComercial = 5511961736650;
    }
    $MensagemWhatsappComercial = get_post_meta($post->ID, '_MensagemWhatsappComercial', true);
    if ($MensagemWhatsappComercial === "") {
        $MensagemWhatsappComercial = 'Olá! Gostaria de saber mais sobre o Máquina de Tráfego e Conversão, pode me ajudar por favor?';
    }


    $botaoPrincipalTextoSup = get_post_meta($post->ID, '_botaoPrincipalTextoSup', true);
    if ($botaoPrincipalTextoSup === "") {
        $botaoPrincipalTextoSup = 'FAZER MINHA INSCRIÇÃO';
    }
    $botaoPrincipalTextoInf = get_post_meta($post->ID, '_botaoPrincipalTextoInf', true);
    if ($botaoPrincipalTextoInf === "") {
        $botaoPrincipalTextoInf = '10X R$239,70 SEM JUROS';
    }
    $corBotaoPrincipal = get_post_meta($post->ID, '_corBotaoPrincipal', true);
    if ($corBotaoPrincipal === "") {
        $corBotaoPrincipal = '#3ABD4C';
    }
    $corTextpBotaoPrincipal = get_post_meta($post->ID, '_corTextpBotaoPrincipal', true);
    if ($corTextpBotaoPrincipal === "") {
        $corTextpBotaoPrincipal = '#FFFFFF';
    }
    $linkRedirecionamentoBotao = get_post_meta($post->ID, '_linkRedirecionamentoBotao', true);
    if ($linkRedirecionamentoBotao === "") {
        $linkRedirecionamentoBotao = 'https://checkout.maquinadetrafegoeconversao.com.br/pay/ofertapadrao?src=969c9a7809b64396aec35c904a981d64-969c9a7809b64396aec35c904a981d64';
    }


    $corTexto1TituloPrincipal = get_post_meta($post->ID, '_corTexto1TituloPrincipal', true);
    if ($corTexto1TituloPrincipal === "") {
        $corTexto1TituloPrincipal = '#FFFFFF';
    }
    $texto1TituloPrincipal = get_post_meta($post->ID, '_texto1TituloPrincipal', true);
    if ($texto1TituloPrincipal === "") {
        $texto1TituloPrincipal = 'Aprenda minhas ';
    }
    $corTexto2TituloPrincipal = get_post_meta($post->ID, '_corTexto2TituloPrincipal', true);
    if ($corTexto2TituloPrincipal === "") {
        $corTexto2TituloPrincipal = '#EA8600';
    }
    $texto2TituloPrincipal = get_post_meta($post->ID, '_texto2TituloPrincipal', true);
    if ($texto2TituloPrincipal === "") {
        $texto2TituloPrincipal = 'Estratégias comprovadas para vender no Google todos os dias ';
    }
    $corTexto3TituloPrincipal = get_post_meta($post->ID, '_corTexto3TituloPrincipal', true);
    if ($corTexto3TituloPrincipal === "") {
        $corTexto3TituloPrincipal = '#FFFFFF';
    }
    $texto3TituloPrincipal = get_post_meta($post->ID, '_texto3TituloPrincipal', true);
    if ($texto3TituloPrincipal === "") {
        $texto3TituloPrincipal = 'e pare de perder dinheiro de uma vez por todas';
    }


    $corFundoTextoDestaque = get_post_meta($post->ID, '_corFundoTextoDestaque', true);
    if ($corFundoTextoDestaque === "") {
        $corFundoTextoDestaque = '#ea8600';
    }
    $corTextoDestaque = get_post_meta($post->ID, '_corTextoDestaque', true);
    if ($corTextoDestaque === "") {
        $corTextoDestaque = '#FFFFFF';
    }
    $textoDestaque = get_post_meta($post->ID, '_textoDestaque', true);
    if ($textoDestaque === "") {
        $textoDestaque = 'Método validado por ';
    }
    $textoDestaqueUnderline = get_post_meta($post->ID, '_textoDestaqueUnderline', true);
    if ($textoDestaqueUnderline === "") {
        $textoDestaqueUnderline = '+4.500 empresas em 16 países';
    }


    $texto1Subtitulo = get_post_meta($post->ID, '_texto1Subtitulo', true);
    if ($texto1Subtitulo === "") {
        $texto1Subtitulo = 'Fazendo sua matrícula até 23h59 de segunda-feira (27/06), ';
    }
    $corTexto1Subtitulo = get_post_meta($post->ID, '_corTexto1Subtitulo', true);
    if ($corTexto1Subtitulo === "") {
        $corTexto1Subtitulo = '#FFFFFF';
    }
    $texto2Subtitulo = get_post_meta($post->ID, '_texto2Subtitulo', true);
    if ($texto2Subtitulo === "") {
        $texto2Subtitulo = 'você ganha meu LIVRO AUTOGRAFADO ';
    }
    $corTexto2Subtitulo = get_post_meta($post->ID, '_corTexto2Subtitulo', true);
    if ($corTexto2Subtitulo === "") {
        $corTexto2Subtitulo = '#ea8600';
    }
    $texto3Subtitulo = get_post_meta($post->ID, '_texto3Subtitulo', true);
    if ($texto3Subtitulo === "") {
        $texto3Subtitulo = 'com envio gratuito para todo Brasil!';
    }
    $corTexto3Subtitulo = get_post_meta($post->ID, '_corTexto3Subtitulo', true);
    if ($corTexto3Subtitulo === "") {
        $corTexto3Subtitulo = '#FFFFFF';
    }


    $corBackgroundCronometro = get_post_meta($post->ID, '_corBackgroundCronometro', true);
    if ($corBackgroundCronometro === "") {
        $corBackgroundCronometro = '#000000';
    }
    $corFundoCronometro = get_post_meta($post->ID, '_corFundoCronometro', true);
    if ($corFundoCronometro === "") {
        $corFundoCronometro = '#ea8600';
    }
    $corTextosCronometro = get_post_meta($post->ID, '_corTextosCronometro', true);
    if ($corTextosCronometro === "") {
        $corTextosCronometro = '#FFFFFF';
    }
    $textoInscricoesCronometro = get_post_meta($post->ID, '_textoInscricoesCronometro', true);
    if ($textoInscricoesCronometro === "") {
        $textoInscricoesCronometro = 'AS INSCRIÇÕES ENCERRAM EM:';
    }

    $dia = get_post_meta($post->ID, '_dia', true);
    if ($dia === "") {
        $dia = 00;
    }
    $hora = get_post_meta($post->ID, '_hora', true);
    if ($hora === "") {
        $hora = 0;
    }
    $minuto = get_post_meta($post->ID, '_minuto', true);
    if ($minuto === "") {
        $minuto = 0;
    }
    $segundo = get_post_meta($post->ID, '_segundo', true);
    if ($segundo === "") {
        $segundo = 0;
    }



    $corFundoQuadro = get_post_meta($post->ID, '_corFundoQuadro', true);
    if ($corFundoQuadro === '') {
        $corFundoQuadro = '#FFFFFF';
    }
    $corFundoIcone = get_post_meta($post->ID, '_corFundoIcone', true);
    if ($corFundoIcone === '') {
        $corFundoIcone = '#EA8600';
    }
    $corTituloQuadro = get_post_meta($post->ID, '_corTituloQuadro', true);
    if ($corTituloQuadro === '') {
        $corTituloQuadro = '#323030';
    }
    $corTextoQuadro = get_post_meta($post->ID, '_corTextoQuadro', true);
    if ($corTextoQuadro === '') {
        $corTextoQuadro = '#7a7a7a';
    }


    $corTexto1VideoPrincipal = get_post_meta($post->ID, '_corTexto1VideoPrincipal', true);
    if ($corTexto1VideoPrincipal === "") {
        $corTexto1VideoPrincipal = '#ea8600';
    };
    $texto1VideoPrincipal = get_post_meta($post->ID, '_texto1VideoPrincipal', true);
    if ($texto1VideoPrincipal === "") {
        $texto1VideoPrincipal = 'Conheça tudo o que você vai ter ';
    }
    $corTexto2VideoPrincipal = get_post_meta($post->ID, '_corTexto2VideoPrincipal', true);
    if ($corTexto2VideoPrincipal === "") {
        $corTexto2VideoPrincipal = '#323030';
    }
    $texto2VideoPrincipal = get_post_meta($post->ID, '_texto2VideoPrincipal', true);
    if ($texto2VideoPrincipal === "") {
        $texto2VideoPrincipal = 'ao se matricular no MÁQUINA';
    }
    $linkVideoYt = get_post_meta($post->ID, '_linkVideoYt', true);
    if ($linkVideoYt === "") {
        $linkVideoYt = 'https://www.youtube.com/watch?v=u8elL1uTDb0';
    }


    $corFundoModulos = get_post_meta($post->ID, '_corFundoModulos', true);
    if ($corFundoModulos === "") {
        $corFundoModulos = '#FFFFFF';
    }
    $corDetalheModuloEsquerda = get_post_meta($post->ID, '_corDetalheModuloEsquerda', true);
    if ($corDetalheModuloEsquerda === "") {
        $corDetalheModuloEsquerda = '#ea8600';
    }
    $corTituloModulo = get_post_meta($post->ID, '_corTituloModulo', true);
    if ($corTituloModulo === "") {
        $corTituloModulo = '#323030';
    }
    $corTextoModulo = get_post_meta($post->ID, '_corTextoModulo', true);
    if ($corTextoModulo === "") {
        $corTextoModulo = '#7a7a7a';
    }


    $corFundoBonus = get_post_meta($post->ID, '_corFundoBonus', true);
    if ($corFundoBonus === '') {
        $corFundoBonus = '#1E1C1C';
    }
    $tituloDestaqueBonus = get_post_meta($post->ID, '_tituloDestaqueBonus', true);
    if ($tituloDestaqueBonus === '') {
        $tituloDestaqueBonus = 'BÔNUS';
    }
    $corTituloDestaqueBonus = get_post_meta($post->ID, '_corTituloDestaqueBonus', true);
    if ($corTituloDestaqueBonus === '') {
        $corTituloDestaqueBonus = '#ea8600';
    }
    $tituloBonus = get_post_meta($post->ID, '_tituloBonus', true);
    if ($tituloBonus === '') {
        $tituloBonus = 'BÔNUS que vão potencializar e acelerar o crescimento das suas vendas na Internet:';
    }
    $corTituloBonus = get_post_meta($post->ID, '_corTituloBonus', true);
    if ($corTituloBonus === '') {
        $corTituloBonus = '#FBFBFB';
    }
    $corFundoQuadrosBonus = get_post_meta($post->ID, '_corFundoQuadrosBonus', true);
    if ($corFundoQuadrosBonus === '') {
        $corFundoQuadrosBonus = '#FFFFFF';
    }
    $corTextosCards = get_post_meta($post->ID, '_corTextosCards', true);
    if ($corTextosCards === '') {
        $corTextosCards = '#7a7a7a';
    }
    $corTitulosCards = get_post_meta($post->ID, '_corTitulosCards', true);
    if ($corTitulosCards === '') {
        $corTitulosCards = '#323030';
    }
    $corTituloPlano = get_post_meta($post->ID, '_corTituloPlano', true);
    if ($corTituloPlano === '') {
        $corTituloPlano = '#323030';
    }
    $corFundoPlanos = get_post_meta($post->ID, '_corFundoPlanos', true);
    if ($corFundoPlanos === '') {
        $corFundoPlanos = '#FFFFFF';
    }
    $corSubtituloPlanos = get_post_meta($post->ID, '_corSubtituloPlanos', true);
    if ($corSubtituloPlanos === '') {
        $corSubtituloPlanos = '#5D5D5D';
    }
    $corTextosPlanos = get_post_meta($post->ID, '_corTextosPlanos', true);
    if ($corTextosPlanos === '') {
        $corTextosPlanos = '#7A7A7A';
    }


    $corVideoRelatosTexto1 = get_post_meta($post->ID, '_corVideoRelatosTexto1', true);
    if ($corVideoRelatosTexto1 === "") {
        $corVideoRelatosTexto1 = '#323030';
    }
    $texto1VideoRelatos = get_post_meta($post->ID, '_texto1VideoRelatos', true);
    if ($texto1VideoRelatos === "") {
        $texto1VideoRelatos = 'Alguns ';
    }
    $corVideoRelatosTexto2 = get_post_meta($post->ID, '_corVideoRelatosTexto2', true);
    if ($corVideoRelatosTexto2 === "") {
        $corVideoRelatosTexto2 = '#ea8600';
    }
    $texto2VideoRelatos = get_post_meta($post->ID, '_texto2VideoRelatos', true);
    if ($texto2VideoRelatos === "") {
        $texto2VideoRelatos = 'relatos de alunos ';
    }
    $corVideoRelatosTexto3 = get_post_meta($post->ID, '_corVideoRelatosTexto3', true);
    if ($corVideoRelatosTexto3 === "") {
        $corVideoRelatosTexto3 = '#323030';
    }
    $texto3VideoRelatos = get_post_meta($post->ID, '_texto3VideoRelatos', true);
    if ($texto3VideoRelatos === "") {
        $texto3VideoRelatos = 'do MÁQUINA';
    }


    $corTituloPerguntasFrequentes = get_post_meta($post->ID, '_corTituloPerguntasFrequentes', true);
    if ($corTituloPerguntasFrequentes === "") {
        $corTituloPerguntasFrequentes = '#ea8600';
    }
    $tituloPerguntasFrequentes = get_post_meta($post->ID, '_tituloPerguntasFrequentes', true);
    if ($tituloPerguntasFrequentes === "") {
        $tituloPerguntasFrequentes = 'Perguntas Frequentes';
    }
    $corTituloPerguntas = get_post_meta($post->ID, '_corTituloPerguntas', true);
    if ($corTituloPerguntas === "") {
        $corTituloPerguntas = '#323030';
    }
    $corTextoResposta = get_post_meta($post->ID, '_corTextoResposta', true);
    if ($corTextoResposta === "") {
        $corTextoResposta = '#323030';
    }
    $corFundoResposta = get_post_meta($post->ID, '_corFundoResposta', true);
    if ($corFundoResposta === "") {
        $corFundoResposta = '#ffffff';
    }


    $corTituloGarantia = get_post_meta($post->ID, '_corTituloGarantia', true);
    if ($corTituloGarantia === "") {
        $corTituloGarantia = '#333333';
    }
    $textoTituloGarantia = get_post_meta($post->ID, '_textoTituloGarantia', true);
    if ($textoTituloGarantia === "") {
        $textoTituloGarantia = 'Garantia';
    }
    $textoDestaqueGarantia1 = get_post_meta($post->ID, '_textoDestaqueGarantia1', true);
    if ($textoDestaqueGarantia1 === "") {
        $textoDestaqueGarantia1 = 'Garantia Incondicional:';
    }
    $textoDescricaoDestaqueGarantia1 = get_post_meta($post->ID, '_textoDescricaoDestaqueGarantia1', true);
    if ($textoDescricaoDestaqueGarantia1 === "") {
        $textoDescricaoDestaqueGarantia1 = 'Você tem 7 dias para testar o treinamento e descobrir se ele é para você. Se, dentro deste período, você não gostar, basta enviar um e-mail e devolveremos o seu dinheiro completo sem enrolação ou pergunta alguma.';
    }
    $textoDestaqueGarantia2 = get_post_meta($post->ID, '_textoDestaqueGarantia2', true);
    if ($textoDestaqueGarantia2 === "") {
        $textoDestaqueGarantia2 = 'Garantia Condicional:';
    }
    $textoDescricaoDestaqueGarantia2 = get_post_meta($post->ID, '_textoDescricaoDestaqueGarantia2', true);
    if ($textoDescricaoDestaqueGarantia2 === "") {
        $textoDescricaoDestaqueGarantia2 = 'Se em até um ano, assistindo ao curso, aplicando os conhecimentos adquiridos no curso, participando de todas as aulas ao vivo, você achar que o curso não te ajudou em nada a vender mais no Google, te darei uma hora de consultoria comigo, Adriano Gianini, analisando sua conta e traçando a estratégia que você deve seguir.*';
    }
    $textoAvisoGarantia = get_post_meta($post->ID, '_textoAvisoGarantia', true);
    if ($textoAvisoGarantia === "") {
        $textoAvisoGarantia = '*ATENÇÃO: Assim como iremos fazer a nossa parte, você também precisa fazer a sua. Logo, para usar esta garantia terá que nos mostrar que aplicou verdadeiramente a metodologia ensinada no curso e participou e interagiu de todas as aulas ao vivo, também chamadas de Mentorias.';
    }
    $corDescricoesDestaqueGarantia1 = get_post_meta($post->ID, '_corDescricoesDestaqueGarantia1', true);
    if ($corDescricoesDestaqueGarantia1 === "") {
        $corDescricoesDestaqueGarantia1 = '#323030';
    }
    $corTextoDestaqueGarantia1 = get_post_meta($post->ID, '_corTextoDestaqueGarantia1', true);
    if ($corTextoDestaqueGarantia1 === "") {
        $corTextoDestaqueGarantia1 = '#ffffff';
    }
    $corTextoDestaqueGarantia2 = get_post_meta($post->ID, '_corTextoDestaqueGarantia2', true);
    if ($corTextoDestaqueGarantia2 === "") {
        $corTextoDestaqueGarantia2 = '#ffffff';
    }
    $corFundoGarantia = get_post_meta($post->ID, '_corFundoGarantia', true);
    if ($corFundoGarantia === "") {
        $corFundoGarantia = '#FFFBE8';
    }
    $corFundoGarantiaAtencao = get_post_meta($post->ID, '_corFundoGarantiaAtencao', true);
    if ($corFundoGarantiaAtencao === "") {
        $corFundoGarantiaAtencao = '#FCEAC5';
    }
    $corFundoTextoDestaqueGarantia2 = get_post_meta($post->ID, '_corFundoTextoDestaqueGarantia2', true);
    if ($corFundoTextoDestaqueGarantia2 === "") {
        $corFundoTextoDestaqueGarantia2 = '#333333';
    }
    $corFundoTextoDestaqueGarantia1 = get_post_meta($post->ID, '_corFundoTextoDestaqueGarantia1', true);
    if ($corFundoTextoDestaqueGarantia1 === "") {
        $corFundoTextoDestaqueGarantia1 = '#333333';
    }


?>

    <div>

        <div>
            <input type="color" name="corFundoSite" value="<?= $corFundoSite ?>">
            <label for="corFundoSite">Cor de fundo do site</label>
        </div>


        <hr>

        <div>
            <p><strong>BOTÃO FALAR COM O COMERCIAL</strong></p>
            <input type="color" name="corTextoBotaoComercial" value="<?= $corTextoBotaoComercial ?>">
            <label for="corBotaoComercial">Texto do botão:</label>
            <input type="text" style="width: 100%" name="textoBotaoComercial" value="<?= $textoBotaoComercial ?>"><br><br>
            <strong>Link para o Whatsapp</strong> <br>
            <label for="numWhatsappComercial">Numero de whatsapp</label>
            <input type="number" style="width: 50%" name="numWhatsappComercial" value="<?= $numWhatsappComercial ?>"><br>
            <label for="MensagemWhatsappComercial">Mensagem do whatsapp:</label>
            <input type="text" style="width: 100%" name="MensagemWhatsappComercial" value="<?= $MensagemWhatsappComercial ?>"><br>


        </div>

        <br>
        <hr>

        <div>
            <p><strong>TÍTULO PRINCIPAL</strong></p>
            <input type="color" name="corTexto1TituloPrincipal" value="<?= $corTexto1TituloPrincipal ?>">
            <input type="text" style="width: 80%" name="texto1TituloPrincipal" value="<?= $texto1TituloPrincipal ?>"><br>
            <input type="color" name="corTexto2TituloPrincipal" value="<?= $corTexto2TituloPrincipal ?>">
            <input type="text" style="width: 80%" name="texto2TituloPrincipal" value="<?= $texto2TituloPrincipal ?>"><br>
            <input type="color" name="corTexto3TituloPrincipal" value="<?= $corTexto3TituloPrincipal ?>">
            <input type="text" style="width: 80%" name="texto3TituloPrincipal" value="<?= $texto3TituloPrincipal ?>">
        </div>

        <br>
        <hr>

        <div>
            <p><strong>TEXTO EM DESTAQUE</strong></p>
            <input type="color" name="corFundoTextoDestaque" value="<?= $corFundoTextoDestaque ?>">
            <label for="corFundoTextoDestaque">Cor de fundo do texto destaque</label><br>
            <input type="color" name="corTextoDestaque" value="<?= $corTextoDestaque ?>">
            <label for="corTextoDestaque">Texto destaque:</label><br>
            <input type="text" style="width: 100%" name="textoDestaque" value="<?= $textoDestaque ?>">
            <label for="textoDestaqueUnderline">Texto destaque sublinhado:</label><br>
            <input type="text" style="width: 100%" name="textoDestaqueUnderline" value="<?= $textoDestaqueUnderline ?>">
        </div>

        <!-- <br>
        <hr>

        <div>
            <p><strong>SUBTÍTULO</strong></p>
            <input type="color" name="corTexto1Subtitulo" value="<?= $corTexto1Subtitulo ?>">
            <input type="text" name="texto1Subtitulo" style="width: 90%" value="<?= $texto1Subtitulo ?>"><br>
            <input type="color" name="corTexto2Subtitulo" value="<?= $corTexto2Subtitulo ?>">
            <input type="text" name="texto2Subtitulo" style="width: 90%" value="<?= $texto2Subtitulo ?>"><br>
            <input type="color" name="corTexto3Subtitulo" value="<?= $corTexto3Subtitulo ?>">
            <input type="text" name="texto3Subtitulo" style="width: 90%" value="<?= $texto3Subtitulo ?>">
        </div> -->

        <br>
        <hr>

        <div>
            <p><strong>BOTÃO PRINCIPAL</strong></p>
            <input type="text" name="botaoPrincipalTextoSup" style="width: 100%;" value="<?= $botaoPrincipalTextoSup ?>" placeholder="Texto superior do botão"><br>
            <input type="text" name="botaoPrincipalTextoInf" style="width: 100%;" value="<?= $botaoPrincipalTextoInf ?>" placeholder="Texto inferior do botão"><br>
            <input type="color" name="corBotaoPrincipal" value="<?= $corBotaoPrincipal ?>">
            <label for="corBotaoPrincipal">Cor de fundo do botão:</label><br>
            <input type="color" name="corTextpBotaoPrincipal" value="<?= $corTextpBotaoPrincipal ?>">
            <label for="corTextoBotaoPrincipal">Cor do texto do botão</label><br>
            <label for="linkRedirecionamentoBotao">Link de redirecionamento do botão</label><br>
            <input type="text" name="linkRedirecionamentoBotao" style="width: 100%;" value="<?= $linkRedirecionamentoBotao ?>"><br>
        </div>

        <br>
        <hr>

        <div>
            <p><strong>CRONÔMETRO</strong></p>
            <input type="color" name="corBackgroundCronometro" value="<?= $corBackgroundCronometro ?>">
            <label for="corBackgroundCronometro">Cor de fundo da seção</label><br>
            <input type="color" name="corFundoCronometro" value="<?= $corFundoCronometro ?>">
            <label for="corFundoCronometro">Cor de fundo dos textos</label><br>
            <input type="color" name="corTextosCronometro" value="<?= $corTextosCronometro ?>">
            <label for="corTextosCronometro">Cor dos textos</label><br>
            <input type="text" name="textoInscricoesCronometro" style="width: 50%;" value="<?= $textoInscricoesCronometro ?>" maxlength="26"><br><br>

            <label for="dia">Dias: </label>
            <input type="number" min="0" style="width:50px;" name="dia" value="<?= $dia ?>">
            <label for="hora">Horas: </label>
            <input type="number" max="24" min="0" style="width:50px;" name="hora" value="<?= $hora ?>">
            <label for="minuto">Minutos:</label>
            <input type="number" max="60" min="0" style="width:50px;" name="minuto" value="<?= $minuto ?>">
            <label for="segundo">Segundos: </label>
            <input type="number" max="60" min="0" style="width:50px;" name="segundo" value="<?= $segundo ?>">
        </div>

        <br>
        <hr>

        <div>
            <p><strong>CARDS DESTAQUE (adicionar card no menu da esquerda - máximo de 3)</strong></p>
            <input type="color" name="corFundoQuadro" value="<?= $corFundoQuadro ?>">
            <label for="corFundoQuadro">Cor de fundo do quadro</label><br>
            <input type="color" name="corFundoIcone" value="<?= $corFundoIcone ?>">
            <label for="corFundoIcone">Cor de fundo do icone</label><br>
            <input type="color" name="corTituloQuadro" value="<?= $corTituloQuadro ?>">
            <label for="corTituloQuadro">Cor do título</label><br>
            <input type="color" name="corTextoQuadro" value="<?= $corTextoQuadro ?>">
            <label for="corTextoQuadro">Cor do texto</label>
        </div>

        <br>
        <hr>

        <div>
            <p><strong>VÍDEO PRINCIPAL</strong></p>
            <input type="color" name="corTexto1VideoPrincipal" value="<?= $corTexto1VideoPrincipal ?>">
            <input type="text" name="texto1VideoPrincipal" style="width: 90%" value="<?= $texto1VideoPrincipal ?>"><br>
            <input type="color" name="corTexto2VideoPrincipal" value="<?= $corTexto2VideoPrincipal ?>">
            <input type="text" name="texto2VideoPrincipal" style="width: 90%" value="<?= $texto2VideoPrincipal ?>"><br>

            <label for="linkVideoYt">Link do vídeo do Youtube:</label>
            <input type="text" name="linkVideoYt" style="width: 400px" value="<?= $linkVideoYt ?>">
        </div>

        <br>
        <hr>

        <div>
            <p><strong>MODULOS</strong></p>
            <input type="color" name="corFundoModulos" value="<?= $corFundoModulos ?>">
            <label for="corFundoModulos">Cor de fundo do quadro</label><br>
            <input type="color" name="corDetalheModuloEsquerda" value="<?= $corDetalheModuloEsquerda ?>">
            <label for="corDetalheModuloEsquerda">Cor do detalhe da esquerda</label><br>
            <input type="color" name="corTituloModulo" value="<?= $corTituloModulo ?>">
            <label for="corTituloModulo">Cor do título do card</label><br>
            <input type="color" name="corTextoModulo" value="<?= $corTextoModulo ?>">
            <label for="corTextoModulo">Cor do texto do card</label><br>
        </div>

        <br>
        <hr>

        <div>
            <p><strong>BÔNUS</strong></p>
            <input type="color" name="corFundoBonus" value="<?= $corFundoBonus ?>">
            <label for="corFundoBonus">Cor de fundo da seção bônus</label><br>
            <input type="color" name="corTituloDestaqueBonus" value="<?= $corTituloDestaqueBonus ?>">
            <label for="corTituloDestaqueBonus">Título destaque bônus:</label><br>
            <input type="text" style="width: 100%" name="tituloDestaqueBonus" value="<?= $tituloDestaqueBonus ?>"><br>
            <input type="color" name="corTituloBonus" value="<?= $corTituloBonus ?>">
            <label for="corTituloBonus">Título bônus</label><br>
            <input type="text" style="width: 100%" name="tituloBonus" value="<?= $tituloBonus ?>"><br><br>

            <input type="color" name="corFundoQuadrosBonus" value="<?= $corFundoQuadrosBonus ?>">
            <label for="corFundoQuadrosBonus">Cor de fundo dos cards</label><br>
            <input type="color" name="corTextosCards" value="<?= $corTextosCards ?>">
            <label for="corTextosCards">Cor dos textos dos cards</label><br>
            <input type="color" name="corTitulosCards" value="<?= $corTitulosCards ?>">
            <label for="corTitulosCards">Cor dos títulos dos cards</label><br>

            <input type="color" name="corFundoPlanos" value="<?= $corFundoPlanos ?>">
            <label for="corFundoPlanos">Cor de fundo dos planos</label><br>
            <input type="color" name="corTituloPlano" value="<?= $corTituloPlano ?>">
            <label for="corTituloPlano">Cor dos títulos dos planos</label><br>
            <input type="color" name="corSubtituloPlanos" value="<?= $corSubtituloPlanos ?>">
            <label for="corSubtituloPlanos">Cor dos subtítulos dos planos</label><br>
            <input type="color" name="corTextosPlanos" value="<?= $corTextosPlanos ?>">
            <label for="corTextosPlanos">Cor dos textos dos planos</label><br>

            <p>Adicionar Bonus em "Bonus" no menu da esquerda (utilizar imagens de 40x40 px)</p>
            <p>Adicionar Planos em "Planos" no menu da esquerda (utilizar imagens de 70x70 px)</p>
        </div>

        <br>
        <hr>

        <div>
            <p><strong>RELATOS VÍDEOS</strong></p>
            <input type="color" name="corVideoRelatosTexto1" value="<?= $corVideoRelatosTexto1 ?>">
            <input type="text" style="width: 80%" name="texto1VideoRelatos" value="<?= $texto1VideoRelatos ?>"><br>
            <input type="color" name="corVideoRelatosTexto2" value="<?= $corVideoRelatosTexto2 ?>">
            <input type="text" style="width: 80%" name="texto2VideoRelatos" value="<?= $texto2VideoRelatos ?>"><br>
            <input type="color" name="corVideoRelatosTexto3" value="<?= $corVideoRelatosTexto3 ?>">
            <input type="text" style="width: 80%" name="texto3VideoRelatos" value="<?= $texto3VideoRelatos ?>">
            <p>Adicionar vídeos em "Videos dos Relatos" no menu da esquerda</p>
        </div>

        <br>
        <hr>

        <div>
            <p><strong>PERGUNTAS FREQUENTES<strong></p>
            <input type="color" name="corTituloPerguntasFrequentes" value="<?= $corTituloPerguntasFrequentes ?>">
            <label for="corTituloPerguntasFrequentes">Título:</label><br>
            <input type="text" name="tituloPerguntasFrequentes" value="<?= $tituloPerguntasFrequentes ?>"><br>
            <input type="color" name="corTituloPerguntas" value="<?= $corTituloPerguntas ?>">
            <label for="corTituloPerguntas">Cor das perguntas</label><br>
            <input type="color" name="corTextoResposta" value="<?= $corTextoResposta ?>">
            <label for="corTextoResposta">Cor das respotas</label><br>
            <input type="color" name="corFundoResposta" value="<?= $corFundoResposta ?>">
            <label for="corFundoResposta">Cor de fundo das respotas</label>
            <p>Adicionar perguntas em "Perguntas" no menu da esquerda</p>
        </div>

        <br>
        <hr>

        <div>
            <p><strong>GARANTIA<strong></p>
            <input type="color" name="corTituloGarantia" value="<?= $corTituloGarantia ?>">
            <input type="text" style="width: 90%" name="textoTituloGarantia" value="<?= $textoTituloGarantia ?>"><br><br>

            <input type="color" name="corTextoDestaqueGarantia1" value="<?= $corTextoDestaqueGarantia1 ?>">
            <input type="text" style="width: 90%; " name="textoDestaqueGarantia1" value="<?= $textoDestaqueGarantia1 ?>"><br><br>
            <textarea style="width: 100%" rows="6" name="textoDescricaoDestaqueGarantia1" maxlength="240"><?= $textoDescricaoDestaqueGarantia1 ?></textarea><br><br>

            <input type="color" name="corTextoDestaqueGarantia2" value="<?= $corTextoDestaqueGarantia2 ?>">
            <input type="text" style="width: 90%" name="textoDestaqueGarantia2" value="<?= $textoDestaqueGarantia2 ?>"><br><br>
            <textarea style="width: 100%" rows="6" name="textoDescricaoDestaqueGarantia2" maxlength="300"><?= $textoDescricaoDestaqueGarantia2 ?></textarea><br>

            <label for="textoAvisoGarantia">Descrição do aviso da garantia</label><br>
            <textarea style="width: 100%" rows="6" name="textoAvisoGarantia" maxlength="274"><?= $textoAvisoGarantia ?></textarea><br><br>

            <input type="color" name="corFundoTextoDestaqueGarantia1" value="<?= $corFundoTextoDestaqueGarantia1 ?>">
            <label for="corFundoTextoDestaqueGarantia1">Cor de fundo do primeiro texto em destaque</label><br>

            <input type="color" name="corFundoTextoDestaqueGarantia2" value="<?= $corFundoTextoDestaqueGarantia2 ?>">
            <label for="corFundoTextoDestaqueGarantia2">Cor de fundo do segundo texto em destaque</label><br>

            <input type="color" name="corFundoGarantia" value="<?= $corFundoGarantia ?>">
            <label for="corFundoGarantia">Cor de fundo da garantia</label><br>

            <input type="color" name="corFundoGarantiaAtencao" value="<?= $corFundoGarantiaAtencao ?>">
            <label for="corFundoGarantiaAtencao">Cor de fundo do aviso da garantia</label>

        </div>

    </div>


<?php
};

function salvar_dadosMetaBox_configuracoes_site($post_id)
{
    foreach ($_POST as $key => $value) {
        if (
            $key !== 'corFundoSite' &&
            $key !== 'corTextoBotaoComercial' &&
            $key !== 'textoBotaoComercial' &&
            $key !== 'numWhatsappComercial' &&
            $key !== 'MensagemWhatsappComercial' &&
            $key !== 'corTexto1TituloPrincipal' &&
            $key !== 'texto1TituloPrincipal' &&
            $key !== 'corTexto2TituloPrincipal' &&
            $key !== 'texto2TituloPrincipal' &&
            $key !== 'corTexto3TituloPrincipal' &&
            $key !== 'texto3TituloPrincipal' &&
            $key !== 'corFundoTextoDestaque' &&
            $key !== 'corTextoDestaque' &&
            $key !== 'textoDestaque' &&
            $key !== 'textoDestaqueUnderline' &&
            $key !== 'corTexto1Subtitulo' &&
            $key !== 'texto1Subtitulo' &&
            $key !== 'corTexto2Subtitulo' &&
            $key !== 'texto2Subtitulo' &&
            $key !== 'corTexto3Subtitulo' &&
            $key !== 'texto3Subtitulo' &&
            $key !== 'botaoPrincipalTextoSup' &&
            $key !== 'botaoPrincipalTextoInf' &&
            $key !== 'corBotaoPrincipal' &&
            $key !== 'corTextpBotaoPrincipal' &&
            $key !== 'linkRedirecionamentoBotao' &&
            $key !== 'corBackgroundCronometro' &&
            $key !== 'corFundoCronometro' &&
            $key !== 'corTextosCronometro' &&
            $key !== 'textoInscricoesCronometro' &&
            $key !== 'dia' &&
            $key !== 'hora' &&
            $key !== 'minuto' &&
            $key !== 'segundo' &&
            $key !== 'corFundoQuadro' &&
            $key !== 'corFundoIcone' &&
            $key !== 'corTituloQuadro' &&
            $key !== 'corTextoQuadro' &&
            $key !== 'corTexto1VideoPrincipal' &&
            $key !== 'texto1VideoPrincipal' &&
            $key !== 'corTexto2VideoPrincipal' &&
            $key !== 'texto2VideoPrincipal' &&
            $key !== 'linkVideoYt' &&
            $key !== 'corFundoModulos' &&
            $key !== 'corDetalheModuloEsquerda' &&
            $key !== 'corTituloModulo' &&
            $key !== 'corTextoModulo' &&
            $key !== 'corFundoBonus' &&
            $key !== 'corTituloDestaqueBonus' &&
            $key !== 'tituloDestaqueBonus' &&
            $key !== 'corTituloBonus' &&
            $key !== 'tituloBonus' &&
            $key !== 'corFundoQuadrosBonus' &&
            $key !== 'corTextosCards' &&
            $key !== 'corTitulosCards' &&
            $key !== 'corTituloPlano' &&
            $key !== 'corFundoPlanos' &&
            $key !== 'corSubtituloPlanos' &&
            $key !== 'corTextosPlanos' &&
            $key !== 'corVideoRelatosTexto1' &&
            $key !== 'texto1VideoRelatos' &&
            $key !== 'corVideoRelatosTexto2' &&
            $key !== 'texto2VideoRelatos' &&
            $key !== 'corVideoRelatosTexto3' &&
            $key !== 'texto3VideoRelatos' &&
            $key !== 'corTituloPerguntasFrequentes' &&
            $key !== 'tituloPerguntasFrequentes' &&
            $key !== 'corTituloPerguntas' &&
            $key !== 'corTextoResposta' &&
            $key !== 'corFundoResposta' &&
            $key !== 'corTituloGarantia' &&
            $key !== 'textoTituloGarantia' &&
            $key !== 'textoDestaqueGarantia1' &&
            $key !== 'textoDescricaoDestaqueGarantia1' &&
            $key !== 'textoDestaqueGarantia2' &&
            $key !== 'textoDescricaoDestaqueGarantia2' &&
            $key !== 'textoAvisoGarantia' &&
            $key !== 'corDescricoesDestaqueGarantia1' &&
            $key !== 'corTextoDestaqueGarantia1' &&
            $key !== 'corTextoDestaqueGarantia2' &&
            $key !== 'corFundoGarantia' &&
            $key !== 'corFundoGarantiaAtencao' &&
            $key !== 'corFundoTextoDestaqueGarantia2' &&
            $key !== 'corFundoTextoDestaqueGarantia1'
        ) {
            continue;
        }
        update_post_meta(
            $post_id,
            '_' . $key,
            $_POST[$key]
        );
    };
}
add_action('save_post', 'salvar_dadosMetaBox_configuracoes_site');


// inserir imagem
function aw_custom_meta_boxes_configuracao_site($post_type, $post)
{
    add_meta_box(
        'aw-meta-box-configuracao-site',
        __('Configurações das imagens'),
        'render_aw_meta_box_configuracao_site',
        array('post', 'configuracao_site'), //post types here
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aw_custom_meta_boxes_configuracao_site', 10, 2);


function render_aw_meta_box_configuracao_site($post)
{
    $imagemFundo = get_post_meta($post->ID, '_aw_custom_image', true);
    $imagemLogo = get_post_meta($post->ID, '_aw_custom_image2', true);
    $imagemGarantia = get_post_meta($post->ID, '_aw_custom_image3', true);
?>
    <table>
        <tr>
            <td>Mudar logo e icone do site em personalizar > Identidade do site</td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td colspan="2">Aproximadamente 350 x 72</td>
        </tr>
        <tr>
            <td><a href="#" class="aw_upload_image_button2 button button-secondary"><?php _e('Selecione a imagem da logo'); ?></a></td>
            <td><input type="text" name="aw_custom_image2" id="aw_custom_image2" style="width: 100%" value="<?= $imagemLogo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 19%"><img width="100%" src="<?= $imagemLogo ?>" alt=""></td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td>Aproximadamente 1920 x 776</td>
        </tr>
        <tr>
            <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Selecione a imagem do fundo'); ?></a></td>
            <td><input type="text" name="aw_custom_image" id="aw_custom_image" style="width: 100%" value="<?= $imagemFundo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 19%"><img width="100%" src="<?= $imagemFundo ?>" alt=""></td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td>Aproximadamente 465 x 611</td>
        </tr>
        <tr>
            <td><a href="#" class="aw_upload_image_button3 button button-secondary"><?php _e('Selecione a imagem da garantia'); ?></a></td>
            <td><input type="text" name="aw_custom_image3" id="aw_custom_image3" style="width: 100%" value="<?= $imagemGarantia; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 19%"><img width="100%" src="<?= $imagemGarantia ?>" alt=""></td>
        </tr>
    </table>
<?php
}


function aw_include_script_configuracao_site()
{
    if (!did_action('wp_enqueue_media')) {
        wp_enqueue_media();
    }
    wp_enqueue_script('awscript', get_stylesheet_directory_uri() . '/assets/js/awscript.js', array('jquery'), null, false);
}
add_action('admin_enqueue_scripts', 'aw_include_script_configuracao_site');


function aw_save_postdata_configuracao_site($post_id)
{
    foreach ($_POST as $key => $value) {
        if (
            $key !== 'aw_custom_image' &&
            $key !== 'aw_custom_image2' &&
            $key !== 'aw_custom_image3'
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
add_action('save_post', 'aw_save_postdata_configuracao_site');
