<?php require_once 'cabecalho.php' ?>

    <div class="row">
        <div class="col-md-12">
            <h2><p align="center">Criar Novo Cadastro</p></h2>
        </div>
    </div>

    <hr />

    <form action="cadastro-criar-post.php" method="post">
        <div class="row">
			<input type="hidden" name="id" id="id" class="form-control" placeholder="id" required>
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input for="cpf" type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
                </div>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input for="nome" type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required>
                </div>
				
				<div class="form-group">
                    <label for="data">Data de Nascimento</label>
                    <input for="data" type="text" name="data" id="date" class="form-control" placeholder="Data de Nascimento" required>
                </div>

				<div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input for="telefone" type="tel" name="tel" id="tel" class="form-control" placeholder="Telefone" required>
                </div>
				
				<div class="form-group">
                    <label for="email">Email</label>
                    <input for="email" type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Salvar">
                </div>

            </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?>
