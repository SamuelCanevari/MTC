<?php

$argsconfiguracao_site = array(
    'post_type' => 'configuracao_site',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$queryconfiguracao_site = new WP_Query($argsconfiguracao_site);

$argsadicionarPerguntas = array(
    'post_type' => 'adicionarPerguntas',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$queryadicionarPerguntas = new WP_Query($argsadicionarPerguntas);

if ($queryconfiguracao_site->have_posts()) {
    while ($queryconfiguracao_site->have_posts()) {
        $queryconfiguracao_site->the_post();

        $corFundoSite = get_post_meta($post->ID, '_corFundoSite', true);

        $corTituloPerguntasFrequentes = get_post_meta($post->ID, '_corTituloPerguntasFrequentes', true);
        $tituloPerguntasFrequentes = get_post_meta($post->ID, '_tituloPerguntasFrequentes', true);
        $corTituloPerguntas = get_post_meta($post->ID, '_corTituloPerguntas', true);
        $corTextoResposta = get_post_meta($post->ID, '_corTextoResposta', true);
        $corFundoResposta = get_post_meta($post->ID, '_corFundoResposta', true);
    } ?>


    <section class="section-7" style="background-color: <?= $corFundoSite ?>">
        <div class="section-7-container">
            <div class="alinhamento">
                <div class="title-perguntas-section-7">
                    <span style="color: <?= $corTituloPerguntasFrequentes ?>"><?= $tituloPerguntasFrequentes ?></span>
                </div>
                <div class="icon-section-7" style="color: #C4C4C4">
                    ////////////////////////////////
                    <i class="fa-solid fa-gear fa-2x" style="color: <?= $corTituloPerguntasFrequentes ?>;"></i>
                    ////////////////////////////////
                </div>
                <div class="perguntas-center">
                    <?php
                    if ($queryadicionarPerguntas->have_posts()) {
                        while ($queryadicionarPerguntas->have_posts()) {
                            $queryadicionarPerguntas->the_post(); ?>
                            <div>
                                <button type="button" class="collapsible" style="background-color: <?= $corFundoSite ?>">
                                    <div class="perguntas">
                                        <div class="title-perguntas">
                                            <span style="color: <?= $corTituloPerguntas ?>"><?= get_the_title() ?></span>
                                        </div>
                                        <div class="icon-perguntas">
                                            <i class="fa-solid fa-chevron-right fa-xs" style="color: <?= $corTituloPerguntas ?>"></i>
                                        </div>
                                    </div>
                                </button>
                                <div class="content" style="background-color: <?= $corFundoResposta ?>">
                                    <p style="color: <?= $corTextoResposta ?>;"><?= get_the_content() ?></p>
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

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>

<?php
}
