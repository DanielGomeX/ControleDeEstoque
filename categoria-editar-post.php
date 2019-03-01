<?php require_once 'global.php';

    try {

        $categoria = new Categoria();
        $categoriaDAO = new CategoriaDAO();

		$categoria->setId($_POST['id']);
		$categoria->setProduto($_POST['produto']);
		$categoria->setCategoria($_POST['categoria']);

        $categoriaDAO->editar($categoria);
        header('Location: categoria-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>