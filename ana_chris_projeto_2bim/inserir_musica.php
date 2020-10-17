<?php 
    include "conexao.php";
    $nome_musica = $_POST["nome_musica"];
    $banda = $_POST["banda"];
    $youtube = $_POST["youtube"];
    $insert = "INSERT INTO musica(
                                    nome, 
                                    cod_banda,
                                    youtube
                                ) VALUES (
                                    '$nome_musica',
                                    '$banda',
                                    '$youtube'
                                )";
    mysqli_query($con, $insert)
     or die(mysqli_error($con));
    echo "musica inserida com sucesso";
    echo'<hr /> <a href="form_musica.php">Clique para cadastrar outra musica</a>';
?>