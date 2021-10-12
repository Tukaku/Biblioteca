<?php
session_start();
include "conexao.php";
$id = $_GET['idusuario'];
if($_POST){
        include 'includes/upload_cliente.php';
}
?>

<?php include "includes/head.php"; ?>
<?php include "includes/menu.php"; ?>

<h1> Foto Cliente </h1>
<form method="post"
action="foto-usuario.php?idusuario=<?php echo $id; ?> "enctype="multipart/form-data" >
<input type="hidden" name="id" size="15" value="<?php echo $dados['id'];?>" >

    <div class="form-group">
    <label class="col-md-4 control-label" for="titulo">
    Imagem</label>
    <div class="col-md-8">
    <input id="imagem" name="imagem" type="file"
    placeholder=""  class="form-control input-md"
    required="" >
    </div>
</div>
<input type="submit" value="Atualizar" />
</form>
<?php include "includes/footer.php"; ?>