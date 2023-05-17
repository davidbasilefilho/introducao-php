<div class="card shadow border border-dark bg-dark-subtle">
    <div class="mt-4 text-center">
        <h3 class="text-white">Cadastrar Curso</h3>
    </div>


    <form method="post" name="frmSave" id="frmSave" class="m-4">
        <div class="form-group row">
            <label for="inputText" class="col-sm-1 col-form-label">
                Nome
            </label>

            <div class="col-sm-11">
                <input type="text" class="form-control rounded border-0" id="txtName" name="txtName" placeholder="Digite o nome do curso" maxlength="50" minlength="3" required>
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="inputText" class="col-sm-1 col-form-label">Duração</label>

            <div class="col-sm-11">
                <input type="number" class="form-control rounded border-0" id="courseDuration" name="courseDuration" placeholder="Digite a duração do curso em semestres" maxlength="50" minlength="3" required>
            </div>
        </div>

        <div class="text-center mt-4">
            <input type="submit" class="btn btn-primary me-3" name="btnSalvar" id="btnSalvar" value="Salvar">

            <a href="index.php?p=curso/consultar" class="btn btn-dark">Voltar</a>
        </div>
    </form>
</div>

<?php
$name = $_POST["txtName"];
$courseDuration = $_POST["courseDuration"];

echo "Nome: {$name}<br />Duração do Curso: {$courseDuration}";
?>