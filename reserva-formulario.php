<?php 
include("conecta.php");
include("cabecalho.php"); 
include("banco-categoria.php"); 
?>


<h2 class="form-produto">Formulário de Reserva</h2>

    <form class="form-horizontal" action="reserva-assento.php" method="post">
    <input type="hidden" name="vaga" value="1">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" style="text-transform:uppercase" class="form-control" name="nome">
            </div>
        </div>
        <div class="form-group">
            <label for="preco" class="col-sm-2 control-label">RG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="rg">
            </div>
        </div>
                
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>

<?php include("rodape.php"); ?>