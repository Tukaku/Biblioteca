 <?php

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista-usuarios.php">Lista de Usuários</a>
      <li class="nav-item">
        <a class="nav-link" href="lista-livros.php">Lista de Livros</a>
        <li class="nav-item">
        <a class="nav-link" href="form-livro.php">Novo Livro</a>
        <li class="nav-item">
        <a class="nav-link" href="form-usuario.php">Novo Usuario</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="busca-livros.php">Busca de Livros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
        
          <?php echo $_SESSION['emailUsuario'];?></a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="logoff.php">Sair</a>
      </li>
    </ul>

  </div>
</nav>
<div class="container">