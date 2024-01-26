
<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../View/header.php");

extract($_REQUEST,EXTR_OVERWRITE);
$Id_Contato = isset($Id_Contato) ? $Id_Contato: "";
if($Id_Contato){

    $contatos = buscarContatoID($conexao,$Id_Contato);

?>
 <div class="container">
        <form class="row g-3" method="Post" action="../Controller/alterarContato.php">
        <input type="hidden" value="<?php echo ($contatos["Id_Contato"]); ?>"  name="Id_Contato">   
        
        <div class="col-md-8">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["nomeContato"]); ?>" name="nomeContato" id="inputNome">
            </div>

            <div class="col-md-4">
                <label for="inputFone" class="form-label">Fone</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["foneContato"]); ?>" name="foneContato" id="inputFone">
            </div>

            <div class="col-12">
                <!-- Button trigger modal -->
                
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </form>
    </div>

<?php
} else {
    echo ("Dados não encontrados");
};
include_once("footer.php");
?>
