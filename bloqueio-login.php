<?php
    //se não existir nomeUsuario, redireciona para index
    if(!isset($_SESSION["idUsuario"]))
    header("location: index.php?erro=102");
    //iseet ->verifica se foi criado
    ?>