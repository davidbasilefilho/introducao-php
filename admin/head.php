<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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