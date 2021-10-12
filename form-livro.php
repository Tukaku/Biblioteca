<?php session_start();?>
    <?php include 'bloqueio-login.php'; ?>
    <?php include "includes/menu.php"; ?>
    <?php include "includes/head.php"; ?>
      
     <?php
     if($_POST){
        include 'cadastrar-livro.php';    
    }
     ?>

    <h1> Cadastro de Livros </h1>
    <form method="post" action="form-livro.php" >
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" class="form-control" name="titulo" size="15" />
        <label>Autor</label>
        <input type="text" class="form-control" name="autor" size="15" />
        <label>Editora</label>
        <input type="text" class="form-control" name="editora" size="15" />
        <label>Páginas</label>
        <input type="text" class="form-control" name="paginas" size="15" />
    </div>
    <div class="form-group">
        <label>Preço</label>
        <input type="text" class="form-control" name="preco" size="15" />
    </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar" />
    </form>