
<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../View/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

buscarContato($conexao,$nomeContato);

header("Location: ../View/buscar.php");

?>