<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
include("banco-reserva.php");


$vaga = $_POST['vaga'];
$nome = strtoupper($_POST['nome']);
$rg = $_POST['rg'];

$assentos = listaQuantidadeAssentos($conexao);

if(inserePassageiro($conexao,$nome,$rg)){ ?>
    <h3 class="text-success">Reserva feita com sucesso.</h3>
    <?php } else {  $msg = mysqli_error($conexao); ?>
        <h3 class="text-danger">Cliente <?=$nome?> não foi adicionado.</h3>
        <h3 class="alert-danger"><?=$msg?></h3>
<?php } ?>


<?php foreach($assentos as $assento) : ?>

<?php     
if(atualizaQuantidade($conexao,$vaga,$assento['qtassentos'])){ ?>
    <h3 class="text-success">Quantidade atualizada com sucesso.</h3>
 <?php } else { $msg = mysqli_error($conexao); ?>
    <h3 class="text-danger">Quantidade de reservas não atualizada.</h3>        
    <h3 class="alert-danger"><?=$msg?></h3>
 <?php } ?>

 <?php endforeach ?>