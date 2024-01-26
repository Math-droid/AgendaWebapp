<?php
function inserirContato($conexao,$nomeContato,$foneContato){
    $query = "insert into contatotb(nomeContato,foneContato)values('{$nomeContato}','{$foneContato}')";
    return mysqli_query($conexao,$query);
}

function buscarContato($conexao,$nomeContato){
    $query = "Select * from contatotb where nomeContato like '%{$nomeContato}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function buscarContatoID($conexao,$Id_Contato){
    $query = "Select * from contatotb where Id_Contato = '{$Id_Contato}'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}

function alterarContato($conexao,$Id_Contato,$nomeContato,$foneContato){
    $query = "update contatotb set nomeContato='{$nomeContato}', 
    foneContato='{$foneContato}' where Id_Contato = '{$Id_Contato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function deletarContato($conexao,$Id_Contato){
    $query = "Delete from contatotb where Id_Contato like '{$Id_Contato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

    