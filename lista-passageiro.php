<?php
include("cabecalho.php");
include("conecta.php");
include("banco-reserva.php");

$passageiros = listaPassageiros($conexao);
$assentos = listaQuantidadeAssentos($conexao);
?>


<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Identidade</th>
        </tr>
    </thead>

<?php
foreach($passageiros as $passageiro) : 
?>
        <tr>
            <td><?=$passageiro['id']?></td>
            <td><?=$passageiro['nome']?></td>
            <td><?=$passageiro['rg']?></td>
        </tr>
<?php endforeach ?>

</table>

<table>
<?php foreach($assentos as $assento) :
?>
    <tr>
        <td><h4>Assentos disponíveis:</h4></td>
        <td></td>
        <td><h4 class="datatable"><?=$assento['qtassentos']?></h4></td>
    </tr>
<?php endforeach ?>
</table>