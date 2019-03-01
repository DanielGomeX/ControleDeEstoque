<?php require_once 'global.php';

    try {
		
		$id = $_GET['id'];
		$categoriaDAO =new CategoriaDAO;
        $categoriaDAO->excluir($id);
		
        
        header('Location: categoria-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>