<?php
 session_start();
 include "conexao.php";      
$id = $_GET['idusuario'];
$sql = "SELECT * FROM usuario WHERE id={$id}";
$usuario = $conn->query($sql);
$dados=$usuario->fetch_assoc();
$conn->close();
if($_POST){
    include "atualizar-usuario.php";
}

?>
<html>
    <head>
        <title> Edita Usuário</title>
    <head>
    <?php include "includes/menu.php"; ?>
    <?php include "includes/head.php"; ?>
    <body>
        <h1> Atualizar Usuário </h1>
        <form method="post" action="atualizar-usuario.php" >

        <input type="hidden" name="id" size="15" value="<?php echo $dados['id'];?>" />

            <label>E-Mail</label>
            <input type="text" name="email" size="15" value="<?php echo $dados['email'];?>" /> 
            <br/>
            <label>Senha</label>
            <input type="text" name="senha" size="15" value="<?php echo $dados['senha'];?>" />
            <br/>       
 <div class="form-group">
            <label class="control-label" for="titulo">Imagem</label>
            <div>
                <?php   
                    $file = "img-usuario".$dados['id'].".jpg";
                    if (file_exists($file)) {
                        echo "<img src=\"{$file}\" width=\"300\"> ";
                    }else{
                        echo "<img src=\"img-usuario/perfil.jpg\" width=\"300\"> ";
                    } 
                ?>
            <div>
                <input id="imagem" name="imagem" type="file" placeholder="" class="form-control input-md" >
            <input type="submit" value="Atualizar" />
        </form>
    </body>
    <?php include "includes/footer.php"; ?>
    </html>
