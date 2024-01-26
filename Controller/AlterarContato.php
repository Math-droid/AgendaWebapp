
<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../View/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(alterarContato($conexao,$Id_Contato,$nomeContato,$foneContato)){
    echo("As informações foram salvas");
    }else{
        echo("Alerta!! As informações do Contato Não foram salvas");
    }
?>