<div class="card shadow border border-dark bg-dark-subtle">
    <div class="mt-4 text-center">
        <h3 class="text-white">Cadastrar Área</h3>
    </div>


    <form method="post" name="frmSave" id="frmSave" class="m-4">
        <div class="form-group row">
            <label for="inputText" class="col-sm-1 col-form-label">
                Nome
            </label>

            <div class="col-sm-11">
                <input type="text" class="form-control rounded border-0" id="txtName" name="txtName" placeholder="Digite o nome da área" maxlength="50" minlength="3" required>
            </div>
        </div>

        <div class="text-center mt-4">
            <input type="submit" class="btn btn-primary me-3" name="btnSalvar" id="btnSalvar" value="Salvar">

            <a href="index.php?p=area/consultar" class="btn btn-dark">Voltar</a>
        </div>
    </form>
</div>


<?php
$name = $_POST["txtName"];

echo "Nome: {$name}";
?>