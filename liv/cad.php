<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $query = mysqli_query($con, $query_02);
?>
<html>
    <head>
        <title>CRUD Biblioteca</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" src="../assets/css/style.css">
    </head>
    <body>
        <a href="index.php"><input type="button" value="Voltar"></a><br><br>
        <form method="POST" action="cadliv.php">
            Nome do Livro: <input type="text" name="nome"><br><br>
            Gênero:
            <select name="genero">
                <?php while($result = mysqli_fetch_array($query)){?>
                    <option value="<?php echo $result[0]?>"><?php echo $result[1]?></option>
                <?php } ?>
            </select><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>