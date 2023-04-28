<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">

<head>
    <?php include_once 'cabecalho.php'; ?>
</head>

<body>
    <?php include_once 'navbar.php'; ?>

    <?php
    $page = filter_input(INPUT_GET, 'p');

    if (isset($page) && !empty($page)) {
        include_once $page . '.php';
    } else {
        include_once 'home.php';
    }
    ?>

    <?php include_once 'plugins.php'; ?>
</body>

</html>