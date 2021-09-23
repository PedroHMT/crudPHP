<?php

    $query_01 = "SELECT * FROM livros";

    $query_02 = "SELECT * FROM generos";

    $query_03 = "SELECT * FROM livros INNER JOIN generos ON livros.genero = generos.id WHERE livros.id=";

    $query_04 = "SELECT * FROM generos WHERE id=";