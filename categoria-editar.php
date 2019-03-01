<?php require_once 'cabecalho.php' ?>
<?php require_once 'global.php' ?>


<?php
	
	try{
		$idRecebido = $_GET['id'];
		$categoriaDAO = new CategoriaDAO();
		$lista = $categoriaDAO -> listarPorId($idRecebido);
		
	}
	catch(Exeption $e){
		
	}
?>
    <div class="row">
        <div class="col-md-12">
            <h2><p align="center">Editar Produto</p></h2>
        </div>
    </div>

    <hr />

    <form action="categoria-editar-post.php" method="post">
		<input type="hidden" name="id" id="id" value = "<?php echo $lista[0] ?>">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label for="lb1">Edite o Nome do Produto e Selecione sua Categoria</label>
                    <input for="lb1" type="text" name="produto" id="produto" class="form-control" placeholder="Produto" value = "<?php echo $lista[1] ?>" required><br>
					<div class="form-group">
						<input type="radio"name="categoria" id='categoria' value='bebida' required>Bebidas<br>
						<input type="radio"name="categoria" id='categoria' value='roupa' >Roupas<br>
						<input type="radio"name="categoria" id='categoria' value='alimento' >Alimento<br>
						<input type="radio"name="categoria" id='categoria' value='sapato'>Sapato<br>
						<input type="radio"name="categoria" id='categoria' value='acessorio' checked>Acessorio<br>
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