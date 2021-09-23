<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];

    mysqli_query($con, "UPDATE livros SET nome='$nome', genero=$genero WHERE id=$id");
    
    echo "<h3>Livro Editado com Sucesso</h3><br><br>Você será redirecionado...";
    header( "refresh:1;url=edit.php?id=$id" );