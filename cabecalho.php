<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<link href="css/icons/font/bootstrap-icons.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

<title>
    <?php
    $page = filter_input(INPUT_GET, 'p');

    if (isset($page) && !empty($page) && file_exists($page . '.php') && $page != 'home') {
        echo ucwords($page)
            . " - BBK's Hardware";
    } else {
        echo "Página Inicial - BBK's Hardware";
    }
    ?>
</title>