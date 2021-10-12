<?php
session_start();
include "conexao.php";
$id = $_GET['idlivro'];
if($_POST){
        include 'includes/upload_livro.php';
}
?>

<?php include "includes/head.php"; ?>
<?php include "includes/menu.php"; ?>

<h1> Foto Cliente </h1>
<form method="post"
action="foto-livro.php?idlivro=<?php echo $id; ?> "enctype="multipart/form-data" >
<input type="hidden" name="id" size="15" value="<?php echo $dados['id'];?>" >

    <div class="form-group">
    <label class="col-md-4 control-label" for="titulo">
    Imagem</label>
    <div class="col-md-8">
    <input id="imagem" name="imagem" type="file" placeholder=""  class="form-control input-md" required="" >
    </div>
</div>
<input type="submit" value="Atualizar" />
</form>
<?php include "includes/footer.php"; ?>