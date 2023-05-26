<!doctype html>
<html lang="pt-BR" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Acesso ao Sistema</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="form-signin card shadow container bg-dark-subtle border-0 mt-5 w-100 p-4 mx-auto">
        <form method="post">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-3">
                <input type="email" name="txtEmail" class="form-control border-0" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Endereço de E-mail</label>
            </div>
            <div class="form-floating mb-5">
                <input type="password" name="txtPass" class="form-control border-0" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>

            <input class="w-100 btn btn-lg btn-primary" name="btnLogin" value="Login" type="submit">
        </form>
    </div>
</body>

</html>

<?php
if (filter_input(INPUT_POST, "btnLogin")) {
    $email = filter_input(INPUT_POST, "txtEmail");
    $senha = filter_input(INPUT_POST, "txtPass");

    if ($email == "teste@teste.com" && $senha == "123") {
        session_start();
        $_SESSION["access"] = "access_granted";
        header("location:index.php");
    }
}
?>