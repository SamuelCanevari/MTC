<?php

$argsconfiguracao_site = array(
    'post_type' => 'configuracao_site',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$queryconfiguracao_site = new WP_Query($argsconfiguracao_site);

$argsadicionarQuadrado = array(
    'post_type' => 'adicionarQuadrado',
    'post_status' => 'publish',
    'posts_per_page' => 3
);
$queryadicionarQuadrado = new WP_Query($argsadicionarQuadrado);


if ($queryconfiguracao_site->have_posts()) {
    while ($queryconfiguracao_site->have_posts()) {
        $queryconfiguracao_site->the_post();

        $corFundoSite = get_post_meta($post->ID, '_corFundoSite', true);

        $corFundoQuadro = get_post_meta($post->ID, '_corFundoQuadro', true);
        $corFundoIcone = get_post_meta($post->ID, '_corFundoIcone', true);
        $corTituloQuadro = get_post_meta($post->ID, '_corTituloQuadro', true);
        $corTextoQuadro = get_post_meta($post->ID, '_corTextoQuadro', true);
    } ?>

    <section class="section-2" style="background-color: <?= $corFundoSite ?>">
        <div class="section-2-container">
            <div class="container-section-2-grid">
                <?php
                if ($queryadicionarQuadrado->have_posts()) {
                    while ($queryadicionarQuadrado->have_posts()) {
                        $queryadicionarQuadrado->the_post(); ?>
                        <div class="item-section-2-grid" style="background-color: <?= $corFundoQuadro ?>">
                            <div class="icon-section-2-grid" style="background-color: <?= $corFundoIcone ?>">
                                <img src="<?= get_the_post_thumbnail_url(); ?>" width='30px' />
                            </div>
                            <span class="title-section-2-grid" style="color: <?= $corTituloQuadro ?>;"><?= the_title(); ?></span>
                            <p class="text-section-2-grid" style="color: <?= $corTextoQuadro ?>"><?= get_the_content(); ?></p>
                        </div>
                <?php
                    }
                } ?>
            </div>
        </div>
    </section>

<?php
}
