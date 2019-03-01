<?php require_once 'global.php';

    try {
		
		$id = $_GET['id'];
		$produtoDAO =new ProdutoDAO;
        $produtoDAO->excluir($id);
		
        
        header('Location: produto-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>