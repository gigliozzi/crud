<?php 
include("conecta.php");
include("cabecalho.php"); 
include("banco-categoria.php"); 
include("banco-produto.php"); 

$id = $_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h1 class="form-produto">Alteração de Produto</h1>

 <form class="form-horizontal" action="altera-produto.php" method="post">

    <input type="hidden" name="id" value="<?=$produto['id']?>">
    
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" value="<?=$produto['nome']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="preco" class="col-sm-2 control-label">Preço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="preco" value="<?=$produto['preco']?>">
            </div>
        </div>
        
        <div class="form-group">
            <label for="categoria" class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" name="descricao" value="<?=$produto['descricao']?>">
            </div>
        </div>
        
        <div class="form-group">
            <input type="checkbox" name="usado" <?=$usado?> >  Usado
        </div>

        <div class="form-group">
            <label for="categoria" class="col-sm-2 control-label">Categoria do produto</label>
            <div class="col-sm-10">
            <select class="form-control" name="categoria_id">
            <?php foreach($categorias as $categoria): 
                $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                $selecao = $essaEhACategoria ? "selected='selected'" : "" ;
                ?>
                <option value="<?=$categoria['id']?>" <?=$selecao?>> <?=$categoria['nome']?> </option>
            <?php endforeach ?>
            </select>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </div>
    </form>

<?php include("rodape.php"); ?>