<?php
 session_start();  
 include 'bloqueio-login.php';
 $cliente = null;
 if(isset($_GET['nome'])){
     include "conexao.php";
$nome = $_GET['nome'];
$sql = "SELECT * FROM cliente WHERE nome LIKE '%{$nome}%'";
$cliente = $conn->query($sql);
$conn->close();
 }
?>
    <?php include "includes/menu.php"; ?>
    <?php include "includes/head.php"; ?>

    <h1>Busca de CLientes</h1>

    <form class="row" action="busca-clientes.php" method="GET">
        <div class="col">
            <div class="form-group">
                <input type="text" name="nome" class="form-control" 
                id="email" placeholder="Digite o nome do cliente">
            </div>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <?php if ($cliente!==null){?>

        <table class="table">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
   <?php
            if ($cliente->num_rows > 0) {  // verificando se hรก clientes
                // $clientes->fetch_assoc() -> transformar dados em matriz
                while($row = $cliente->fetch_assoc()) {
                    echo '<tr scope="row">';
                    echo "<td>{$row['nome']}</td>";

                    
                    echo "<td>{$row['email']}</td>";

                    
                    echo '<td><a class="btn btn-warning" href="edita-cliente.php?idcliente='.$row['id'].'"> editar<a/></td>';

                    
                    echo '<td><a class="btn btn-danger" href="excluir-cliente.php?idcliente='.$row['id'].'">excluir<a/></td>';
                    echo "</tr>";
                   
                }
            }
        ?>
        </tbody>
        </table>

        <div class="btn btn-primary">
            Total Registros: <span class="badge badge-light">
            <?php echo $cliente->num_rows; ?></span>
            </div>

            <?php } ?>
         <?php include "includes/footer.php"; ?>