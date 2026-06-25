<?php

$url = isset($_GET['url']) ? $_GET['url'] : 'inicio';

$url = rtrim($url, '/');

switch ($url) {
    case 'inicio':
        $header = 'include/header_include.php';
        $body = 'views/inicio_content.php';
        $footer = 'include/footer_include.php';
        $style = 'css/inicio.css?v=1';
        break;

    case 'bases':
        $header = 'include/header_include.php';
        $body = 'views/bases_content.php';
        $footer = 'include/footer_include.php';
        $style = 'css/bases.css?v=1';
        break;

    default:
        $header = 'include/header_include.php';
        $body = 'views/404.php';
        $footer = 'include/footer_include.php';
        $style = 'css/404.css';
        break;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inpirada en Clash Of Clans.">

    <link rel="shortcut icon" href="img/icons/logo_min.webp" type="image/webp">
    <title>Clash Of Build</title>

    <link rel="stylesheet" href="css/root_reset.css?v=1">
    <link rel="stylesheet" href="css/fontfamilys.css?v=1">
    <link rel="stylesheet" href="css/headers.css?v=1">
    <link rel="stylesheet" href="css/footers.css?v=1">
    <link rel="stylesheet" href="<?php echo $style; ?>">

</head>

<body>

    <?php
    if (!empty($header)) {
        include_once $header;
    }
    ?>

    <?php
    include_once $body;
    ?>

    <?php
    if (!empty($footer)) {
        include_once $footer;
    }
    ?>

</body>

</html>