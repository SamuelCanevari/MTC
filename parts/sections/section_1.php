<?php
$argsconfiguracao_site = array(
    'post_type' => 'configuracao_site',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$queryconfiguracao_site = new WP_Query($argsconfiguracao_site);
if ($queryconfiguracao_site->have_posts()) {
    while ($queryconfiguracao_site->have_posts()) {
        $queryconfiguracao_site->the_post();

        $imagemFundo = get_post_meta($post->ID, '_aw_custom_image', true);
        $imagemLogo = get_post_meta($post->ID, '_aw_custom_image2', true);

        $corTextoBotaoComercial = get_post_meta($post->ID, '_corTextoBotaoComercial', true);
        $textoBotaoComercial = get_post_meta($post->ID, '_textoBotaoComercial', true);
        $numWhatsappComercial = get_post_meta($post->ID, '_numWhatsappComercial', true);
        $MensagemWhatsappComercial = get_post_meta($post->ID, '_MensagemWhatsappComercial', true);
        $linkWppBtnComercial = "https://api.whatsapp.com/send/?phone=" . $numWhatsappComercial . "&text=" . $MensagemWhatsappComercial;

        $botaoPrincipalTextoSup = get_post_meta($post->ID, '_botaoPrincipalTextoSup', true);
        $botaoPrincipalTextoInf = get_post_meta($post->ID, '_botaoPrincipalTextoInf', true);
        $corBotaoPrincipal = get_post_meta($post->ID, '_corBotaoPrincipal', true);
        $corTextpBotaoPrincipal = get_post_meta($post->ID, '_corTextpBotaoPrincipal', true);
        $linkRedirecionamentoBotao = get_post_meta($post->ID, '_linkRedirecionamentoBotao', true);

        $corTexto1TituloPrincipal = get_post_meta($post->ID, '_corTexto1TituloPrincipal', true);
        $texto1TituloPrincipal = get_post_meta($post->ID, '_texto1TituloPrincipal', true);
        $corTexto2TituloPrincipal = get_post_meta($post->ID, '_corTexto2TituloPrincipal', true);
        $texto2TituloPrincipal = get_post_meta($post->ID, '_texto2TituloPrincipal', true);
        $corTexto3TituloPrincipal = get_post_meta($post->ID, '_corTexto3TituloPrincipal', true);
        $texto3TituloPrincipal = get_post_meta($post->ID, '_texto3TituloPrincipal', true);

        $corFundoTextoDestaque = get_post_meta($post->ID, '_corFundoTextoDestaque', true);
        $corTextoDestaque = get_post_meta($post->ID, '_corTextoDestaque', true);
        $textoDestaque = get_post_meta($post->ID, '_textoDestaque', true);
        $textoDestaqueUnderline = get_post_meta($post->ID, '_textoDestaqueUnderline', true);

        $texto1Subtitulo = get_post_meta($post->ID, '_texto1Subtitulo', true);
        $corTexto1Subtitulo = get_post_meta($post->ID, '_corTexto1Subtitulo', true);
        $texto2Subtitulo = get_post_meta($post->ID, '_texto2Subtitulo', true);
        $corTexto2Subtitulo = get_post_meta($post->ID, '_corTexto2Subtitulo', true);
        $texto3Subtitulo = get_post_meta($post->ID, '_texto3Subtitulo', true);
        $corTexto3Subtitulo = get_post_meta($post->ID, '_corTexto3Subtitulo', true);


        $corBackgroundCronometro = get_post_meta($post->ID, '_corBackgroundCronometro', true);
        $corFundoCronometro = get_post_meta($post->ID, '_corFundoCronometro', true);
        $corTextosCronometro = get_post_meta($post->ID, '_corTextosCronometro', true);
        $textoInscricoesCronometro = get_post_meta($post->ID, '_textoInscricoesCronometro', true);
        $dia = get_post_meta($post->ID, '_dia', true);
        $hora = get_post_meta($post->ID, '_hora', true);
        $minuto = get_post_meta($post->ID, '_minuto', true);
        $segundo = get_post_meta($post->ID, '_segundo', true);
    } ?>

    <header class="header">
        <div class="header-container">
            <?php
            if ($imagemLogo === "") { ?>
                <img src="wp-content\themes\maquina-trafego-tema\assets\images\logo.png" class="header-logo" width="280px">
            <?php
            } else { ?>
                <img src="<?= $imagemFundo ?>" class="header-logo" width="280px">
            <?php
            }
            ?>
            <div class="alinhamento">
                <a href="<?= $linkWppBtnComercial ?>" target="_blank">
                    <button class="btn-comercial-header"><?= $textoBotaoComercial ?></button>
                </a>
            </div>
            <div class="alinhamento">
                <div class="header-text">
                    <span style="color: <?= $corTexto1TituloPrincipal ?>"><?= $texto1TituloPrincipal ?><span style="color: <?= $corTexto2TituloPrincipal ?>"><?= $texto2TituloPrincipal ?></span><span style="color: <?= $corTexto3TituloPrincipal ?>"><?= $texto3TituloPrincipal ?></span></span>
                </div>
            </div>
            <div class="alinhamento">
                <div class="metodo-valido-header">
                    <i class="fa-regular fa-circle-check fa-2xl"></i>
                    <span style="color: <?= $corTextoDestaque ?>;"><?= $textoDestaque ?><u style="color: <?= $corTextoDestaque ?>;"><?= $textoDestaqueUnderline ?></u></span>
                </div>
            </div>
            <div class="alinhamento">
                <div class="btn-inscrever-header">
                    <a href="<?= $linkRedirecionamentoBotao ?>" target="_blank">
                        <button style="background-color: <?= $corBotaoPrincipal ?>; color: <?= $corTextpBotaoPrincipal ?>">
                            <span><?= $botaoPrincipalTextoSup ?></span>
                            <br>
                            <span style="font-size: 0.6em; font-weight: 500;"><?= $botaoPrincipalTextoInf ?></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="section-1" style="background-color: <?= $corBackgroundCronometro ?>;">
        <div class="section-1-container">
            <div class="notificar">
                <div class="notificar-box">
                    <i class="fa-solid fa-bell fa-2x"></i>
                </div>
                <div class="text-notificar">
                    <span style="color: <?= $corTextosCronometro ?>;"><?= $textoInscricoesCronometro ?></span>
                </div>
                <div class="encerramento">
                    <div class="dias" style="background-color: <?= $corFundoCronometro ?>;">
                        <span id="dias" style="color: <?= $corTextosCronometro ?>;">0</span>
                        <p style=" color: <?= $corTextosCronometro ?>;">DIAS</p>
                    </div>
                    <div class="horas" style="background-color: <?= $corFundoCronometro ?>;">
                        <span id="horas" style="color: <?= $corTextosCronometro ?>;">0</span>
                        <p style="color: <?= $corTextosCronometro ?>;">HORAS</p>
                    </div>
                    <div class="minutos" style="background-color: <?= $corFundoCronometro ?>;">
                        <span id="minutos" style="color: <?= $corTextosCronometro ?>;">0</span>
                        <p style="color: <?= $corTextosCronometro ?>;">MINUTOS</p>
                    </div>
                    <div class="segundos" style="background-color: <?= $corFundoCronometro ?>;">
                        <span id="segundos" style="color: <?= $corTextosCronometro ?>;">0</span>
                        <p style="color: <?= $corTextosCronometro ?>;">SEGUNDOS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var dias = <?= $dia ?>;
        var horas = <?= $hora ?>;
        var minutos = <?= $minuto ?>;
        var segundos = <?= $segundo ?>;
        var t = ((dias * 24 * 60 * 60) + (horas * 60 * 60) + (minutos * 60) + segundos);
        var x = setInterval(function() {

            var days = Math.floor(t / (60 * 60 * 24));
            var hours = Math.floor((t % (60 * 60 * 24)) / (60 * 60));
            var minutes = Math.floor((t % (60 * 60)) / (60));
            var seconds = Math.floor((t % (60)));
            document.getElementById("dias").innerHTML = days;
            document.getElementById("horas").innerHTML = hours;
            document.getElementById("minutos").innerHTML = minutes;
            document.getElementById("segundos").innerHTML = seconds;
            --t;

            if (t < 0) {
                clearInterval(x)
            }
        }, 1000);
    </script>

<?php
};
