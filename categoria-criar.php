<?php require_once 'cabecalho.php' ?>

    <div class="row">
        <div class="col-md-12">
            <h2><p align="center">Criar Nova Categoria</p></h2>
        </div>
    </div>

    <hr />

    <form action="categoria-criar-post.php" method="post">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label for="bebidas">Insira o Nome do Produto e Selecione sua Categoria</label>
                    <input type="text" name="produto" id="produto" class="form-control" placeholder="bebidas" required><br>
					<div class="form-group">
						<input type="radio"name="categoria" id='categoria' value='bebida' >Bebidas<br>
						<input type="radio"name="categoria" id='categoria' value='roupa' >Roupas<br>
						<input type="radio"name="categoria" id='categoria' value='alimento' >Alimento<br>
						<input type="radio"name="categoria" id='categoria' value='sapato'>Sapato<br>
						<input type="radio"name="categoria" id='categoria' value='acesso' checked>Acessorio<br>
					</div>
				</div>
				<br>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Salvar">
                </div>

            </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?>
