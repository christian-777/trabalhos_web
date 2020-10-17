<?php 
    include "conexao.php";
    $genero = $_POST["genero"];
    $banda = $_POST["banda"];
    $insert = "INSERT INTO banda(
                                    nome, 
                                    cod_genero
                                ) VALUES (
                                    '$banda',
                                    '$genero'
                                )";
    mysqli_query($con, $insert)
     or die(mysqli_error($con));
    echo "banda inserida com sucesso";
    echo'<hr /> <a href="form_banda.php">Clique para cadastrar outra banda</a>';
?>