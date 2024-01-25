<?php
    require_once("../Model/conexao.php");
    require_once("../Model/bancoContato.php");
    include_once("header.php");
?>
<div class="container m-4">
<div class="row g-3 align-items-center">
  DELETAR CONTATO
  <form class="row g-3" method="GET" action="#"> 

    <div class="col-auto">
      <label for="inputnome"name="nomeContato" class="col-form-label">Digite o Nome</label>
    </div>

    <div class="col-auto">
      <input type="text" id="inputcodigo" class="form-control" aria-describedby="passwordHelpInline">
    </div>

    <div class="col-auto">
      <!--  -->
      <button type="submit" class="btn">Buscar</button>
    </div>

  </form><!--Fim form-->
  
  <table class="table"><!--Inicio Tabela-->
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Deletar</th>
      </tr>
      </thead>
    <tbody>
      <?php
        extract($_REQUEST,EXTR_OVERWRITE);
        //função IF simple, se
        $nomeContato =isset($nomeContato)?$nomeContato : "";
        if($nomeContato)
        {
          $dados = buscarContato($conexao,$nomeContato);
          foreach($dados as $contatos): //Loop que leva o que esté em $dados para $contatos
         ?>
          <tr>
                <th scope="row">  <?php echo($contatos["Id_Contato"])?> </th>
                <td><?=$contatos["nomeContato"]?></td>
                <td><?=$contatos["foneContato"]?></td>
                <td>
                  <a class="btn btn-primary" href="xx.php?codigo=<?=$contato["Id_Contato"]?>">
                  Deletar
                  </a>
                </td>
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