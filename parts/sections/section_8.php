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

        $corFundoSite = get_post_meta($post->ID, '_corFundoSite', true);
        $imagemGarantia = get_post_meta($post->ID, '_aw_custom_image3', true);
        $corTituloGarantia = get_post_meta($post->ID, '_corTituloGarantia', true);
        $textoTituloGarantia = get_post_meta($post->ID, '_textoTituloGarantia', true);
        $textoDestaqueGarantia1 = get_post_meta($post->ID, '_textoDestaqueGarantia1', true);
        $textoDescricaoDestaqueGarantia1 = get_post_meta($post->ID, '_textoDescricaoDestaqueGarantia1', true);
        $textoDestaqueGarantia2 = get_post_meta($post->ID, '_textoDestaqueGarantia2', true);
        $textoDescricaoDestaqueGarantia2 = get_post_meta($post->ID, '_textoDescricaoDestaqueGarantia2', true);
        $textoAvisoGarantia = get_post_meta($post->ID, '_textoAvisoGarantia', true);
        $corTextoTituloGarantia = get_post_meta($post->ID, '_corTextoTituloGarantia', true);
        $corDescricoesDestaqueGarantia1 = get_post_meta($post->ID, '_corDescricoesDestaqueGarantia1', true);
        $corTextoDestaqueGarantia1 = get_post_meta($post->ID, '_corTextoDestaqueGarantia1', true);
        $corTextoDestaqueGarantia2 = get_post_meta($post->ID, '_corTextoDestaqueGarantia2', true);
        $corFundoGarantia = get_post_meta($post->ID, '_corFundoGarantia', true);
        $corFundoGarantiaAtencao = get_post_meta($post->ID, '_corFundoGarantiaAtencao', true);
        $corFundoTextoDestaqueGarantia2 = get_post_meta($post->ID, '_corFundoTextoDestaqueGarantia2', true);
        $corFundoTextoDestaqueGarantia1 = get_post_meta($post->ID, '_corFundoTextoDestaqueGarantia1', true);
    } ?>

    <section class="section-8">
        <div class="background-section-8" style="background-color: <?= $corFundoSite ?>">
            <div class="garantia-box" style="background-color: <?= $corFundoGarantia ?>">
                <div class="title-garantia">
                    <span style="color: <?= $corTituloGarantia ?>"><?= $textoTituloGarantia ?></span>
                </div>
                <div class="garantia-incondicional" style="background-color: <?= $corFundoTextoDestaqueGarantia1 ?>">
                    <span style="color: <?= $corTextoDestaqueGarantia1 ?>"><?= $textoDestaqueGarantia1 ?></span>
                </div>
                <div class="text-garantia-incondicional">
                    <span style="width: 640px; color: <?= $corTextoDescricaoDestaqueGarantia1 ?>"><?= $textoDescricaoDestaqueGarantia1 ?></span>
                </div>
                <div class="garantia-condicional" style="background-color: <?= $corFundoTextoDestaqueGarantia2 ?>">
                    <span style="color: <?= $corTextoDestaqueGarantia2 ?>"><?= $textoDestaqueGarantia2 ?></span>
                </div>
                <div class="text-garantia-condicional">
                    <span style="width: 640px"><?= $textoDescricaoDestaqueGarantia2 ?></span>
                </div>
                <div class="imagem-garantia">
                    <?php
                    if ($imagemGarantia !== '') { ?>
                        <img src="<?= $imagemGarantia ?>" alt="" width="300px">
                    <?php
                    } else { ?>
                        <img src="wp-content\themes\maquina-trafego-tema\assets\images\garantia.png" alt="" width="300px">
                    <?php
                    }
                    ?>
                </div>
                <div class="atencao-garantia-box" style="background-color: <?= $corFundoGarantiaAtencao ?>">
                    <div class="atencao-garantia-text">
                        <em style="color: <?= $corTextoTituloGarantia ?>"><?= $textoAvisoGarantia ?></em>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
}
