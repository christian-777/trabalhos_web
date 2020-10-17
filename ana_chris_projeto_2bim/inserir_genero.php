<?php 
    include "conexao.php";
    $genero = $_POST["genero"];
    
    $insert = "INSERT INTO genero(
                                    id_genero,
                                    nome 
                                ) VALUES (
                                    '$genero',
                                )";
    mysqli_query($con, $insert)
     or die(mysqli_error($con));
    echo "Genero inserido com sucesso";
    echo'<hr /> <a href="form_genero.php">Clique para cadastrar outro genero</a>';
?>