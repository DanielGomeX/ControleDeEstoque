<?php require_once 'global.php';

    try {

        $categoria = new Categoria();
        $categoriaDAO = new CategoriaDAO();

 
		$categoria->setProduto($_POST['produto']);
		$categoria->setCategoria($_POST['categoria']);
		

        $categoriaDAO->inserir($categoria);
        header('Location: categoria-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>