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

    <section class="section-7">
        <div class="background-section-7" style="background-color: <?= $corFundoSite ?>">
            <div class="title-perguntas-section-7">
                <span style="color: <?= $corTituloPerguntasFrequentes ?>"><?= $tituloPerguntasFrequentes ?></span>
            </div>
            <div class="icon-perguntas-section-7">
                //////////////////////////////////////////////
                <i class="fa-solid fa-gear fa-2x" style="color: <?= $corTituloPerguntasFrequentes ?>; margin: 0 5px"></i>
                //////////////////////////////////////////////
            </div>
            <div class="perguntas-center">
                <?php
                if ($queryadicionarPerguntas->have_posts()) {
                    while ($queryadicionarPerguntas->have_posts()) {
                        $queryadicionarPerguntas->the_post(); ?>
                        <button type="button" class="collapsible" style="background-color: <?= $corFundoSite ?>">
                            <div class="icon-perguntas">
                                <i class="fa-solid fa-chevron-right" style="color: <?= $corTituloPerguntas ?>"></i>
                            </div>
                            <div class="title-perguntas" style="margin-left: 10px">
                                <span style="color: <?= $corTituloPerguntas ?>"><?= get_the_title() ?></span>
                            </div>
                        </button>
                        <div class="content" style="background-color: <?= $corFundoResposta ?>87">
                            <p style="color: <?= $corTextoResposta ?>; margin-left: 10px"><?= get_the_content() ?></p>
                        </div>
                <?php
                    }
                }
                ?>
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
