<?php
include_once("header.php");
include_once("../Model/conexao.php");
include_once("../Model/bancoContato.php");
?>
<!-- inicio formulario -->
<div class="container m-4">
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="nomeContato" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
</form>
<!--fim formulario -->

<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      <th scope="col">Deletar</th>
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
      <td> <?= $contatos["nomeContato"]?> </td>
      <td> <?= $contatos["foneContato"]?> </td>
      <td>
    <!-- Button trigger modal -->                                        
    <button type="button" Id_Contato="<?php echo($contatos["Id_Contato"]);?>" nomeContato= "<?= $contatos["nomeContato"]?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarModal">
    Deletar
    </button>

      </td>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
<!--fim tabela-->
</div>
<!-- Modal -->
<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ATENÇÃO <br>Este processo é PERMANENTE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">      
      </div>
      <div class="modal-footer">
      <form action= "../Controller/deletarContato.php" method="post">
        <input type="hidden" value="" class="Id_Contato from-control" name="Id_Contato">
        <button type="submit" class="btn btn-danger">Excluir</button>
      </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script>
  let deletarContatoModal = document.getElementById('deletarModal');
      
      deletarContatoModal.addEventListener('show.bs.modal',function(event){
  let button = event.relatedTarget;
  let IdContato = button.getAttribute('Id_Contato');
  let nomeContato = button.getAttribute('nomeContato');

  let modalBody = deletarContatoModal.querySelector('.modal-body');
  //
  modalBody.textContent= 'Deseja realmente excluir o Contato '+ nomeContato +'?'
  
  let IDContato = deletarContatoModal.querySelector('.modal-footer .Id_Contato');
  IDContato.value = IdContato;
  })
</script>
<?php
include_once("footer.php");
?>