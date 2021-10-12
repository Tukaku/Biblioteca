<?php
 include "conexao.php";
 
 $id = $_POST['id'];
 $titulo = $_POST['titulo'];
 $autor = $_POST['autor'];
 $editora = $_POST['editora'];
 $paginas = $_POST['paginas'];
 $preco = $_POST['preco'];


 $sql="UPDATE livro SET 
 titulo ='{$titulo}', autor ='{$autor}', editora ='{$editora}', paginas ='{$paginas}', preco ='{$preco}' WHERE id = {$id}";

if($titulo== ""){
    $erro = "Titulo inválido";
}
if($autor== ""){
    $erro = "Autor inválido";
}else if($preco==""||$preco <= 0){
    $erro="Preço inválido";
}else if($paginas==""||$paginas <= 0){
    $erro="Numero de páginas inválido";

}else if ($conn->query($sql) == TRUE) {
    $erro="Atualizado com sucesso";
 }else{
    $erro="Error:".$conn->error; 
}

?>
 
    <?php include "includes/footer.php";?>
