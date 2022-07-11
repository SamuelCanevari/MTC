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
        <div class="section-8-container" style="background-color: <?= $corFundoSite ?>">
            <div class="box-garantia-section-8" style="background-color: <?= $corFundoGarantia ?>">
                <div class="img-garantia-section-8">
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
                <span class="title-garantia-section-8" style="color: <?= $corTituloGarantia ?>"><?= $textoTituloGarantia ?></span>

                <div class="garantia-incondicional-section-8" style="background-color: <?= $corFundoTextoDestaqueGarantia1 ?>;color: <?= $corTextoDestaqueGarantia1 ?>">
                    <?= $textoDestaqueGarantia1 ?>
                </div>
                <div class="text-garantia-section-8">
                    <p style="color: <?= $corTextoDescricaoDestaqueGarantia1 ?>"><?= $textoDescricaoDestaqueGarantia1 ?></p>
                </div>

                <div class="garantia-condicional-section-8" style="background-color: <?= $corFundoTextoDestaqueGarantia2 ?>;color: <?= $corTextoDestaqueGarantia2 ?>">
                    <?= $textoDestaqueGarantia2 ?>
                </div>
                <div class="text-garantia-section-8">
                    <p style="color: <?= $corTextoDescricaoDestaqueGarantia2 ?>"><?= $textoDescricaoDestaqueGarantia2 ?></p>
                </div>

                <div class="box-garantia-2-section-8" style="background-color: <?= $corFundoGarantiaAtencao ?>">
                    <span style="color: <?= $corTextoTituloGarantia ?>">
                        <?= $textoAvisoGarantia ?>
                    </span>
                </div>
            </div>
        </div>
    </section>

<?php
}
