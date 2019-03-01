<?php require_once 'cabecalho.php' ?>

    <div class="row">
        <div class="col-md-12">
            <h2><p align="center">Criar Novo Produto</p></h2>
        </div>
    </div>

    <hr />

    <form action="produto-criar-post.php" method="post">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Produto" required>
                </div>

                <div class="form-group">
                    <label for="quantidade">Quantidade do Produto</label>
                    <input type="number" name="quantidade" id="quantidade"  min="0" class="form-control" placeholder="Quantidade do Produto" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Salvar">
                </div>

            </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?>
