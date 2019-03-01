<?php  require_once 'global.php' ?>

<?php
    try {
        $categoriaDAO = new CategoriaDAO();
        $lista = $categoriaDAO->listar();
        
    } catch (Exception $e) {
        Erro::trataErro($e);
    }
?>

<?php require_once 'cabecalho.php' ?>

<div class="row">
    <div class="col-md-12">
        <h2>Categorias</h2>
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-4">
        <a href="categoria-criar.php" class="btn btn-info btn-block">Adicionar Novo Produto</a><br>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if (count($lista) > 0): ?>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>PRODUTO</th>
                    <th>CATEGORIA</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $linha): ?>
                        <tr>
                            <td><?= $linha[0] ?></td>
                            <td><?= $linha[1] ?></td>
                            <td><?= $linha[2] ?></td>
							
                            <td><a href="categoria-editar.php?id=<?php echo $linha[0] ?>" class="btn btn-info">Editar</a></td>
                            <td><a href="categoria-excluir-post.php?id=<?php echo $linha[0] ?>" class="btn btn-danger">Excluir</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum produto cadastrado!</p>
        <?php endif ?>
    </div>
</div>
<?php require_once 'rodape.php' ?>
