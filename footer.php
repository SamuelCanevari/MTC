<?php
$argsconfiguracao_site = array(
    'post_type' => 'adicionarFooter',
    'post_status' => 'publish',
    'posts_per_page' => 1
);
$queryconfiguracao_site = new WP_Query($argsconfiguracao_site);
if ($queryconfiguracao_site->have_posts()) {
    while ($queryconfiguracao_site->have_posts()) {
        $queryconfiguracao_site->the_post();

        $corFundoSite = get_post_meta($post->ID, '_corFundoSite', true);

        $editora = get_post_meta($post->ID, '_editora', true);
        $cnpj = get_post_meta($post->ID, '_cnpj', true);
        $email = get_post_meta($post->ID, '_email', true);
        $termosDeUso = get_post_meta($post->ID, '_termosDeUso', true);
        $termosDeUsoLink = get_post_meta($post->ID, '_termosDeUsoLink', true);
        $termosDeUsoLinkTexto = get_post_meta($post->ID, '_termosDeUsoLinkTexto', true);
        $avisoLegal = get_post_meta($post->ID, '_avisoLegal', true);
        $avisoLegalDescricao = get_post_meta($post->ID, '_avisoLegalDescricao', true);
        $copyright = get_post_meta($post->ID, '_copyright', true);

        $corInformacaoDireita = get_post_meta($post->ID, '_corInformacaoDireita', true);
        $corInformacaoCopyright = get_post_meta($post->ID, '_corInformacaoCopyright', true);
        $corInformacaoAvisoLegal = get_post_meta($post->ID, '_corInformacaoAvisoLegal', true);
        $corInformacaoTermosDeUso = get_post_meta($post->ID, '_corInformacaoTermosDeUso', true);
        $corFundo = get_post_meta($post->ID, '_corFundo', true);

        $imagemEsquerda = get_post_meta($post->ID, '_aw_custom_image', true);
        $imagemCentro = get_post_meta($post->ID, '_aw_custom_image2', true);
    } ?>


    <footer class="footer">
        <div class="background-footer">
            <div class="alinhamento">
                <div class="footer-center">
                    <img src="<?= $imagemEsquerda ?>" alt="" class="logo-footer" width="280px">
                    <img src="<?= $imagemCentro ?>" alt="" class="logo-footer" width="280px">
                    <span class="informacoes-footer">
                        <?= $editora ?>
                        <br>
                        <?= $cnpj ?>
                        <br>
                        <a href="<?= "mailto:" . $email ?>" style="color: <?= $corInformacaoDireita ?>;text-decoration:none"><?= $email ?></a>
                    </span>
                    <hr class="linha-footer">
                    <span class="termos-footer">
                        <?= $termosDeUso ?> <a href="<?= $termosDeUsoLink ?>"><?= $termosDeUsoLinkTexto ?></a>
                    </span>
                    <hr class="linha-footer">
                    <span class="avisos-footer">
                        <?= $avisoLegal . " " . $avisoLegalDescricao ?>
                    </span>
                    <span class="copyright-footer">
                        <?= $copyright ?>
                    </span>
                </div>
            </div>
        </div>
    </footer>

<?php
} ?>

</body>

</html>

<?php
wp_footer()
?>