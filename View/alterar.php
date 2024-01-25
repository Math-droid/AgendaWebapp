<?php
    require_once("../Model/conexao.php");
    require_once("../Model/bancoContato.php");
    include_once("header.php");
?>
<div class="container m-4" >
 Alterar CONTATO
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputcodigo"  class="col-form-label">Digite o Nome</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputcodigo" name="nomeContato" class="form-control" aria-describedby="passwordHelpInline">
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
    <?php
      extract($_REQUEST,EXTR_OVERWRITE);
      $nomeContato = isset($nomeContato)?$nomeContato : "";
      if($nomeContato){
        $dados = buscarContato($conexao,$nomeContato);
        foreach($dados as $contatos) : 
    ?>
    <tr>
    <th scope="row"> <?php echo($contatos["Id_Contato"]);?> </th>
      <td> <?php echo($contatos["nomeContato"])?> </td>
      <td> <?=$contatos["foneContato"]?> </td>
   
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
</div><!--fim container-->
<!--Fim Tabela-->
<?php
    include_once("footer.php");
?>