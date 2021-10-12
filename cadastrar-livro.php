<?php
    if($_POST){
    require_once "conexao.php";

        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $paginas = $_POST['paginas'];
        $preco = $_POST['preco'];

        $sql = "INSERT INTO livro VALUES (default,'{$titulo}','{$autor}','{$editora}','{$paginas}','{$preco}')";
if ($conn->query($sql) === TRUE) {
                echo "Cadastro com sucesso";
                echo "<br/>";
            } else {
                echo "Error: " .$conn->error;
            }
   
        $conn->close();
        }else{
            header("location:form-livro.php");
        }
?>