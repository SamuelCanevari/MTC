<?php
$argsconfiguracao_site = array(
    'post_type' => 'configuracao_site',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$queryconfiguracao_site = new WP_Query($argsconfiguracao_site);

$argsadicionarBonus = array(
    'post_type' => 'adicionarBonus',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$queryadicionarBonus = new WP_Query($argsadicionarBonus);

$argsadicionarPlanos = array(
    'post_type' => 'adicionarPlanos',
    'post_status' => 'publish',
    'posts_per_page' => 2
);
$queryadicionarPlanos = new WP_Query($argsadicionarPlanos);

if ($queryconfiguracao_site->have_posts()) {
    while ($queryconfiguracao_site->have_posts()) {
        $queryconfiguracao_site->the_post();

        $corFundoBonus = get_post_meta($post->ID, '_corFundoBonus', true);
        $tituloDestaqueBonus = get_post_meta($post->ID, '_tituloDestaqueBonus', true);
        $corTituloDestaqueBonus = get_post_meta($post->ID, '_corTituloDestaqueBonus', true);
        $tituloBonus = get_post_meta($post->ID, '_tituloBonus', true);
        $corTituloBonus = get_post_meta($post->ID, '_corTituloBonus', true);
        $corFundoQuadrosBonus = get_post_meta($post->ID, '_corFundoQuadrosBonus', true);
        $corTextosCards = get_post_meta($post->ID, '_corTextosCards', true);
        $corTitulosCards = get_post_meta($post->ID, '_corTitulosCards', true);

        $corTituloPlano = get_post_meta($post->ID, '_corTituloPlano', true);
        $corFundoPlanos = get_post_meta($post->ID, '_corFundoPlanos', true);
        $corSubtituloPlanos = get_post_meta($post->ID, '_corSubtituloPlanos', true);
        $corTextosPlanos = get_post_meta($post->ID, '_corTextosPlanos', true);

        $botaoPrincipalTextoSup = get_post_meta($post->ID, '_botaoPrincipalTextoSup', true);
        $botaoPrincipalTextoInf = get_post_meta($post->ID, '_botaoPrincipalTextoInf', true);
        $corBotaoPrincipal = get_post_meta($post->ID, '_corBotaoPrincipal', true);
        $corTextpBotaoPrincipal = get_post_meta($post->ID, '_corTextpBotaoPrincipal', true);
        $linkRedirecionamentoBotao = get_post_meta($post->ID, '_linkRedirecionamentoBotao', true);
    } ?>

    <section class="section-5">
        <div class="background-section-5" style="background-color: <?= $corFundoBonus ?>">
            <div class="title-informacoes">
                <div class="title-bonus">
                    <span style="color: <?= $corTituloDestaqueBonus ?>"><?= $tituloDestaqueBonus ?></span>
                </div>
                <div class="text-bonus">
                    <span style="color: <?= $corTituloBonus ?>; max-width: 480px"><?= $tituloBonus ?></span>
                </div>
                <div class="icon-bonus">
                    <img src="wp-content\themes\maquina-trafego-tema\assets\images\icon-bonus.png" alt="">
                </div>
            </div>

            <div class="grid-container-bonus">
                <?php
                if ($queryadicionarBonus->have_posts()) {
                    while ($queryadicionarBonus->have_posts()) {
                        $queryadicionarBonus->the_post(); ?>
                        <div class="grid-item-bonus" style="background-color: <?= $corFundoQuadrosBonus ?>">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" height="40px">
                            <div class="title-grid-bonus">
                                <span style="color: <?= $corTitulosCards ?>; width: 25rem;"><?= get_the_title() ?></span>
                            </div>
                            <div class="text-grid-bonus">
                                <p style="color: <?= $corTextosCards ?>"><?= get_the_content() ?></p>
                            </div>
                        </div>
                <?php
                    }
                } ?>
            </div>

            <div class="grid-container-bonus2">
                <?php
                if ($queryadicionarPlanos->have_posts()) {
                    while ($queryadicionarPlanos->have_posts()) {
                        $queryadicionarPlanos->the_post();
                        $subTitulo = get_post_meta($post->ID, '_subTitulo', true);
                ?>
                        <div class="grid-item-bonus2" style="background-color: <?= $corFundoPlanos ?>;">
                            <div class="icon-grid-bonus2">
                                <img src="<?= get_the_post_thumbnail_url() ?>" width="70px">
                            </div>
                            <div class="title-grid-bonus2">
                                <span style="color: <?= $corTituloPlano ?>"><?= the_title() ?></span>
                            </div>
                            <div class="subtitle-grid-bonus2">
                                <span style="color: <?= $corSubtituloPlanos ?>"><?= $subTitulo ?></span>
                            </div>
                            <div class="text-grid-bonus2">
                                <p style="color: <?= $corTextosPlanos ?>"><?= the_content() ?></p>
                            </div>
                        </div>
                <?php
                    }
                } ?>
            </div>

            <div class="btn-inscrever-se-section-5">
                <a href="<?= $linkRedirecionamentoBotao ?>" target="_blank">
                    <button style="background-color: <?= $corBotaoPrincipal ?>; color: <?= $corTextpBotaoPrincipal ?>">
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
