<?php require_once 'cabecalho.php' ?>
<?php require_once 'global.php' ?>


<?php
	
	try{
		$idRecebido = $_GET['id'];
		$produtoDAO = new ProdutoDAO();
		$lista = $produtoDAO -> listarPorId($idRecebido);
		
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

    <form action="produto-editar-post.php" method="post">
		<input type="hidden" name="id" id="id" value = "<?php echo $lista[0] ?>">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Produto" required value="<?php echo $lista[1] ?>"
					>
                </div>

                <div class="form-group">
                    <label for="quantidade">Quantidade do Produto</label>
                    <input type="number" name="quantidade" id="quantidade"  min="0" class="form-control" placeholder="Quantidade do Produto" required value="<?php	echo $lista[2] ?>">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Salvar">
                </div>

            </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?>