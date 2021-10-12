<?php
if(isset($_GET['idlivro'])){
    $id = $_GET['idlivro'];
}

if(isset($_POST['idlivro'])){
    include "conexao.php";

    $id = $_POST['idlivro'];
    $sql = "DELETE FROM livro WHERE id={$id}";

    if ($conn->query($sql) === TRUE) {
        header("location: lista-livros.php");
    }else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
</html> 
    <head>
        <title> Atualizar Livro</title>
    </head>
    <body>
    <?php include "includes/head.php"; ?>
    <?php include "includes/menu.php"; ?>
    <form method="POST" action="excluir-livro.php">
    <label>Deseja Realmente Excluir?</label>
        <input type="hidden" name="idlivro" value="<?php echo $id; ?>">
        <input type="submit" value="Sim">
        </form>
        <?php include "includes/footer.php"; ?>
        </body>
    </html>
