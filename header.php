<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inserir titulo e logo em Personalizar > Identidade do site</title>

    <link rel="stylesheet" href="wp-content\themes\maquina-trafego-tema\style.css">
    <link rel="shortcut icon" href="wp-content\themes\maquina-trafego-tema\assets\images\favicon.png" type="image/x-icon">

    <?php require_once 'style.php' ?>
    <?php require_once 'responsividade.php' ?>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/e489fc5bcf.js" crossorigin="anonymous"></script>

    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>