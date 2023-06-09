<?php
date_default_timezone_set("America/Sao_Paulo");

(!isset($_SESSION) ? session_start() : "");

if ($_SESSION["access"] != "access_granted") {
    header("location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">

<head>
    <?php include_once 'head.php'; ?>
</head>

<body>
    <?php include_once 'navbar.php'; ?>

    <div class="container my-4">
        <?php
        $page = filter_input(INPUT_GET, 'p');

        if (isset($page) && !empty($page) && file_exists("{$page}.php")) {
            include_once "{$page}.php";
        } else if (isset($page) && !empty($page)) {
            include_once "404.php";
        } else {
            include_once "home.php";
        }
        ?>
    </div>

    <?php include_once 'plugins.php'; ?>
</body>

</html>