<?php

function inserePassageiro($conexao,$nome,$rg) {
    $query = "INSERT INTO passageiros (nome, rg) VALUES ('{$nome}','{$rg}')";
        return mysqli_query($conexao,$query);
}

function atualizaQuantidade($conexao,$vaga,$assentos) {
    $assentos = $assentos - $vaga;
    $query = "update onibus set qtassentos={$assentos} where id=1";
    return mysqli_query($conexao,$query);
}

function listaQuantidadeAssentos($conexao){
    $lugares = array();
    $query = "SELECT * from onibus";
    $resultado = mysqli_query($conexao,$query);
    while($vaga = mysqli_fetch_assoc($resultado)){
        array_push($lugares, $vaga);
    }
    return $lugares;
}

function listaPassageiros($conexao){
    $passageiros = array();
    $resultado = mysqli_query($conexao,"SELECT * FROM passageiros");
    while($passageiro = mysqli_fetch_assoc($resultado)){
        array_push($passageiros, $passageiro);
    }
    return $passageiros;
}
