    <?php session_start();?>
    <?php include 'bloqueio-login.php'; ?>
    <?php include "includes/menu.php"; ?>
    <?php include "includes/head.php"; ?>
      
     <?php
     if($_POST){
        include 'cadastrar-usuario.php';    
    }
     ?>

    <h1> Cadastro de Usuários </h1>
    <form method="post" action="form-usuario.php" >
    <div class="form-group">
        <label>E-mail</label>
        <input type="text" class="form-control" name="email" size="15" />
    </div>
    <div class="form-group">
        <label>Senha</label>
        <input type="text" class="form-control" name="senha" size="15" />
    </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar" />
    </form>