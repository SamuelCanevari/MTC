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

        <div class="section-5-container">

            <div class="alinhamento">
                <div class="bonus-section-5">
                    <span class="title-bonus-section-5">Bônus</span>
                    <p class="text-bonus-section-5">BÔNUS que vão potencializar e acelerar o</p>
                    <p class="text-bonus-section-5">crescimento das suas vendas na Internet:</p>
                    <img src="img/bonus/icon-bonus.png" alt="" class="icon-bonus-section-5">
                </div>
            </div>

            <div class="container-section-5-grid">

                <div class="item-section-5-grid">
                    <div class="icon-section-5-grid">
                    </div>
                    <div class="informacoes-section-5-grid">
                        <span class="title-section-5-grid">Curso de Facebook e Instagram Ads</span>
                        <p class="text-section-5-grid">Curso completo com tudo que você precisa para conseguir gerar
                            vendas
                            no Facebook e Instagram,
                            as maiores fontes de clientes nas redes sociais.</p>
                    </div>
                </div>
                <div class="item-section-5-grid">
                    <div class="icon-section-5-grid">
                    </div>
                    <div class="informacoes-section-5-grid">
                        <span class="title-section-5-grid">Curso de Facebook e Instagram Ads</span>
                        <p class="text-section-5-grid">Curso completo com tudo que você precisa para conseguir gerar
                            vendas
                            no Facebook e Instagram,
                            as maiores fontes de clientes nas redes sociais.</p>
                    </div>
                </div>

            </div>
            <div class="item-section-5-grid-informacoes">
                <img src="img/bonus/gold.png" alt="" class="icon-informacoes-bonus-section-5">
                <h2 class="title-informacoes-bonus-section-5" style="color: #ea8600;">Bônus Gold</h2>
                <span class="subtitle-informacoes-bonus-section-5">120 horas de consultoria ao vivo gravadas</span>
                <br>
                <br>
                <p class="text-informacoes-bonus-section-5">O Maior acervo de análises de campanhas Google que
                    existe. São mais de 120 horas onde eu
                    analiso campanhas de alunos ao vivo, corrigindo o que está errado e traçando uma estratégia
                    para vender mais.</p>
                <br>
                <p class="text-informacoes-bonus-section-5">Encontrará consultorias gravadas sobre campanhas de rede
                    de pesquisa, Youtube, display,
                    mobile, remarketing, shopping e sobre todo tipo de negócio. Afinal, são mais de 3.800
                    negócios no Máquina.</p>
                <br>
                <p class="text-informacoes-bonus-section-5">São incontáveis anos de evolução que sua empresa poderá
                    acelerar apenas com este
                    bônus.</p>
            </div>
            <div class="item-section-5-grid-informacoes">
                <img src="img/bonus/diamante.png" alt="" class="icon-informacoes-bonus-section-5">
                <h2 class="title-informacoes-bonus-section-5" style="color: #5b0980;">Bônus Diamante</h2>
                <span class="subtitle-informacoes-bonus-section-5">36 mentorias ao vivo</span>
                <br>
                <br>
                <p class="text-informacoes-bonus-section-5">Uma vez por mês, ao vivo, você poderá tirar dúvidas
                    sobre as estratégias da sua campanha e
                    da sua conta, ou ainda da conta dos seus clientes. Poderá ter sua campanha analisada ao
                    vivo, onde eu traçarei junto com você uma estratégia para que venda mais.</p>
                <br>
                <p class="text-informacoes-bonus-section-5">Também te ajudarei a saber onde você está errando, onde
                    está jogando dinheiro fora e o que
                    terá que fazer para corrigir o mais rápido possível. Minha meta é fazer você pagar o
                    investimento do MÁQUINA em pouquíssimo tempo.</p>
            </div>
            <div class="btn-inscrever-section-5">
                <button>
                    <i class="fa-solid fa-arrow-right"></i>
                    <span>FAZER MINHA INSCRIÇÃO</span>
                    <br>
                    <span style="font-size: 0.6em; font-weight: 500;">10X R$239,70 sem juros</span>
                </button>
            </div>
        </div>
    </section>


    <section class="section-5">

        <div class="background-section-5">
            <div class="title-informacoes">

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
