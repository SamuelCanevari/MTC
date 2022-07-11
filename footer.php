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
            <div class="logo-mtc-footer">
                <img src="<?= $imagemEsquerda ?>" alt="" width="260px">
            </div>
            <div class="logo-adriano-gianini">
                <img src="<?= $imagemCentro ?>" alt="" width="280px">
            </div>
            <div class="text-1">
                <span><?= $editora ?><br><?= $cnpj ?><br><a href="<?= "mailto:" . $email ?>" style="color: <?= $corInformacaoDireita ?>;text-decoration:none"><?= $email ?></a></span>
            </div>
            <div class="linha-1">
                <hr />
            </div>
            <div class="termos">
                <span><?= $termosDeUso ?><a href="<?= $termosDeUsoLink ?>"><?= $termosDeUsoLinkTexto ?></a></span>
            </div>
            <div class="aviso">
                <span><?= $avisoLegal . " " . $avisoLegalDescricao ?></span>
            </div>
            <div class="copyright">
                <span><?= $copyright ?></span>
            </div>
            <div class="linha-2">
                <hr />
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