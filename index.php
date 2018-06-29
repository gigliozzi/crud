<?php 
include("logica-usuario.php");
include("cabecalho.php"); 
?>

<?php 
if(isset($_SESSION["success"])){ ?>
  <h4 class="alert-success"><?=$_SESSION["success"]?></h4>
    <?php unset($_SESSION["success"]);
} ?>

<?php 
if(isset($_SESSION["danger"])){ ?>
  <h4 class="alert-danger"><?=$_SESSION["danger"]?></h4>
    <?php unset($_SESSION["danger"]);
} ?>





<h1>Bem vindo!</h1>
<?php /* VERIFICA SE EXISTE O COOKIE E EXIBE O LOGIN DO USUÁRIO */ ?>
  <?php if(usuarioEstaLogado()) { ?>
    <h4 class="alert-success">Usuário logado como <?=UsuarioLogado()?></h4>
    <a href="logout.php">Logout</a>
  <?php } else { ?>

	<form class="form-signin" action="login.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
		<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
		<div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
<?php } ?>

<?php include("rodape.php"); ?>