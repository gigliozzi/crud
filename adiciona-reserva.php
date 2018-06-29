<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");


$reserva = $_POST['reserva'];


if(insereProduto($conexao,)) { ?>
    <h3 class="text-success">Produto <?=$nome?>, R$ <?=$preco?> adicionado com sucesso.</h3>
<?php } else {  $msg = mysqli_error($conexao); ?>

    <h3 class="text-danger">Produto <?=$nome?> não foi adicionado.</h3>
    <h3 class="alert-danger"><?=$msg?></h3>
<?php } ?>



<?php include("rodape.php"); ?>