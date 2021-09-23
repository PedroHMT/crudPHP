<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $id = $_GET['id'];

    mysqli_query($con, "DELETE FROM livros WHERE id=$id");
    
    echo "<h3>Livro Deletado com Sucesso</h3><br><br>Você será redirecionado...";
    header( "refresh:1;url=index.php" );