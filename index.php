<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">

<head>
    <?php include_once 'cabecalho.php'; ?>
</head>

<body>
    <?php include_once 'navbar.php'; ?>

    <?php
    $page = filter_input(INPUT_GET, 'p');

    if (isset($page) && !empty($page) && file_exists("{$page}.php")) {
        include_once "{$page}.php";
    } else if (isset($page) && !empty($page) && !file_exists($page)) {
        include_once "404.php";
    } else {
        include_once "home.php";
    }
    ?>

    <br>

    <?php include_once 'plugins.php'; ?>
</body>

</html>