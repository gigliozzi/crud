<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
include("logica-usuario.php"); 

verificaUsuario(); //isso impede a inserção sem o logon


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if(array_key_exists('usado', $_POST)) {
    $usado = "true";
}  else {
    $usado = "false";
}

if(insereProduto($conexao,$nome,$preco,$descricao,$categoria_id,$usado)) { ?>
    <h3 class="text-success">Produto <?=$nome?>, R$ <?=$preco?> adicionado com sucesso.</h3>
<?php } else {  $msg = mysqli_error($conexao); ?>

    <h3 class="text-danger">Produto <?=$nome?> não foi adicionado.</h3>
    <h3 class="alert-danger"><?=$msg?></h3>
<?php } ?>



<?php include("rodape.php"); ?>