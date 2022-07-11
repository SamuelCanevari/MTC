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

        $corFundoSite = get_post_meta($post->ID, '_corFundoSite', true);

        $corTexto1VideoPrincipal = get_post_meta($post->ID, '_corTexto1VideoPrincipal', true);
        $texto1VideoPrincipal = get_post_meta($post->ID, '_texto1VideoPrincipal', true);
        $corTexto2VideoPrincipal = get_post_meta($post->ID, '_corTexto2VideoPrincipal', true);
        $texto2VideoPrincipal = get_post_meta($post->ID, '_texto2VideoPrincipal', true);
        $linkVideoYt = get_post_meta($post->ID, '_linkVideoYt', true);
        $videoTratado = str_replace("watch?v=", "embed/", $linkVideoYt);

        $botaoPrincipalTextoSup = get_post_meta($post->ID, '_botaoPrincipalTextoSup', true);
        $botaoPrincipalTextoInf = get_post_meta($post->ID, '_botaoPrincipalTextoInf', true);
        $corBotaoPrincipal = get_post_meta($post->ID, '_corBotaoPrincipal', true);
        $corTextpBotaoPrincipal = get_post_meta($post->ID, '_corTextpBotaoPrincipal', true);
        $linkRedirecionamentoBotao = get_post_meta($post->ID, '_linkRedirecionamentoBotao', true);
    } ?>

    <section class="section-3">
        <div class="background-section-3" style="background-color: <?= $corFundoSite ?>">
            <div class="title-informacoes" style="width: 930px">
                <span style="color: <?= $corTexto1VideoPrincipal ?>"><?= $texto1VideoPrincipal ?><span style="color: <?= $corTexto2VideoPrincipal ?>"><?= $texto2VideoPrincipal ?></span></span>
            </div>
            <div class="video-informacoes">
                <iframe width="860" height="480" src="<?= $videoTratado ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="btn-inscrever-se-section-3">
                <a href="<?= $linkRedirecionamentoBotao ?>" target="_blank">
                    <button style="background-color: <?= $corBotaoPrincipal ?>;">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span><?= $botaoPrincipalTextoSup ?></span>
                        <br>
                        <span style="font-size: 0.6em; font-weight: 500;"><?= $botaoPrincipalTextoInf ?></span>
                    </button>
                </a>
            </div>
        </div>
    </section>

<?php
}
