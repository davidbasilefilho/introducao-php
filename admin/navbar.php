<?php
function insertNavItem($pageId, $name, $iconClass, $isDefault)
{
    $navItem = "<a class='nav-link ";
    $page = filter_input(INPUT_GET, 'p');

    if (isset($page) && !empty($page) && file_exists("{$page}.php")) {
        if ($page == $pageId) {
            $navItem .= "active' ";
        }
    } else if (isset($page) && !empty($page)) {
        $navItem .= "' ";
    } else if ($isDefault == true) {
        $navItem .= "active' ";
    }

    $navItem .= "aria-current='page' href='index.php?p={$pageId}'>"
        . "<i class='{$iconClass} me-2'></i>"
        . $name . '</a>';

    echo $navItem;
}

$page = filter_input(INPUT_GET, 'p');
?>

<nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container">
        <a class="navbar-brand" href="index.php?p=home">BBK's Hardware</a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <?php insertNavItem('home', 'Página Inicial', 'bi bi-house-door', true); ?>

                <?php insertNavItem('produtos', 'Produtos', 'bi bi-bag', false); ?>

                <?php insertNavItem('contato', 'Contato', 'bi bi-person', false); ?>

                <?php insertNavItem('area/consultar', 'Área', 'bi bi-globe', false); ?>

                <?php insertNavItem('curso/consultar', 'Curso', 'bi bi-mortarboard', false); ?>

                <?php insertNavItem('sobre', 'Sobre', 'bi bi-info-circle', false); ?>

                <?php insertNavItem('logout', "Sair", "bi bi-box-arrow-left", false); ?>
            </ul>
        </div>
    </div>
</nav>