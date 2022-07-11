<?php
$argsconfiguracao_site = array(
    'post_type' => 'configuracao_site',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$queryconfiguracao_site = new WP_Query($argsconfiguracao_site);

$argsVideoRelato = array(
    'post_type' => 'adicionarVideoRelato',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$queryVideoRelato = new WP_Query($argsVideoRelato);

if ($queryconfiguracao_site->have_posts()) {
    while ($queryconfiguracao_site->have_posts()) {
        $queryconfiguracao_site->the_post();

        $corFundoSite = get_post_meta($post->ID, '_corFundoSite', true);

        $corVideoRelatosTexto1 = get_post_meta($post->ID, '_corVideoRelatosTexto1', true);
        $texto1VideoRelatos = get_post_meta($post->ID, '_texto1VideoRelatos', true);
        $corVideoRelatosTexto2 = get_post_meta($post->ID, '_corVideoRelatosTexto2', true);
        $texto2VideoRelatos = get_post_meta($post->ID, '_texto2VideoRelatos', true);
        $corVideoRelatosTexto3 = get_post_meta($post->ID, '_corVideoRelatosTexto3', true);
        $texto3VideoRelatos = get_post_meta($post->ID, '_texto3VideoRelatos', true);
    } ?>

    <section class="section-6" style="background-color: <?= $corFundoSite ?>">
        <div class="section-6-container">
            <div class="alinhamento">
                <div class="title-relatos-section-6">
                    <span style="color: <?= $corVideoRelatosTexto1 ?>"><?= $texto1VideoRelatos ?><span style="color: <?= $corVideoRelatosTexto2 ?>"><?= $texto2VideoRelatos ?></span><span style="color: <?= $corVideoRelatosTexto3 ?>"><?= $texto3VideoRelatos ?></span></span>
                </div>
            </div>
            <div class="videos-relatos-section-6">
                <?php
                if ($queryVideoRelato->have_posts()) {
                    while ($queryVideoRelato->have_posts()) {
                        $queryVideoRelato->the_post();
                        $linkVideoYt = get_the_content();
                        $videoTratado = str_replace("watch?v=", "embed/", $linkVideoYt);
                ?>
                        <iframe style="margin: 5px;" width="400" height="220" src="<?= $videoTratado ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php }
                }; ?>
            </div>
        </div>
    </section>

<?php
}
