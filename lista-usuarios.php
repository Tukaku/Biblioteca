<?php
    session_start();  

    include "conexao.php";
    $sql = "SELECT * FROM usuario";
    $usuario = $conn->query($sql);

    $conn->close();
    
    ?>
    <html>
        <head>
        <title> Lista de Usuários</title>
    </head>
    <body>
    <?php include "includes/menu.php"; ?>
    <?php include "includes/head.php"; ?>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Foto</th>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">Foto</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
    </tr>
    </thead>
    <tbody>
   <?php
            if ($usuario->num_rows > 0) {  // verificando se há clientes
                // $clientes->fetch_assoc() -> transformar dados em matriz
                while($row = $usuario->fetch_assoc()) {
                    echo '<tr scope="row">';              
                    echo "<td>";
                    $file = "img-usuario/".$row['id'].".jpg";
                  if (file_exists($file)){
                     echo "<img src=\"{$file}\" width=\"50\">";
                      }else {
              echo "<img src=\"img-usuario/perfil.jpg\"width=\"50\">";
          }
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo '<td><a class="btn btn-danger" href="foto-usuario.php?idusuario='.$row['id'].'">Foto<a/></td>';
                    
                    echo '<td><a class="btn btn-warning" href="editar-usuario.php?idusuario='.$row['id'].'"> editar<a/></td>';

                    
                    echo '<td><a class="btn btn-danger" href="excluir-usuario.php?idusuario='.$row['id'].'">excluir<a/></td>';
                    echo "</tr>";
                   
                }
            }
        ?>
        </tbody>
        </table>
        <div class="btn btn-primary">
            Total Registros: <span class="badge badge-light">
            <?php echo $usuario->num_rows; ?></span>
            </div>
         <?php include "includes/footer.php"; ?>

        </body>
    </html>