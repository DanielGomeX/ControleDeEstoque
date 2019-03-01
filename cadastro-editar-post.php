<?php require_once 'global.php';

    try {

        $pessoa = new Cadastro();
        $pessoaDAO = new CadastroDAO();

		$pessoa->setId($_POST['id']);
		$pessoa->setCpf($_POST['cpf']);
        $pessoa->setNome($_POST['nome']);
        $pessoa->setData($_POST['data']);
		$pessoa->setTelefone($_POST['tel']);
		$pessoa->setEmail($_POST['email']);

        $pessoaDAO->editar($pessoa);
        header('Location: cadastro-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>