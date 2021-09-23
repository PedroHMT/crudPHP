<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $nome = $_POST['nome'];
    $genero = $_POST['genero'];

    mysqli_query($con, "INSERT INTO livros(nome, genero) VALUES ('$nome', $genero)");
    
    echo "<h3>Livro Cadastrado com Sucesso</h3><br><br>Você será redirecionado...";
    header( "refresh:1;url=cad.php" );