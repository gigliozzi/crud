<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$senha = "123";

$vagas = listaVagas($conexao);

if(array_key_exists("removido",$_GET) && $_GET['removido']==true) :
?>
    <h4 class="remocao alert-success">Produto removido com sucesso</h4>
<?php endif ?>

<table class="table table-condensed table-striped table-bordered">

<thead>
    <tr>
      <th scope="col">Vagas disponíveis</th>
    </tr>
  </thead>

    <?php
        foreach ($vagas as $vaga) :
    ?>  
              
        <tr>
            <td><?=$vaga['qtassentos']?></td>
                </form>
                </td>
        </tr>  
    <?php endforeach ?>

</table>

<?php include("rodape.php"); ?>