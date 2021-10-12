<?php
if(isset($_GET['idusuario'])){
    $id = $_GET['idusuario'];
}

if(isset($_POST['idusuario'])){
    include "conexao.php";

    $id = $_POST['idusuario'];
    $sql = "DELETE FROM usuario WHERE id={$id}";

    if ($conn->query($sql) === TRUE) {
        header("location: lista-usuarios.php");
    }else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
</html> 
    <head>
        <title> Excluir Usuário</title>
    </head>
    <body>
    <?php include "includes/head.php"; ?>
    <?php include "includes/menu.php"; ?>
    <form method="POST" action="excluir-usuario.php">
    <label>Deseja Realmente Excluir?</label>
        <input type="hidden" name="idusuario" value="<?php echo $id; ?>">
        <input type="submit" value="Sim">
        </form>
        <?php include "includes/footer.php"; ?>
        </body>
    </html>
