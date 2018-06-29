<?php

function buscaUsuario($conexao,$email,$senha){
    $md5senha = md5($senha);
    $query = "SELECT * FROM usuarios WHERE email='{$email}' and senha='{$md5senha}'";
    $resultado = mysqli_query($conexao,$query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}