<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$senha = "123";

$produtos = listaProdutos($conexao);

if(array_key_exists("removido",$_GET) && $_GET['removido']==true) :
?>
    <h4 class="remocao alert-danger">Produto removido com sucesso</h4>
<?php endif ?>

<table class="table table-condensed table-striped table-bordered">

<thead>
    <tr>
      <th scope="col" class="text-center">Produto</th>
      <th scope="col" class="text-center">Preço</th>
      <th scope="col" class="text-center">Descrição</th>
      <th scope="col" class="text-center">Categoria</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($produtos as $produto) :
    ?>  
        <tr>
            <td class="align-middle"><?=$produto['nome']?></td>
            <td class="align-middle"><?=$produto['preco']?></td>
            <td class="align-middle"><?=substr($produto['descricao'],0,40)?></td>
            <td class="text-center align-middle"><?=$produto['categoria_nome']?></td>
            
            <td class="text-center align-middle">
                <a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a>
            </td>
            
            <td class="text-center align-middle">
                <form action="remove-produto.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                        <button class="btn btn-danger">remover</button>
                </form>
            </td>
        </tr>  
    <?php endforeach ?>
    </tbody>
</table>

<?php include("rodape.php"); ?>