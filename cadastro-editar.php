<?php require_once 'cabecalho.php' ?>
<?php require_once 'global.php' ?>


<?php
	
	try{
		$idRecebido = $_GET['id'];
		$pessoaDAO = new CadastroDAO();
		$lista = $pessoaDAO -> listarPorId($idRecebido);
		
	}
	catch(Exception $e){
		
	}
?>
    <div class="row">
        <div class="col-md-12">
            <h2><p align="center">Editar Cadastro</p></h2>
        </div>
    </div>

    <hr />

    <form action="cadastro-editar-post.php" method="post">
		<input type="hidden" name="id" id="id" value = "<?php echo $lista[0] ?>">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label for="cpf">Editar CPF</label>
                    <input for="cpf" type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required value="<?php echo $lista[1] ?>"
					>
                </div>

                <div class="form-group">
                    <label for="nome">Editar Nome</label>
                    <input for="nome" type="text" name="nome" id="nome"  class="form-control" placeholder="Nome" required value="<?php	echo $lista[2] ?>">
                </div>
				
				<div class="form-group">
                    <label for="data">Editar Data de Nascimento</label>
                    <input for="data" type="text" name="data" id="data"   class="form-control" placeholder="Data Nasc." required value="<?php	echo $lista[3] ?>">
                </div>
				
				<div class="form-group">
                    <label for="tel">Editar Telefone</label>
                    <input for="tel" type="tel" name="tel" id="tel"  min="0" class="form-control" placeholder="Telefone" required value="<?php	echo $lista[4] ?>">
                </div>
				
				<div class="form-group">
                    <label for="email">Editar Email</label>
                    <input for="email" type="email" name="email" id="email"  class="form-control" placeholder="Email" required value="<?php	echo $lista[5] ?>">
                </div>
				

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Salvar">
                </div>

            </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?>