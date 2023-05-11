<nav class="container-fluid" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?p=home">Página Inicial</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contato</li>
    </ol>
</nav>

<div class="container-fluid mt-4 w-75 mx-auto bg-dark-subtle rounded p-4">
    <div class="container-fluid rounded bg-dark p-1 mb-3">
        <h3 class="text-white text-center mt-2">Contato</h3>

        <p class="text-center px-2">Fale conosco! Preencha o formulário abaixo e entraremos em contato com você!</p>
    </div>

    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="name@domain.com" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartilharemos o seu e-mail para ninguém.</div>
        </div>

        <div class="mb-3 form-outline">
            <label class="form-label" for="typePhone">Número de Telefone</label>
            <input type="tel" name="telephone" required id="typePhone" class="form-control" placeholder="+XX XX XXXXX-XXXX" />
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Concordo com nossos <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">termos de privacidade.</a></label>
        </div>

        <button type="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="text-center mt-5 text-white">
    <h2>Nosso suporte é o melhor!</h2>
</div>

<div id="carouselExample" class="carousel slide mt-4 mx-auto mb-4" style="width: 60%;">
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <img src="img/suporte1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/suporte2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/suporte3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>