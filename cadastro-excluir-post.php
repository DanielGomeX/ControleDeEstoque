<?php require_once 'global.php';

    try {
		
		$id = $_GET['id'];
		$pessoaDAO =new CadastroDAO;
        $pessoaDAO->excluir($id);
		
        
        header('Location: cadastro-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>