<?php
 session_start();
 include "conexao.php";      
$id = $_GET['idlivro'];
$sql = "SELECT * FROM livro WHERE id={$id}";
$livro = $conn->query($sql);
$dados=$livro->fetch_assoc();
$conn->close();
if($_POST){
    include "atualizar-livro.php";
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
        <form method="post" action="atualizar-livro.php?idlivro=<?php echo $id; ?>" >

        <input type="hidden" name="id" size="15" value="<?php echo $dados['id'];?>" />

            <label>Titulo</label>
            <input type="text" name="titulo" size="15" value="<?php echo $dados['titulo'];?>" /> 
            <br/>
            <label>Autor</label>
            <input type="text" name="autor" size="15" value="<?php echo $dados['autor'];?>" /> 
            <br/>
            <label>Editora</label>
            <input type="text" name="editora" size="15" value="<?php echo $dados['editora'];?>" /> 
            <br/>
            <label>Número de páginas</label>
            <input type="text" name="paginas" size="15" value="<?php echo $dados['paginas'];?>" /> 
            <br/>
            <label>Preço</label>
            <input type="text" name="preco" size="15" value="<?php echo $dados['preco'];?>" />
            <br/>
            <input type="submit" value="Atualizar" />
        </form>
    </body>
    <?php include "includes/footer.php"; ?>
    </html>
