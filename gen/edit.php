<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $query = mysqli_query($con, $query_04.$_GET['id']);
    
?>
<html>
    <head>
        <title>CRUD Biblioteca</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" src="../assets/css/style.css">
    </head>
    <body>
        <a href="index.php"><input type="button" value="Voltar"></a><br><br>
        <form method="POST" action="editgen.php">
            <?php while($result = mysqli_fetch_array($query)){?>
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            Nome do Gênero: <input type="text" name="nome" value="<?php echo $result[1]?>"><br><br>
            <?php } ?>
            <input type="submit" value="Editar">
        </form>
    </body>
</html>