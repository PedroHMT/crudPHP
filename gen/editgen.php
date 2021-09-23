<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];

    mysqli_query($con, "UPDATE generos SET nome='$nome' WHERE id=$id");
    
    echo "<h3>Gênero Editado com Sucesso</h3><br><br>Você será redirecionado...";
    header( "refresh:1;url=edit.php?id=$id" );