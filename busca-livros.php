<?php   
   session_start();
   $livro= null;
   if(isset($_GET['titulo'])){
       include "conexao.php";
       $titulo = $_GET['titulo'];
       $sql = "SELECT * FROM livro WHERE titulo LIKE'%{$titulo}%'";
       $livro= $conn->query($sql);
       $conn->close();
   }
?>
 
       <?php include "includes/head.php"; ?> 
       <?php include "includes/menu.php"; ?> 
 
       <h1>Buscar livro</h1>
 
        <form class="row">
           <div class="col">
               <div class="form-group">
                   <input type="text" name="titulo" class="form-control"
                   id="titulo" placeholder="Digite o nome do livro">
               </div>
           </div>
      
           <div class="col">
               <button type="submit" class="btn btn-primary">Submit</button>
           </div>
        </form>
 
<?php if ($livro!==null){?>
   <table class="table">
   <thead> <!-- cabecalho ou menu -->
   <tr>
   <th scope="col">Titulo</th>
   <th scope="col">Autor</th>
   <th scope="col">Editora</th>
   <th scope="col">Páginas</th>
   <th scope="col">Preço</th>
   <th scope="col">Editar</th>
   <th scope="col">Excluir</th>
   </tr>
   </thead>
 
   <tbody> <!-- corpo -->
 
<?php
  
   if ($livro->num_rows > 0) {
       while($row = $livro->fetch_assoc()) { // $clientes->fetch_assoc() -> transformar dados em matriz.
           echo '<tr scope="row">';
               // "<td>{echo $row['nome']}</td>"; ou "<td>".$row['nome']."</td>"; podemos usar umas das duas formas
 
           echo "<td>{$row['titulo']}</td>";
 
           echo "<td>{$row['autor']}</td>";
           echo "<td>{$row['editora']}</td>";
           echo "<td>{$row['paginas']}</td>";
           echo "<td>{$row['preco']}</td>";
 
           echo '<td><a class="btn btn-warning" href="editar-livro.php?idlivro='.$row['id'].'">editar</a></td>';
 
           echo '<td><a class="btn btn-danger" href="excluir-livro.php?idlivro='.$row['id'].'">excluir</a></td>';
 
           echo "<tr/>";
       }
   }
?>
  
   </tbody>
   </table>
 
   <div class="btn btn-primary">
   Total Registros: <span class="badge badge-light"><?php echo $livro->num_rows; ?></span>
   </div>
  
 
<?php } ?>
 
   <?php include "includes/footer.php"; ?> <!-- rodape -->
