<?php
function insertNavItem($pageId, $name, $iconClass, $isDefault)
{
    $navItem = "<a class='nav-link ";
    $page = filter_input(INPUT_GET, 'p');

    if (isset($page) && !empty($page)) {
        if ($page == $pageId) {
            $navItem .= "active' ";
        }
    } else if ($isDefault == true) {
        $navItem .= "active' ";
    }

    $navItem .= "aria-current='page' href='?p={$pageId}'>"
        . "<i class='{$iconClass}'></i> "
        . $name . '</a>';
    echo $navItem;
}

$page = filter_input(INPUT_GET, 'p');
?>

<nav class="mb-3 navbar navbar-expand-lg bg-dark-subtle navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="?p=home">BBK's Hardware</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php insertNavItem('home', 'Página Inicial', 'bi bi-house-door-fill', true); ?>
                </li>

                <li class="nav-item">
                    <?php insertNavItem('produtos', 'Produtos', 'bi bi-bag-fill', false); ?>
                </li>
            </ul>
        </div>
    </div>
</nav>