<?php
 
 function buscarContatoId($conexao, $Id_Contato){
    $query = "select * contatotb where Id_Contato like '{$Id_Contato}'";
    return mysqli_query($conexao,$query);
    
 
}
function inserirContato($conexao,$nomeContato,$foneContato){
    $query = "insert into contatotb (nomeContato, foneContato)values('{$nomeContato}','{$foneContato}')";
    return mysqli_query($conexao,$query);
}
 
 
function buscarContato($conexao, $nomeContato){
    $query = "select * contatotb where nomeContato like '{$nomeContato}'";
    return mysqli_query($conexao,$query);
    
 
}
 
 
function alterarContato($conexao,$nomeContato,$foneContato,$id_Contato){
    $query = "update contatotb set nomeContato= '{$nomeContato}',
     foneContato= '{$foneContato}', where id_Contato= '{$id_Contato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
 
}
 
 
function deletarContato($conexao,$Id_Contato){
 
    $query = "delete from contatotb where id_Contato= '{$Id_Contato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
 
