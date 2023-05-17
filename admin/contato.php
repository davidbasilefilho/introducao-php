<nav class="container-fluid" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?p=home">Página Inicial</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contato</li>
    </ol>
</nav>

<div class="container-fluid mt-4 mx-auto bg-dark-subtle shadow border border-dark rounded p-4">
    <div class="container-fluid rounded bg-dark p-1">
        <h3 class="text-white text-center mt-2">Contato</h3>

        <p class="text-center px-2">Fale conosco! Preencha o formulário abaixo e entraremos em contato com você!</p>
    </div>

    <hr class="my-4">

    <form method="post">
        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="email">
                E-mail
            </label>

            <div class="col-sm-11">
                <input type="email" name="email" required class="form-control border-0" id="email" placeholder="name@domain.com" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label class="col-form-label col-sm-1" for="typePhone">
                Telefone
            </label>

            <div class="col-sm-11">
                <input type="tel" name="telephone" required id="typePhone" class="form-control border-0" placeholder="+XX XX XXXXX-XXXX" />
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Concordo com nossos <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">termos de privacidade.</a></label>
        </div>

        <hr class="my-4">

        <div class="text-center">
            <button type="submit" value="submit" class="btn btn-success me-3">Submit</button>
            <button type="reset" value="reset" class="btn btn-dark">Reset</button>
        </div>
    </form>
</div>


<div class="text-center mt-5 text-white">
    <h2>Nosso suporte é o melhor!</h2>
</div>

<div id="carouselExample" class="carousel slide mt-4 mx-auto mb-4">
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <img src="../img/suporte1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../img/suporte2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../img/suporte3.jpg" class="d-block w-100" alt="...">
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