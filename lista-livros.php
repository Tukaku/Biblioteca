<?php
    session_start();  

    include "conexao.php";
    $sql = "SELECT * FROM livro";
    $livro = $conn->query($sql);

    $conn->close();
    
    ?>
    <html>
        <head>
        <title> Lista de Livros</title>
    </head>
    <body>
    <?php include "includes/menu.php"; ?>
    <?php include "includes/head.php"; ?>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Foto</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Editora</th>
        <th scope="col">Páginas</th>
        <th scope="col">Preço</th>
        <th scope="col">Foto</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
    </tr>
    </thead>
    <tbody>
   <?php
            if ($livro->num_rows > 0) {  // verificando se há clientes
                // $clientes->fetch_assoc() -> transformar dados em matriz
                while($row = $livro->fetch_assoc()) {
                    echo '<tr scope="row">';
                    echo "<td>";
                    $file = "img-livro/".$row['id'].".jpg";
                    if (file_exists($file)){
                       echo "<img src=\"{$file}\" width=\"50\">";
                        }else {
                echo "<img src=\"img-livro/perfil.jpg\"width=\"50\">";
                        }
                    echo "<td>{$row['titulo']}</td>";
                    echo "<td>{$row['autor']}</td>";
                    echo "<td>{$row['editora']}</td>";
                    echo "<td>{$row['paginas']}</td>";
                    echo "<td>{$row['preco']}</td>";

                    echo '<td><a class="btn btn-danger" href="foto-livro.php?idlivro='.$row['id'].'">Foto<a/></td>';
                    echo '<td><a class="btn btn-warning" href="editar-livro.php?idlivro='.$row['id'].'"> editar<a/></td>';

                    
                    echo '<td><a class="btn btn-danger" href="excluir-livro.php?idlivro='.$row['id'].'">excluir<a/></td>';
                    echo "</tr>";
                   
                }
            }
        ?>
        </tbody>
        </table>
        <div class="btn btn-primary">
            Total Registros: <span class="badge badge-light">
            <?php echo $livro->num_rows; ?></span>
            </div>
         <?php include "includes/footer.php"; ?>

        </body>
    </html>