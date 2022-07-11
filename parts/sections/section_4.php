<?php
$argsconfiguracao_site = array(
    'post_type' => 'configuracao_site',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$queryconfiguracao_site = new WP_Query($argsconfiguracao_site);

$argsadicionarModulo = array(
    'post_type' => 'adicionarModulo',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$queryadicionarModulo = new WP_Query($argsadicionarModulo);

if ($queryconfiguracao_site->have_posts()) {
    while ($queryconfiguracao_site->have_posts()) {
        $queryconfiguracao_site->the_post();

        $corFundoSite = get_post_meta($post->ID, '_corFundoSite', true);

        $corFundoModulos = get_post_meta($post->ID, '_corFundoModulos', true);
        $corDetalheModuloEsquerda = get_post_meta($post->ID, '_corDetalheModuloEsquerda', true);
        $corTituloModulo = get_post_meta($post->ID, '_corTituloModulo', true);
        $corTextoModulo = get_post_meta($post->ID, '_corTextoModulo', true);
        $subTitulo = get_post_meta($post->ID, '_subTitulo', true);
    } ?>

    <section class="section-4" style="background-color: <?= $corFundoSite ?>">
        <div class="section-4-container">
            <div class="alinhamento">
                <div class="container-section-4-grid">

                    <?php if ($queryadicionarModulo->have_posts()) {
                        while ($queryadicionarModulo->have_posts()) {
                            $queryadicionarModulo->the_post(); ?>
                            <div class="item-section-4-grid" style="background-color: <?= $corFundoModulos ?>; border-style: solid; border-width: 0px 0px 0px 2px;border-color: <?= $corDetalheModuloEsquerda ?>;">
                                <div class="item-icon-section-4-grid">
                                    <img src="<?= get_the_post_thumbnail_url(); ?>" width="45px">
                                </div>
                                <div class="informacoes-section-4-grid">
                                    <span class="title-section-4-grid" style="color: <?= $corTituloModulo ?>"><?= get_the_title(); ?></span>
                                    <?php $textoo = get_the_content(); ?>
                                    <p class="text-section-4-grid" style="color: <?= $corTextoModulo ?>"><?= $textoo; ?></p>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>


<?php
}
