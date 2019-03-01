<?php require_once 'global.php';

    try {

        $produto = new Produto();
        $produtoDAO = new ProdutoDAO();

		$produto->setId($_POST['id']);
        $produto->setNome($_POST['nome']);
        $produto->setQuantidade($_POST['quantidade']);

        $produtoDAO->editar($produto);
        header('Location: produto-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>