<?php 
//
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../View/header.php");

//esta função extrai os dados de um site
extract($_REQUEST,EXTR_OVERWRITE);

if(deletarContato($conexao,$Id_Contato)){
echo("As informações do Contato foram excluidas com sucesso");
}else{
    echo("Alerta!! As informações do Contato Não foram excluidas");
}