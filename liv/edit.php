<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $query = mysqli_query($con, $query_03.$_GET['id']);
    
   $queryy = mysqli_query($con, $query_02);
?>
<html>
    <head>
        <title>CRUD Biblioteca</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" src="../assets/css/style.css">
    </head>
    <body>
        <a href="index.php"><input type="button" value="Voltar"></a><br><br>
        <form method="POST" action="editliv.php">
            <?php while($resultt = mysqli_fetch_array($query)){?>
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            Nome do Livro: <input type="text" name="nome" value="<?php echo $resultt[1]?>"><br><br>
            Gênero:
            <select name="genero">
                <?php while($result = mysqli_fetch_array($queryy)){
                    if($result[0] == $resultt[3]){?>
                        <option value="<?php echo $result[0]?>" selected><?php echo $result[1]?></option>
                    <?php }else{?>
                        <option value="<?php echo $result[0]?>"><?php echo $result[1]?></option>
                <?php } } ?>
            </select><br><br>
            <?php } ?>
            <input type="submit" value="Editar">
        </form>
    </body>
</html>