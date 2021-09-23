<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $nome = $_POST['nome'];

    mysqli_query($con, "INSERT INTO generos(nome) VALUES ('$nome')");
    
    echo "<h3>Gênero Cadastrado com Sucesso</h3><br><br>Você será redirecionado...";
    header( "refresh:1;url=cad.php" );