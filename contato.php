<nav class="container-fluid" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?p=home">Página Inicial</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contato</li>
    </ol>
</nav>

<div class="container-fluid">
    <h3 class="text-white text-center">Contato</h3>
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

<div class="container-fluid">
    <p class="text-center">Fale conosco! Preencha o formulário abaixo e entraremos em contato com você!</p>
</div>

<div class="container-fluid mt-4 w-75 mx-auto bg-dark-subtle rounded p-4">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="email" required class="form-control" id="exampleInputEmail1" placeholder="name@domain.com" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartilharemos o seu e-mail para ninguém.</div>
        </div>

        <div class="mb-3 form-outline">
            <label class="form-label" for="typePhone">Número de Telefone</label>
            <input type="tel" required id="typePhone" class="form-control" placeholder="+XX XXXXX-XXXX" />
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Concordo com nossos <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">termos de privacidade.</a></label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>