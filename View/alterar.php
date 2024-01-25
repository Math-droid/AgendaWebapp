<?php
    include_once("header.php");
?>
<!--inicio form-->
<div class="container m-4">
<div class="row g-3 align-items-center">
  ALTERAR CONTATO
  <div class="col-auto">
    <label for="inputcodigo" class="col-form-label">Digite o Código</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputcodigo" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
  <button type="submit" class="btn">Buscar</button>
  </div>
</div>
<!--Fim form-->
<!--Inicio Tabela-->
<table class="table">
  <thead>
    
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      <th scope="col">Alterar</th>
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
</div>
<!--Fim Tabela-->
<?php
    include_once("footer.php");
?>