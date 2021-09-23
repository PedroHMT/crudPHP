<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';
?>
<html>
    <head>
        <title>CRUD Biblioteca</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" src="../assets/css/style.css">
    </head>
    <body>
        <a href="index.php"><input type="button" value="Voltar"></a><br><br>
        <form method="POST" action="cadgen.php">
            Nome do Gênero: <input type="text" name="nome"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>