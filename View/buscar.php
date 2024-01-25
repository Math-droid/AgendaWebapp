<?php
    require_once("../Model/conexao.php");
    require_once("../Model/bancoContato.php");
    include_once("header.php");
?>
<div class="container m-4" >
  BUSCAR CONTATO
<form class="row g-3" method="GET" action="../Controller/buscar.php">
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputcodigo" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
  <button type="submit" class="btn">Buscar</button>
  </div>
</div>
</form>
<!--Fim form-->
<!--Inicio Tabela-->
<table class="table">
  <thead>
    

  
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>X</td>
    </tr>
  
  </tbody>
</table>
</div><!--fim container-->
<!--Fim Tabela-->
<?php
    include_once("footer.php");
?>