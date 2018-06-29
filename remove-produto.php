<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_POST['id'];
removeProduto($conexao,$id);
header("Location: produto-lista.php?removido=true");
die();
?>

<p class="alert-success" >Produto <?=$id?>, removido com sucesso.</p>



