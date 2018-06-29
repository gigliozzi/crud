<?php 
include("conecta.php");
include("banco-categoria.php"); 
include("cabecalho.php");
include("logica-usuario.php"); 
verificaUsuario(); // chamada de função, verifica se usuário logado ou não

$categorias = listaCategorias($conexao);
?>

<h2 class="form-produto">Formulário de Produto</h2>

    <form class="form-horizontal" action="adiciona-produto.php" method="post">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="form-group">
            <label for="preco" class="col-sm-2 control-label">Preço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="preco">
            </div>
        </div>
        
        <div class="form-group">
            <label for="categoria" class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" name="descricao">
            </div>
        </div>
        
        <div class="form-group">
            <input type="checkbox" name="usado" value="true">  Usado
        </div>

        <div class="form-group">
            <label for="categoria" class="col-sm-2 control-label">Categoria do produto</label>
            <div class="col-sm-10">
            <select class="form-control" name="categoria_id">
            <?php foreach($categorias as $categoria): ?>
                <option value="<?=$categoria['id']?>"> <?=$categoria['nome']?> </option>
            <?php endforeach ?>
            </select>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>

<?php include("rodape.php"); ?>