<?php
    include '../assets/config/config.php';
    include '../assets/config/query.php';

    $query = mysqli_query($con, $query_01);
?>
<html>
    <head>
        <title>CRUD Biblioteca</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" src="../assets/css/style.css">
    </head>
    <body>
        <a href="../index.html"><input type="button" value="Página Inicial"></a>
        <a href="cad.php"><input type="button" value="Cadastrar Livros"></a><br><br>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Ação 1</td>
                <td>Ação 2</td>
            </tr>
            <?php while($result = mysqli_fetch_array($query)){?>
                <tr>
                    <td><?php echo $result[0]?></td>
                    <td><?php echo $result[1]?></td>
                    <td><a href="edit.php?id=<?php echo $result[0]?>">Editar</a></td>
                    <td><a href="delete.php?id=<?php echo $result[0]?>">Deletar</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>