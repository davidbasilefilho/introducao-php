<div class="container-fluid text-center w-50">
    <div class="col-sm-12">
        <div class="card shadow border border-dark bg-dark-subtle">
            <div class="col-sm-12 mt-4 mb-2">
                <h3 class="text-white">
                    Cadastrar Categoria
                </h3>
            </div>

            <form method="post" name="frmSave" id="frmSave" class="m-4">
                <div class="form-group row">
                    <label for="inputText" class="col-sm-1 col-form-label">
                        Nome
                    </label>

                    <div class="col-sm-11">
                        <input type="text" class="form-control rounded border border-0" id="txtName" name="txtName" placeholder="Digite o nome da categoria" maxlength="50" minlength="3" required>
                    </div>
                </div>

                <hr>

                <div class="form-group row">
                    <div class="col-sm-10 mx-auto">
                        <input type="submit" class="btn btn-primary m-3" name="btnSalvar" id="btnSalvar" value="Salvar">

                        <a href="index.php?p=categoria/consultar" class="btn btn-dark">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>