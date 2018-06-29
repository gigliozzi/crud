<?php
session_start();

//retorna se o SESSION está setado
function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]); 
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
        $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
        header("Location: index.php");
        die();
    }
}

//retona o valor do SESSION do usuario, ie, o usuário logado
function UsuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}

function logout() {
    session_destroy();
    session_start();
}